<?php

namespace App\Http\Controllers;

use App\Events\DeleteSocketServerNotification;
use App\Events\SendSocketServerNotification;
use App\Events\UpdateSocketServerNotification;
use App\Notifications;
use App\Utils\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Log;
use App\Rules\NotificationAppRule;
use App\Utils\Logger;
use App\Utils\SocketServerApiService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $appId = $request->query('app_id');
        $limit = min($request->query('limit', 50), 50);

        $query = Notifications::select(['notifications.*']);
        if ($appId) {
            $query->where('notifications.app_id', $appId);
        }

        if (!CurrentUser::isSuperAdmin()) {
            // $query
            //     ->join(
            //         'organization_location_apps',
            //         'organization_location_apps.app_id',
            //         '=',
            //         'notifications.app_id'
            //     )
            //     ->join(
            //         'organization_locations',
            //         'organization_locations.id',
            //         '=',
            //         'organization_location_apps.organization_location_id'
            //     )
            //     ->join(
            //         'app_installations',
            //         'app_installations.organization_location_app_id',
            //         '=',
            //         'organization_location_apps.id'
            //     )
            //     ->join(
            //         'permission_group_apps',
            //         'permission_group_apps.organization_location_app_id',
            //         '=',
            //         'organization_location_apps.id'
            //     )->join(
            //         'permission_groups',
            //         'permission_groups.id',
            //         '=',
            //         'permission_group_apps.permission_group_id'
            //     )->join(
            //         'permission_group_users',
            //         'permission_group_users.permission_group_id',
            //         '=',
            //         'permission_groups.id'
            //     )->where(
            //         'permission_group_users.organization_user_id',
            //         CurrentUser::getOrganizationUserId()
            //     )->where(
            //         'organization_locations.organization_id',
            //         CurrentUser::getOrganizationId()
            //     );

            $query->where('notifications.organization_user_id', CurrentUser::getOrganizationUserId());
        }

        // dd($query->toSql());

        $notifications = $query->paginate($limit);
        return $notifications;
    }

    public function bulkCreate(Request $request)
    {
        $data = $request->validate([
            'app_id' => ['required','exists:apps,id', new NotificationAppRule()],
            'organization_user_ids.*' => 'required|exists:organization_users,id',
            'message' => 'required|string',
            'data' => 'required',
            'action_name' => 'required|string'
        ]);

        $response = [];
        $notifData = [];
        foreach ($data['organization_user_ids'] as $orgUserId) {
            $notifData[] = [
                'action_name' => $data['action_name'],
                'data' => $data['data'],
                'message' => $data['message'],
                'app_id' => $data['app_id'],
                'organization_user_id' => $orgUserId,
                'created_at' => date('Y-m-d H;i:s'),
                'updated_at' => date('Y-m-d H;i:s'),
            ];
        }
        DB::beginTransaction();
        try {
            $lastNotif = Notifications::orderByDesc('id')->limit(1)->first();
            $lastId = $lastNotif ? $lastNotif->id : 0;
            Notifications::insert($notifData);

            $nextId = $lastId + 1;
            foreach ($data['organization_user_ids'] as $orgUserId) {
                $response[] = [
                    'id' => $nextId,
                    'organization_user_id' => $orgUserId
                ];
                $nextId += 1;
            }

            DB::commit();

            //send notification to socket server
            $notifContent = [
                'app_id' => $data['app_id'],
                'message' => $data['message'],
                'data' => json_decode($data['data']),
                'action_name' => $data['action_name'],
                'delivered_date' => null,
            ];
            $notificationList = [];
            foreach ($response as $notification) {
                $notificationList[] = [
                    'notification_id' => $notification['id'],
                    'organization_user_id' => $notification['organization_user_id']
                ];
            }
            event(new SendSocketServerNotification($notifContent, $notificationList));

            return response()->json($response, Response::HTTP_CREATED);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'msg' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Get total undelivered notifications.
     */
    public function getCountUnDelivered(Request $request)
    {

        $organizationUserId = $request->query('organization_user_id');
        if (!$organizationUserId) {
            $organizationUserId = CurrentUser::getOrganizationUserId();
        }
        if (!$organizationUserId) {
            return response()->json([
                'code' => 'ORGANITION_USER_ID_REQUIRED'
            ], Response::HTTP_NOT_FOUND);
        }

        $appId = $request->query('app_id');

        /** @var Builder */
        $query = Notifications::select('id')
            ->where('organization_user_id', $organizationUserId)
            ->whereNull('delivered_date');
        if ($appId) {
            $query->where('app_id', $appId);
        }

        $count = $query->count();
        return response()->json([
            'count' => $count
        ]);
    }

    /**
     * Set the delivered date.
     */
    public function setDelivered(Request $request, $id)
    {
        $organizationUserId =
            CurrentUser::isSuperAdmin()
            ? $request->get('organization_user_id')
            : CurrentUser::getOrganizationUserId();

        $notif = Notifications::where('organization_user_id', $organizationUserId)
            ->where('id', $id)
            ->firstOrFail();
        $notif->delivered_date = date('Y-m-d H:i:s');
        $notif->save();

        // call other apps that the notification was delivered

        return response()->json($notif);
    }

    public function removeBulkNotification(Request $request)
    {
        $data = $request->validate([
            'ids.*' => 'required|exists:notifications,id',
        ]);

        /** @var Collection */
        $notifs = Notifications::whereIn('id', $data['ids'])->get();
        //send socker server update 
        if (count($notifs) > 0) {
            $notifList = [];
            foreach ($notifs as $notif) {
                $notifList[] = [
                    'notification_id' => $notif->id,
                    'organization_user_id' => $notif->organization_user_id
                ];
            }


            $notifData = [
                'notification_list' => $notifList
            ];
            event(new DeleteSocketServerNotification($notifData));

            Notifications::whereIn('id', $data['ids'])->delete();
        }

        return response()->json([]);
    }

    public function setBulkNotifDeliveredNull(Request $request)
    {
        $data = $request->validate([
            'ids.*' => 'required|exists:notifications,id',
            'message' => 'required',
        ]);

        /** @var Collection */
        $notifs = Notifications::whereIn('id', $data['ids'])->get();
        Notifications::whereIn('id', $data['ids'])
            ->update([
                'delivered_date' => null
            ]);
        //send socker server update 
        if (count($notifs) > 0) {
            $notifList = [];
            foreach ($notifs as $notif) {
                $notifList[] = [
                    'notification_id' => $notif->id,
                    'organization_user_id' => $notif->organization_user_id
                ];
            }
            $notifData = [
                'app_id' => $notifs->first->app_id,
                'message' => $data['message'],
                'action_name' => $notifs->first->action_name,
                'data' => $notifs->first->data,
                'notification_list' => $notifList
            ];

            event(new UpdateSocketServerNotification($notifData));
        }
        return response()->json([]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'app_id' => ['required','exists:apps,id', new NotificationAppRule()],
            'organization_user_id' => 'required|exists:organization_users,id',
            'message' => 'required|string',
            'data' => 'required|array',
            'action_name' => 'required|string'
        ]);

        $rsData = Notifications::create($data);

        // send notification to socket server
        $notifContent = [
            'app_id' => $data['app_id'],
            'message' => $data['message'],
            'data' => $data['data'],
            'action_name' => $data['action_name'],
            'delivered_date' => null,
        ];
        $notifications = [
            ['notification_id' => $rsData->id, 'organization_user_id' => $rsData->organization_user_id]
        ];
        event(new SendSocketServerNotification($notifContent, $notifications));
        Logger::log($request, Logger::severity(0), 2, 94);
        return response()->json($rsData, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $query = Notifications::select('notifications.*');
        if (!CurrentUser::isSuperAdmin()) {
            $query
                ->join(
                    'organization_location_apps',
                    'organization_location_apps.app_id',
                    '=',
                    'notifications.app_id'
                )
                ->join(
                    'organization_locations',
                    'organization_locations.id',
                    '=',
                    'organization_location_apps.organization_location_id'
                )
                ->join(
                    'app_installations',
                    'app_installations.organization_location_app_id',
                    '=',
                    'organization_location_apps.id'
                )
                ->join(
                    'organization_users',
                    'organization_users.organization_id',
                    '=',
                    'organization_locations.organization_id'
                );

            $query->where('notifications.organization_user_id', CurrentUser::getOrganizationUserId());
        }
        $rs = $query->where('notifications.id', $id)->firstOrFail();
        Logger::log($request, Logger::severity(0), 2, 93);
        return response()->json($rs);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'app_id' => ['required','exists:apps,id', new NotificationAppRule()],
            'organization_user_id' => 'required|exists:organization_users,id',
            'message' => 'string',
            'data' => 'array',
            'action_name' => 'string',
            'delivered_date' => 'date'
        ]);

        $query = Notifications::select('notifications.*');
        if (!CurrentUser::isSuperAdmin()) {
            $query
                ->join(
                    'organization_location_apps',
                    'organization_location_apps.app_id',
                    '=',
                    'notifications.app_id'
                )
                ->join(
                    'organization_locations',
                    'organization_locations.id',
                    '=',
                    'organization_location_apps.organization_location_id'
                )
                ->join(
                    'app_installations',
                    'app_installations.organization_location_app_id',
                    '=',
                    'organization_location_apps.id'
                )
                ->join(
                    'organization_users',
                    'organization_users.organization_id',
                    '=',
                    'organization_locations.organization_id'
                );

            $query->where('notifications.organization_user_id', $data['organization_user_id']);
        }

        $notification = $query->where('notifications.id', $id)->firstOrFail();

        $notification->fill($data);
        $notification->save();

        $notifData = [
            "app_id" => $notification->app_id,
            "organization_user_id" => $notification->organization_user_id,
            "message" => $notification->message,
            "data" => $notification->data,
            "action_name" => $notification->action_name,
            "delivered_date" => null,
            "notification_list" => [
                [
                    'organization_user_id' => $notification->organization_user_id,
                    'notification_id' => $notification->id
                ]
            ]
        ];
        event(new UpdateSocketServerNotification($notifData));

        Logger::log($request, Logger::severity(0), 2, 95);
        return response()->json($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $query = Notifications::select('notifications.*');
        if (!CurrentUser::isSuperAdmin()) {
            $query
                ->join(
                    'organization_location_apps',
                    'organization_location_apps.app_id',
                    '=',
                    'notifications.app_id'
                )
                ->join(
                    'organization_locations',
                    'organization_locations.id',
                    '=',
                    'organization_location_apps.organization_location_id'
                )
                ->join(
                    'app_installations',
                    'app_installations.organization_location_app_id',
                    '=',
                    'organization_location_apps.id'
                )
                ->where('organization_locations.organization_id', CurrentUser::getOrganizationId());

            $query->where('notifications.organization_user_id', CurrentUser::getOrganizationUserId());
        }

        $notification = $query->where('notifications.id', $id)->firstOrFail();
        $notification->delete();
        Logger::log($request, Logger::severity(0), 2, 96);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}

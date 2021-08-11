<?php

namespace App\Http\Controllers;

use App\AppQuickLaunch;
use App\OrganizationLocation;
use Illuminate\Http\Request;
use App\OrganizationUser;
use App\PermissionGroup;
use App\PermissionGroupUser;
use App\Utils\S3FileUploader;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Utils\CurrentUser;
use App\OrganizationLocationApp;
use App\Repositories\OrganizationUserRepository;
use App\User;
use App\UserType;
use App\Utils\Logger;

class OrganizationUserController extends Controller
{
    /**
     * @var OrganizationUserRepository
     */
    private $organizationUserRepository;

    public function __construct(
        OrganizationUserRepository $organizationUserRepository
    ) {
        $this->organizationUserRepository = $organizationUserRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userTypeId = $request->query('user_type_id');
        $searchText = $request->query('search_text');
        $organizationId = $request->query('organization_id');
        $limit = min($request->query('limit', 50), 50); //limit to 50 per page
        $query = OrganizationUser::select(); //->with(['organization', 'user.userType', 'user']);

        if (!CurrentUser::isSuperAdmin()) {
            $organizationId = CurrentUser::getOrganizationId();
        }

        if ($organizationId) {
            $query->where('organization_id', $organizationId);
        }

        if ($userTypeId) {
            $query->where('user_type_id', $userTypeId);
        }

        if ($searchText && !CurrentUser::isUser()) {
            $query->where(function ($query) use ($searchText) {
                $query->where('windows_username', 'like', '%' . $searchText . '%')
                    ->orWhere('display_name', 'like', '%' . $searchText . '%');
            });
        }


        return $query->paginate($limit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required|exists:users,id',
            'display_name' => 'required|max:255',
            'profile_photo' => 'image',
            'title' => 'string',
            'windows_username' => 'string',
            'user_type_id' => 'exists:user_types,id',
            'status' => 'sometimes|string'
        ];

        if (CurrentUser::isSuperAdmin()) {
            $rules['user_type_id'] = 'sometimes|exists:user_types,id';
            $rules['organization_id.*'] = 'required|exists:organizations,id';
        }
        $data = $request->validate($rules);

        $data['organization_id'] = $data['organization_id'] ?? [];
        if (!CurrentUser::isSuperAdmin()) {
            // if not a super admin, let set all creat org user as NORMAL_USER
            if (isset($data['user_type_id'])) {
                $userType = UserType::find($data['user_type_id']);
                if (!in_array($userType->name, [UserType::USER, UserType::ORG_ADMIN])) {
                    return response()->json([
                        'code' => 'USER_TYPE_INVALID'
                    ], Response::HTTP_UNPROCESSABLE_ENTITY);
                }
            } else {
                $data['user_type_id'] = UserType::where('name', UserType::USER)->first()->id;
            }

            $data['organization_id'] = [CurrentUser::getOrganizationId()];
        }

        $data['user_type_id'] = $data['user_type_id']
            ?? UserType::where('name', UserType::USER)->first()->id;


        $data['status'] = $data['status'] ?? OrganizationUser::STATUS_PENDING;
        $orgLocationMap = [];
        foreach ($data['organization_id'] as $organizationId) {
            $orgLocations = OrganizationLocation::with([
                'permissionGroups' => function ($query) {
                    $query->where('name', PermissionGroup::DEFAULT_NAME);
                }
            ])
                ->where('organization_id', $organizationId)
                ->get();
            $orgLocationMap[$organizationId] = $orgLocations;
        }

        // remove organization id
        unset($data['organization_id']);

        // upload profile photo if available
        if (isset($data['profile_photo']) && $data['profile_photo']) {
            $photoLink = S3FileUploader::uploadToAssets($request, 'profile_photo');
            if ($photoLink) {
                $data['profile_photo'] = $photoLink;
            }
        }

        DB::beginTransaction();
        try {

            $createdOrgUsers = [];

            /**
             * Loop all available organization with permission group
             */
            foreach ($orgLocationMap as $organizationId => $orgLocations) {
                $data['organization_id'] = $organizationId;
                $data['hash_token'] = OrganizationUser::generateHashToken([
                    $organizationId,
                    $data['user_id'],
                    date('Y-m-d H:i:s')
                ]);

                // Check user if exist and ignore.
                $orgUserExist = OrganizationUser::where('organization_id', $organizationId)
                    ->where('user_id', $data['user_id'])
                    ->first();
                if ($orgUserExist) {
                    $createdOrgUsers[] = $orgUserExist;
                    continue;
                }

                $ou = $this->organizationUserRepository->create($data);

                //Loop all org locations
                foreach ($orgLocations as $orgLocation) {

                    //Loop all available default permission groups
                    $permissionGroups = $orgLocation->permissionGroups;
                    foreach ($permissionGroups as $permissionGroup) {
                        /**
                         * Add to a Default Permission Group
                         */
                        PermissionGroupUser::create([
                            'organization_user_id' => $ou->id,
                            'permission_group_id' => $permissionGroup->id
                        ]);
                    }

                    // Add quick app launch
                    // get all org location apps that installed
                    $orgLocationApps = OrganizationLocationApp::with([
                        'appInstallations'
                    ])->where(
                        'organization_location_id',
                        $orgLocation->id
                    )
                        ->where('is_quick_launch', 1)->get();

                    foreach ($orgLocationApps as $orgLocationApp) {
                        $appInstallations = $orgLocationApp->appInstallations;
                        foreach ($appInstallations as $appInstallation) {
                            $aql = AppQuickLaunch::create([
                                'sort_order' => 1,
                                'app_installation_id' => $appInstallation->id,
                                'organization_user_id' => $ou->id
                            ]);
                        }
                    }
                }

                $ou->load([
                    'user',
                    'userType',
                    'organization',
                    'permissionGroups.permissionGroup'
                ]);

                $createdOrgUsers[] = $ou;
            }

            Logger::log($request, Logger::severity(0), 2, 34);

            DB::commit();

            return response()->json($createdOrgUsers, Response::HTTP_CREATED);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'msg' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        Logger::log($request, Logger::severity(0), 2, 33);
        $with = [
            'organization', 'user', 'usertype'
        ];

        if (CurrentUser::isSuperAdmin()) {
            return $this->organizationUserRepository
                ->getById($id, $with);
        } else {
            return $this->organizationUserRepository
                ->getByOrganizationId($id, CurrentUser::getOrganizationId(), $with);
        }
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
        $query = OrganizationUser::select();
        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_id', CurrentUser::getOrganizationId());
        }
        $toUpdate = $query->where('id', $id)->firstOrFail();

        $data = $request->validate([
            'display_name' => 'max:255',
            'profile_photo' => 'image',
            'title' => 'max:255',
            'status' => 'max:255',
            'windows_username' => 'max:255',
            //'user_id' => 'exists:users,id',
            //'organization_id.*' => 'exists:organizations,id',
            'user_type_id' => 'exists:user_types,id'
        ]);
        $userType = UserType::find($data['user_type_id']);

        if (CurrentUser::isUser()) {
            $data['user_type_id'] = UserType::where('name', UserType::USER)->first()->id;
        }

        $photoLink = S3FileUploader::uploadToAssets($request, 'profile_photo');
        if ($photoLink) {
            $data['profile_photo'] = $photoLink;
        }

        DB::beginTransaction();
        try {
            $user = $toUpdate->user;
            if (CurrentUser::isSuperAdmin() && $userType->name === UserType::SUPER_ADMIN) {
                $user->isSuperAdmin = 1;
            }else {
                $user->isSuperAdmin = 0;
            }
            $user->save();
            $this->organizationUserRepository->update($toUpdate, $data);
            Logger::log($request, Logger::severity(0), 2, 35);
            DB::commit();

            return response()->json($toUpdate);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'msg' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $query = OrganizationUser::select();
        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_id', CurrentUser::getOrganizationId());
        }
        $toDelete = $query->where('id', $id)->firstOrFail();
        $this->organizationUserRepository->delete($toDelete);
        Logger::log($request, Logger::severity(0), 2, 36);
        return response()->json([
            'message' => "Organization user deleted."
        ], 204);
    }
}

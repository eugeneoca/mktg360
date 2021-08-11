<?php

namespace App\Http\Controllers;

use App\OrganizationUser;
use App\PermissionGroupUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Log;
use App\PermissionGroup;
use App\Utils\CurrentUser;
use Illuminate\Validation\Rule;
use App\Utils\Logger;

class PermissionGroupUserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $permissionGroupId)
    {
        $limit = min($request->query('limit', 50), 50);
        $query = OrganizationUser::select("organization_users.*")
            ->join(
                'permission_group_users',
                'permission_group_users.organization_user_id',
                '=',
                'organization_users.id'
            )->where(
                'permission_group_users.permission_group_id',
                $permissionGroupId
            );

        if (!CurrentUser::isSuperAdmin()) {
            $query->where(
                'organization_users.organization_id',
                CurrentUser::getOrganizationId()
            );
        }

        $orgUsers = $query->paginate($limit);
        return $orgUsers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $permissionGroupId)
    {
        $data = $request->validate([
            'organization_user_id' => [
                'required',
                Rule::exists('App\OrganizationUser', 'id')
                    ->where(function ($q) {
                        if (!CurrentUser::isSuperAdmin()) {
                            $q->where(
                                'organization_id',
                                CurrentUser::getOrganizationId()
                            );
                        }
                    }),
                Rule::unique('App\PermissionGroupUser', 'organization_user_id')
                    ->where('permission_group_id',$permissionGroupId)
            ]
        ]);

        if (!CurrentUser::isSuperAdmin()) {
            $pg = PermissionGroup::with('organizationLocation')
                ->findOrFail($permissionGroupId);
            if ($pg->organizationLocation->organization_id != CurrentUser::getOrganizationId()) {
                return response()->json([
                    'code' => 'PERMISSION_NOT_FOUND'
                ], Response::HTTP_NOT_FOUND);
            }
        }
        $data['permission_group_id'] = $permissionGroupId;



        $pgu = PermissionGroupUser::create($data);
        Logger::log($request,Logger::severity(0), 2, 13);
        return response()->json($pgu, Response::HTTP_CREATED);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $permissionGroupId, $organizationUserId)
    {
        $query = PermissionGroupUser::select('permission_group_users.*')
            ->join(
                'organization_users',
                'organization_users.id',
                '=',
                'permission_group_users.organization_user_id'
            )
            ->where('permission_group_users.organization_user_id', $organizationUserId)
            ->where('permission_group_users.permission_group_id', $permissionGroupId);

        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_users.organization_id', CurrentUser::getOrganizationId());
        }

        $pgu = $query->firstOrFail();
        $pgu->delete();
        Logger::log($request,Logger::severity(0), 2, 14);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}

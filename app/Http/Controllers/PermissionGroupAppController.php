<?php

namespace App\Http\Controllers;

use App\NavsApp;
use App\PermissionGroupApp;
use App\OrganizationLocationApp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Log;
use App\PermissionGroup;
use App\Rules\ValidateOrgLocationAppIdByOrganization;
use App\Utils\CurrentUser;
use Illuminate\Validation\Rule;
use App\Utils\Logger;

class PermissionGroupAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $limit = min($request->query('limit', 50), 50);
        $query = OrganizationLocationApp::with('app')
            ->select('organization_location_apps.*')
            ->join(
                'permission_group_apps',
                'permission_group_apps.organization_location_app_id',
                '=',
                'organization_location_apps.id'
            )->where('permission_group_apps.permission_group_id', $id);

        if (!CurrentUser::isSuperAdmin()) {
            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'organization_location_apps.organization_location_id'
            );
            $query->where('organization_locations.organization_id', CurrentUser::getOrganizationId());
        }

        $results = $query->paginate($limit);
        return $results;
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
            'organization_location_app_id' => [
                'required',
                new ValidateOrgLocationAppIdByOrganization(),
                Rule::unique('App\PermissionGroupApp', 'organization_location_app_id')
                    ->where('permission_group_id', $permissionGroupId)
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

        $pga = PermissionGroupApp::create($data);
        Logger::log($request,Logger::severity(0), 2, 15);
        return response()->json($pga, Response::HTTP_CREATED);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $permissionGroupId, $permissionLocationAppId)
    {
        $query = PermissionGroupApp::select('permission_group_apps.*')
            ->where('permission_group_apps.permission_group_id', $permissionGroupId)
            ->where('permission_group_apps.organization_location_app_id', $permissionLocationAppId)
            ->join(
                'permission_groups',
                'permission_groups.id',
                '=',
                'permission_group_apps.permission_group_id'
            )
            ->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'permission_groups.organization_location_id'
            );

        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_locations.organization_id', CurrentUser::getOrganizationId());
        }
        $pga = $query->firstOrFail();
        $pga->delete();
        Logger::log($request,Logger::severity(0), 2, 16);
        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers;

use App\PermissionGroup;
use App\OrganizationLocation;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Log;
use App\Rules\PermissionGroupFilterByOrganization;
use App\Utils\CurrentUser;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Utils\Logger;

class PermissionGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = min($request->query('limit', 50), 50);
        $searchText = $request->query('search_text');
        $orgLocationId = $request->query('organization_location_id');

        $query =  PermissionGroup::select("permission_groups.*");

        if (!CurrentUser::isSuperAdmin()) {
            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'permission_groups.organization_location_id'
            );
            $query->where('organization_locations.organization_id', CurrentUser::getOrganizationId());
        }

        if ($orgLocationId) {
            $query->where('permission_groups.organization_location_id', $orgLocationId);
        }

        if ($searchText) {
            $query->where('permission_groups.name', 'like', '%' . $searchText . '%');
        }

        $data = $query->paginate($limit);
        return response()->json($data);
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
            'name' => 'required',
            'organization_location_id' => [
                'required',
                new PermissionGroupFilterByOrganization()
            ]
        ]);

        $pg = PermissionGroup::create($data);

        Logger::log($request,Logger::severity(0), 2, 10);
        return response()->json($pg, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query =  PermissionGroup::select("permission_groups.*");

        if (!CurrentUser::isSuperAdmin()) {
            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'permission_groups.organization_location_id'
            );
            $query->where('organization_locations.organization_id', CurrentUser::getOrganizationId());
        }

        $pg = $query
            ->where('permission_groups.id', $id)
            ->firstOrFail();

        return $pg;
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
            'name' => 'string',
            'organization_location_id' => 'exists:organization_locations,id'
        ]);

        $query =  PermissionGroup::select("permission_groups.*");
        if (!CurrentUser::isSuperAdmin()) {
            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'permission_groups.organization_location_id'
            );
            $query->where('organization_locations.organization_id', CurrentUser::getOrganizationId());
        }

        $pg = $query
            ->where('permission_groups.id', $id)
            ->firstOrFail();

        $pg->update($data);

        Logger::log($request,Logger::severity(0), 2, 11);
        return $pg;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pg = PermissionGroup::with('organizationLocation')->findOrFail($id);
        $isForbidden = false;
        if ($pg->system_created) {
            $isForbidden = true;
        }

        if (
            !CurrentUser::isSuperAdmin() &&
            $pg->organizationLocation &&
            $pg->organizationLocation->organization_id != CurrentUser::getOrganizationId()
        ) {
            $isForbidden = true;
        }
        if ($isForbidden) {
            return response()->json([
                'code' => 'FORBIDDEN'
            ], Response::HTTP_FORBIDDEN);
        }

        DB::beginTransaction();
        try {
            $pg->delete();
            Logger::log($request,Logger::severity(0), 2, 12);
            DB::commit();
            return response()->json([], Response::HTTP_NO_CONTENT);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

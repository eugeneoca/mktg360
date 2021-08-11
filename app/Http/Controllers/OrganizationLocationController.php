<?php

namespace App\Http\Controllers;

use App\OrganizationLocation;
use App\PermissionGroup;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Log;
use App\Utils\CurrentUser;
use App\Utils\Logger;

class OrganizationLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $searchText = $request->query('search_text');
        $organizationId = $request->query('organization_id');
        $limit = min($request->query('limit', 50), 50);

        $query = OrganizationLocation::select();
        if ($organizationId) {
            $query->where('organization_id', $organizationId);
        }

        if ($searchText) {
            $query->where(function ($query) use ($searchText) {
                $query->where('name', 'like', '%' . $searchText . '%')
                    ->orWhere('display_name', 'like', '%' . $searchText . '%')
                    ->orWhere('address1', 'like', '%' . $searchText . '%')
                    ->orWhere('city', 'like', '%' . $searchText . '%')
                    ->orWhere('website', 'like', '%' . $searchText . '%')
                    ->orWhere('zip', 'like', '%' . $searchText . '%');
            });
        }

        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_id', CurrentUser::getOrganizationId());
        }

        $organizationLocations = $query->paginate($limit);

        return $organizationLocations;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'name'                          => "required|max:255",
            'display_name'                  => "required|max:255",
            'location_type_name'            => "required|max:255",
            'address1'                      => "max:255",
            'address2'                      => "max:255",
            'address3'                      => "max:255",
            'phone'                         => "numeric|digits_between:1,10",
            'toll_free'                     => "numeric|digits_between:1,10",
            'website'                       => "max:255",
            'fax'                           => "numeric|digits_between:1,10",
            'city'                          => "max:255",
            'state'                         => "max:255",
            'zip'                           => "max:10",
            'intranet_ip_address_range'     => "max:255",
            'organization_id'               => "required|exists:organizations,id"
        ]);

        $validatedRequest['status'] = 'ACTIVE';
        if (!CurrentUser::isSuperAdmin()) {
            $validatedRequest['organization_id'] = CurrentUser::getOrganizationId();
        }

        DB::beginTransaction();
        try {
            $organizationLocation = OrganizationLocation::create($validatedRequest);
            /**
             * Make a default Permission Group
             */
            $permissionGroupData = [
                'name' => PermissionGroup::DEFAULT_NAME,
                'organization_location_id' => $organizationLocation->id
            ];
            PermissionGroup::create($permissionGroupData);
            DB::commit();
            Logger::log($request,Logger::severity(0), 2, 42);
            return response()->json($organizationLocation, Response::HTTP_CREATED);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([], Response::HTTP_INTERNAL_SERVER_ERROR);
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
        Logger::log($request,Logger::severity(0), 2, 41);

        $query = OrganizationLocation::select();
        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_locations.organization_id', CurrentUser::getOrganizationId());
        }
        return $query->findOrFail($id);
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
        $query = OrganizationLocation::select();
        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_id', CurrentUser::getOrganizationId());
            $request['organization_id'] = CurrentUser::getOrganizationId();
        }
        $toUpdate = $query->where('id', $id)->firstOrFail();

        $request->validate([
            'name'                          => "max:255",
            'display_name'                  => "max:255",
            'location_type_name'            => "max:255",
            'address1'                      => "max:255",
            'address2'                      => "max:255",
            'address3'                      => "max:255",
            'phone'                         => "max:10",
            'toll_free'                     => "max:10",
            'website'                       => "max:255",
            'fax'                           => "max:10",
            'city'                          => "max:255",
            'state'                         => "max:255",
            'zip'                           => "max:10",
            'status'                        => "max:255",
            'intranet_ip_address_range'     => "max:255",
            'organization_id'               => "required"
        ]);

        $toUpdate->update($request->all());
        Logger::log($request,Logger::severity(0), 2, 43);
        return response()->json($toUpdate, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $query = OrganizationLocation::select();
        if (!CurrentUser::isSuperAdmin()) {
            $query->where('organization_id', CurrentUser::getOrganizationId());
        }
        $toDelete = $query->where('id', $id)->firstOrFail();

        $toDelete->delete();

        Logger::log($request,Logger::severity(0), 2, 44);
        return response()->json([
            'message' => "Organization location deleted."
        ], Response::HTTP_NO_CONTENT);
    }
}

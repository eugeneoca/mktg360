<?php

namespace App\Http\Controllers;

use App\AppInstallation;
use App\NavsApp;
use App\OrganizationAppCategory;
use App\OrganizationLocation;
use App\OrganizationLocationApp;
use App\Utils\CurrentUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Log;
use Illuminate\Support\Facades\DB;
use App\Utils\Logger;
use App\Rules\ValidateUrl;

class OrganizationLocationAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orgAppCategoryId = $request->query('organization_app_category_id');
        $orgLocationId = $request->query('organization_location_id');
        $searchText = $request->query('search_text');
        $status = $request->query('status');
        $limit = min($request->query('limit', 50), 50);

        $query = OrganizationLocationApp::with([
            'app',
            'appInstallations'
        ])->select('organization_location_apps.*');
        if ($searchText) {
            $query->where('start_url', 'like', '%' . $searchText . '%');
        }
        if ($status) {
            $query->where('status', $status);
        }

        if (!CurrentUser::isSuperAdmin()) {
            $organizationId = CurrentUser::getOrganizationId();

            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'organization_location_apps.organization_location_id'
            );
            $query->where('organization_locations.organization_id', $organizationId);
        }

        if ($orgAppCategoryId) {
            $query->where('organization_location_apps.organization_app_category_id', $orgAppCategoryId);
        }

        if ($orgLocationId) {
            $query->where('organization_location_apps.organization_location_id', $orgLocationId);
            $query->groupBy('organization_location_apps.app_id');
        }

        $orgLocationApps = $query->paginate($limit);

        return $orgLocationApps;
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
            'start_url'                    => ['required', new ValidateUrl(), 'max:255'],
            'intranet_only'                => "boolean",
            'mobile'                       => "boolean",
            'organization_location_id'     => "required|exists:organization_locations,id",
            'app_id'                       => "required|exists:apps,id"
        ]);

        if (!CurrentUser::isSuperAdmin()) {

            $orgId = CurrentUser::getOrganizationId();

            $orgLocationCheck = OrganizationLocation::select()->where('id', $data['organization_location_id'])->first();
            if ($orgLocationCheck->organization_id !== $orgId) {
                return response()->json([
                    'code' => 'Invalid Organization Location Id'
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
            // $orgAppCatCheck = OrganizationAppCategory::select()->where('id', $data['organization_app_category_id'])->first();
            // if($orgAppCatCheck->organization_id !== $orgId){
            //     return response()->json([
            //         'code' => 'Invalid Organization App Category Id'
            //     ], Response::HTTP_UNPROCESSABLE_ENTITY);
            // }

            // $appCheck = NavsApp::select()->where('id', $data['app_id'])->first();
            // if ($appCheck->organization_id !== $orgId) {
            //     return response()->json([
            //         'code' => 'Invalid App Id'
            //     ], Response::HTTP_UNPROCESSABLE_ENTITY);
            // }
        }

        $navAppNavsApp = NavsApp::with('category.organizationAppCategory')->find($data['app_id']);
        if (
            $navAppNavsApp->category &&
            $navAppNavsApp->category->organizationAppCategory
        ) {
            $data['organization_app_category_id'] = $navAppNavsApp->category->organizationAppCategory->id;
        }
        $data['status'] =  'ACTIVE';

        

        $organizationLocationApp = OrganizationLocationApp::create($data);
        Logger::log($request,Logger::severity(0), 2, 46);
        return response()->json($organizationLocationApp, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $query = OrganizationLocationApp::select('organization_location_apps.*');

        if (!CurrentUser::isSuperAdmin()) {
            $organizationId = CurrentUser::getOrganizationId();

            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'organization_location_apps.organization_location_id'
            );
            $query->where('organization_locations.organization_id', $organizationId);
        }
        $organizationLocationApp = $query->where('organization_location_apps.id', $id)->firstOrFail();

        Logger::log($request,Logger::severity(0), 2, 45);
        return $organizationLocationApp;
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
        $query = OrganizationLocationApp::select('organization_location_apps.*');

        if (!CurrentUser::isSuperAdmin()) {
            $organizationId = CurrentUser::getOrganizationId();
            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'organization_location_apps.organization_location_id'
            );
            $query->where('organization_locations.organization_id', $organizationId);
        }
        $toUpdate = $query->where('organization_location_apps.id', $id)->firstOrFail();

        $data = $request->validate([
            'start_url'                    => "url",
            'status'                       => "string",
            'is_quick_launch'              => "boolean",
            'intranet_only'                => "boolean",
            'mobile'                       => "boolean",
            'organization_location_id'     => "exists:organization_locations,id",
            'app_id'                       => "exists:apps,id"
        ]);

        if (!CurrentUser::isSuperAdmin() && isset($data['organization_location_id'])) {

            $orgId = CurrentUser::getOrganizationId();
            $orgLocationCheck = OrganizationLocation::select()
                ->where('id', $data['organization_location_id'])
                ->first();
            if ($orgLocationCheck->organization_id !== $orgId) {
                return response()->json([
                    'code' => 'Invalid Organization Location Id'
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }
        if (isset($data['app_id'])) {
            $navAppNavsApp = NavsApp::with('category.organizationAppCategory')->find($data['app_id']);
            if (
                $navAppNavsApp &&
                $navAppNavsApp->category &&
                $navAppNavsApp->category->organizationAppCategory
            ) {
                $data['organization_app_category_id'] = $navAppNavsApp->category->organizationAppCategory->id;
            }
        }

        $toUpdate->fill($data);
        $toUpdate->save();
        Logger::log($request,Logger::severity(0), 2, 47);
        return response()->json($toUpdate, Response::HTTP_OK);
    }

    public function removeInstallations(Request $request, $id)
    {
        $query = OrganizationLocationApp::select('organization_location_apps.*');

        if (!CurrentUser::isSuperAdmin()) {
            $organizationId = CurrentUser::getOrganizationId();

            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'organization_location_apps.organization_location_id'
            );
            $query->where('organization_locations.organization_id', $organizationId);
        }
        $toDelete = $query->where('organization_location_apps.id', $id)->firstOrFail();
        $toDelete->appInstallations()->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $query = OrganizationLocationApp::select('organization_location_apps.*');

        if (!CurrentUser::isSuperAdmin()) {
            $organizationId = CurrentUser::getOrganizationId();

            $query->join(
                'organization_locations',
                'organization_locations.id',
                '=',
                'organization_location_apps.organization_location_id'
            );
            $query->where('organization_locations.organization_id', $organizationId);
        }
        $toDelete = $query
            // ->with('appInstallations.appQuickLaunch')
            ->where('organization_location_apps.id', $id)->firstOrFail();

        DB::beginTransaction();
        try {
            // $installations = $toDelete->appInstallations;
            // foreach ($installations as $installation) {

            //     dd($installation);
            // }
            // $toDelete->appInstallations()->delete();
            // $toDelete->appInstallations()->delete();
            $toDelete->delete();
            Logger::log($request,Logger::severity(0), 2, 48);
            DB::commit();

            return response()->json([
                'message' => "Organization location app archived."
            ], Response::HTTP_NO_CONTENT);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'msg' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}

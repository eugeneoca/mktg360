<?php

namespace App\Http\Controllers;

use App\AppCategory;
use Illuminate\Http\Request;
use App\Organization;
use App\Utils\CurrentUser;
use App\Utils\S3FileUploader;
use Illuminate\Http\Response;
use App\Log;
use App\OrganizationAppCategory;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Utils\Logger;
use Illuminate\Validation\Rule;

class OrganizationController extends Controller
{
    const DOMAIN_NAME = '.navsnow.com';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $searchText = $request->query('search_text');
        $dnsKey = $request->query('dns_key');
        $status = $request->query('status', null);

        $limit = min($request->query('limit', 50), 50);
        $query = Organization::select();
        if ($dnsKey) {
            $query->where('dns_key', $dnsKey);
        } else if ($searchText) {
            $query->where(function ($query) use ($searchText) {
                $query->where('name', 'like', '%' . $searchText . '%')
                    ->orWhere('dns_key', 'like', '%' . $searchText . '%');
            });
        }
        if ($status) {
            $query->where('status', $status);
        }
        $organizations = $query->paginate($limit);
        return $organizations;
    }

    public function getByDNSKey(Request $request)
    {
        $dnsKey = $request->query('dns_key');

        if ($dnsKey && !Str::endsWith($dnsKey, self::DOMAIN_NAME)) {
            $dnsKey = $dnsKey . self::DOMAIN_NAME;
        }

        $query = Organization::with([
            'organizationLocations',
        ])->where('dns_key', $dnsKey);
        $organization = $query->firstOrFail();
        return $organization ?: [];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!CurrentUser::isSuperAdmin()) {
            return response()->json([], Response::HTTP_FORBIDDEN);
        }

        $data = $request->validate([
            'name'      => "required|string",
            'dns_key'   => ["required", "string"],
            'logo'      => "image",
            'icon'      => "image",
            'status'    => 'string'
        ]);

        if (isset($data['dns_key'])) {
            if (!Str::endsWith($data['dns_key'], self::DOMAIN_NAME)) {
                $data['dns_key'] = $data['dns_key'] . self::DOMAIN_NAME;
            }

            $count = Organization::where('dns_key', $data['dns_key'])->count();
            if ($count > 0) {
                return response()->json([
                    'code' => 'DNS_KEY_EXIST',
                    'msg' => 'The dns_key already exists.'
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }

        if (!isset($data['status'])) {
            $data['status'] =  'ACTIVE';
        }

        $logoLink = S3FileUploader::uploadToAssets($request, 'logo');
        $iconLink = S3FileUploader::uploadToAssets($request, 'icon');

        if ($logoLink) {
            $data['logo'] = $logoLink;
        }
        if ($iconLink) {
            $data['icon'] = $iconLink;
        }

        DB::beginTransaction();
        try {

            $organization = Organization::create($data);
            $appCategories = AppCategory::where('is_core', 1)->get();
            foreach ($appCategories as $appCategory) {
                OrganizationAppCategory::create([
                    'app_category_id' => $appCategory->id,
                    'organization_id' => $organization->id,
                    'sort_order' => $appCategory->sort_order
                ]);
            }
            Logger::log($request, Logger::severity(0), 2, 38);
            DB::commit();

            return response()->json($organization, Response::HTTP_CREATED);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json([
                'code' => 'ERROR_CREATE_ORGANIZATION',
                'msg' => $e->getMessage()
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
        Logger::log($request, Logger::severity(0), 2, 37);
        return Organization::findOrFail($id);
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
        $query = Organization::select();
        if (!CurrentUser::isSuperAdmin()) {
            $id =  CurrentUser::getOrganizationId();

            $request['organization_id'] = CurrentUser::getOrganizationId();
            if (isset($request->dns_key) ||  isset($request->status)) {
                return response()->json([
                    'message' => "Unable to change DNS or Status"
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }
        $query->where('id', $id);

        $toUpdate = $query->firstOrFail();

        $data = $request->validate([
            'dns_key'      => "max:1024",
            'name'      => "max:255",
            'status'    => "max:255",
            'logo'      => "image",
            'icon'      => "image"
        ]);

        if (isset($data['dns_key'])) {
            if (!Str::endsWith($data['dns_key'], self::DOMAIN_NAME)) {
                $data['dns_key'] = $data['dns_key'] . self::DOMAIN_NAME;
            }
            $count = Organization::where('dns_key', $data['dns_key'])
                ->where('id', '!=', $id)->count();
            if ($count > 0) {
                return response()->json([
                    'code' => 'DNS_KEY_EXIST',
                    'msg' => 'The dns_key already exists.'
                ], Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }

        $logoLink = S3FileUploader::uploadToAssets($request, 'logo');
        $iconLink = S3FileUploader::uploadToAssets($request, 'icon');

        if ($logoLink) {
            $data['logo'] = $logoLink;
        }
        if ($iconLink) {
            $data['icon'] = $iconLink;
        }


        $toUpdate->fill($data);
        $toUpdate->save();
        Logger::log($request, Logger::severity(0), 2, 39);
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
        if (!CurrentUser::isSuperAdmin()) {
            return response()->json([], Response::HTTP_FORBIDDEN);
        }

        $toDelete = Organization::findOrFail($id);

        $toDelete->delete();
        Logger::log($request, Logger::severity(0), 2, 40);
        return response()->json([
            'message' => "Organization deleted."
        ], Response::HTTP_NO_CONTENT);
    }
}

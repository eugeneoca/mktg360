<?php

namespace App\Http\Controllers;

use App\OrganizationCuid;
use App\Utils\CurrentUser;
use App\Utils\Logger;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrganizationCuidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cuid = $request->query('cuid');

        $limit = min($request->query('limit', 50), 50);
        $query = OrganizationCuid::select();
        if ($cuid) {
            $query->where(function ($query) use ($cuid) {
                $query->where('cuid', 'like', '%' . $cuid . '%')
                    ->orWhere('cuid_alpha', 'like', '%' . $cuid . '%');
            });
        }

        $org_cuid = $query->paginate($limit);
        return $org_cuid;
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
            'cuid'            => "required|string|unique:organization_cuids",
            'cuid_alpha'      => "required|string|unique:organization_cuids",
            'organization_id' => 'required|exists:organizations,id|unique:organization_cuids'
        ]);

        $orgCUID = OrganizationCuid::create($data);
        //Logger::log($request,Logger::severity(0), 2, 72);
        return response()->json($orgCUID, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        return OrganizationCuid::findOrFail($id);
    }

    public function getByOrganizationId(Request $request, $id)
    {

        $organizationId =  $request->query('organization_id', $id);
        return OrganizationCuid::where(
            'organization_id',
            $organizationId
        )
            ->firstOrFail();
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
        $toUpdate = OrganizationCuid::findOrFail($id);
        $request->validate([
            'cuid'      => "string",
            'cuid_alpha'   => "string",
        ]);
        $toUpdate->update($request->all());
        //Logger::log($request,Logger::severity(0), 2, 73);
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
        $toDelete = OrganizationCuid::findOrFail($id);
        $toDelete->delete();
        //Logger::log($request,Logger::severity(0), 2, 74);
        return response()->json([
            'message' => "Product type deleted."
        ], Response::HTTP_NO_CONTENT);
    }
}

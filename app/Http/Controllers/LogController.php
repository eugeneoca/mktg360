<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use App\LogFormat;
use App\Utils\CurrentUser;
use App\Utils\JsonCompare;
use App\Utils\Logger;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $severity = $request->query('severity');
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');
        $organizationUserId = $request->query('organization_user_id');
        $organizationId = $request->query('organization_id');
        $logSourceId = $request->query('log_source_id');
        $limit = min($request->query('limit', 50), 50); //limit to 50 per page

        $query = Log::select()->with([
            'source', 'format',
            'organizationUser', 'organization'
        ]);

        if (!CurrentUser::isSuperAdmin()) {
            $query->where('json->organizationID', CurrentUser::getOrganizationId());
        }else{
            if($organizationId){
                $query->where('json->organizationID', $organizationId);
            }
        }

        //temp
        if ($request->has('document_type_id')) {
            $query->where(
                'json->document_type_id',
                $request->get('document_type_id')
            );
        }

        if ($request->has('log_type_id')) {
            $query->where(
                'json->log_type_id',
                $request->get('log_type_id')
            );
        }

        if ($startDate) {
            $query->where('created_at', '>=', $startDate);
        }

        if ($endDate) {
            $query->where('created_at', '<=', $endDate);
        }

        if ($organizationUserId) {
            $query->where('json->organizationUserID', $organizationUserId);
        }

        if ($severity) {
            $query->where('severity', $severity);
            Logger::log($request, Logger::severity(0), 2, 32);
        }
        if ($logSourceId) {
            $query->where('log_source_id', $logSourceId);
        }

        return  $query->paginate($limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'log_format_id' => 'required|exists:log_formats,id',
            'log_source_id' => 'required|exists:log_sources,id',
            'severity' => 'required',
            'json' => 'required'
        ]);
        try {
            $json_base = LogFormat::find($request->log_format_id)->json_base;

            if (JsonCompare::isSameJsonStructure($request->json, $json_base)) {
                // $data['json'] = $request->json;
                return Log::create($data);
            } else {
                throw new \Exception("Invalid Json Structure");
            }
        } catch (\Exception $error) {
            return response()->json([
                'error' => 'VALIDATION_FAILED',
                'message' => $error->getMessage()
            ], 422);
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
        Logger::log($request, Logger::severity(0), 2, 31);
        $log_record = Log::findOrFail($id);
        return $log_record;
    }

    public function searchByEcho2(Request $request)
    {
    }


    public function installationLogs(Request $request)
    {
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $toUpdate = Log::find($id);
        $validation = $request->validate([
            'log_format_id' => 'exists:log_formats,id',
            'log_source_id' => 'exists:log_sources,id',
            'severity' => 'max:255',
            'json' => 'max:255'
        ]);
        if ($toUpdate) {
            try {
                $toUpdate->update($request->all());
            } catch (\Exception $error) {
                return response()->json([
                    'error' => 'VALIDATION_FAILED',
                    'message' => $error->getMessage()
                ], 422);
            }
            return response()->json([
                'message' => "Log updated."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Log not found."
            ], 204);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDelete = Log::find($id);
        if ($toDelete) {
            $toDelete->delete();
            return response()->json([
                'message' => "Log deleted."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Log not found."
            ], 204);
        }
    }
}

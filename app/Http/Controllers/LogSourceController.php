<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogSource;
use Exception;
use App\Log;
use App\Utils\CurrentUser;
use App\Utils\Logger;

class LogSourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search_text = $request->query('search_text');
        $limit = min($request->query('limit', 50), 50); //limit to 50 per page

        $query = LogSource::select();
        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%');
        }
        Logger::log($request,Logger::severity(0), 2, 22);
        return $query->paginate($limit);
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
        $filtered = $request->validate([
            'name'      => "required|max:255|unique:log_sources",
        ]);
        try {
            $log = LogSource::create($filtered);
            Logger::log($request,Logger::severity(0), 2, 23);
            return response()->json($log, 200);
        } catch (Exception $error) {
            return response()->json([
                'error'       => 'VALIDATION_FAILED',
                'message'         => $error->message
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
        Logger::log($request,Logger::severity(0), 2, 21);
        return LogSource::findOrFail($id);
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
        $toUpdate = LogSource::find($id);
        $request->validate([
            'name'  =>  'required|max:255|unique:log_sources',
        ]);
        if ($toUpdate) {
            $toUpdate->update($request->all());
            Logger::log($request,Logger::severity(0), 2, 24);
            return response()->json([
                'message' => "Log source updated.",
                'data' => $toUpdate
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Log source not found."
            ], 204);
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
        $toDelete = LogSource::find($id);
        if ($toDelete) {
            $toDelete->delete();
            Logger::log($request,Logger::severity(0), 2, 25);
            return response()->json([
                'message' => "Log source deleted."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Log source not found."
            ], 204);
        }
    }
}

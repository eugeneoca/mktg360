<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LogFormat;
use App\Log;
use App\Utils\CurrentUser;
use App\Utils\Logger;

class LogFormatController extends Controller
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

        $query = LogFormat::select();
        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%');
        }
        Logger::log($request,Logger::severity(0), 2, 26);
        return $query->paginate($limit);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|string',
            'json_base'=> 'required|string',
            'status'=> 'string'
        ]);
        return LogFormat::create($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  =>  'required|max:255|unique:log_formats',
            'json_base' => 'required'
        ]);

        $request['status'] = 'ACTIVE';
        $logFormat = LogFormat::create($request->all());
        Logger::log($request,Logger::severity(0), 2, 28);
        return response()->json($logFormat, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        Logger::log($request,Logger::severity(0), 2, 27);
        return LogFormat::findOrFail($id);
    }

    public function getByName(Request $request, $name)
    {
        Logger::log($request,Logger::severity(0), 2, 27);
        return LogFormat::where('name',$name)->firstOrFail();
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
        $toUpdate = LogFormat::find($id);
        $validation = $request->validate([
            'name'  =>  'max:255',
            'json_base' => '',
            'status' => 'max:255',
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
            Logger::log($request,Logger::severity(0), 2, 29);
            return response()->json([
                'message' => "Log format updated."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Log format not found."
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
        $toDelete = LogFormat::find($id);
        if ($toDelete) {
            $toDelete->delete();
            Logger::log($request,Logger::severity(0), 2, 30);
            return response()->json([
                'message' => "Log format deleted."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Log format not found."
            ], 204);
        }
    }
}

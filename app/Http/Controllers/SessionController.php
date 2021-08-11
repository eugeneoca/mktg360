<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\NavsInstallation;
use App\LoginType;
use App\Log;
use App\Utils\CurrentUser;
use App\Utils\Logger;

class SessionController extends Controller
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

        $query = Session::select();
        if ($search_text) {
            $query->where('ip_address', 'like', '%' . $search_text . '%');
            Logger::log($request,Logger::severity(0), 2, 61);
        }else{
            Logger::log($request,Logger::severity(0), 2, 60);
        }
        
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
        $request->validate([
            'key' => 'required|max:255',
            'ip_address' => 'required|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'navs_installation_id' => 'required|exists:navs_installations,id',
            'user_id' => 'required|exists:users,id',
            'login_type_id' => 'required|exists:login_types,id'
        ]);
        $session = Session::create($request->all());
        Logger::log($request,Logger::severity(0), 2, 62);
        return $session;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $toUpdate = Session::find($id);
        $request->validate([
            'key' => 'max:255',
            'ip_address' => 'max:255',
            'start_date' => 'date',
            'end_date' => 'date',
            'navs_installation_id' => 'exists:navs_installations,id',
            'user_id' => 'exists:users,id',
            'login_type_id' => 'exists:login_types,id'
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
            Logger::log($request,Logger::severity(0), 2, 63);
            return response()->json([
                'message' => "Session updated."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Session not found."
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
        $toDelete = Session::findOrFail($id);

        $toDelete->delete();
        Logger::log($request,Logger::severity(0), 2, 64);
        return response()->json([
            'message' => "Session deleted."
        ], 200);
    }
}

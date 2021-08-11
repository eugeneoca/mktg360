<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\LoginType;
use App\Log;
use App\Utils\CurrentUser;
use App\Utils\Logger;

class LoginTypeController extends Controller
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

        $query = LoginType::select();
        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%');
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
            'name'  =>  'required|max:255|unique:login_types,name',
            'is_mobile' => 'required|boolean',
            'is_intranet' => 'required|boolean'
        ]);

        $loginType = LoginType::create($request->all());
        Logger::log($request,Logger::severity(0), 2, 57);
        return response()->json($loginType, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return LoginType::findOrFail($id);
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
        $toUpdate = LoginType::find($id);
        $validation = $request->validate([
            'name'  =>  'max:255',
            'is_mobile' => 'boolean',
            'is_intranet' => 'boolean'
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
            Logger::log($request,Logger::severity(0), 2, 58);
            return response()->json([
                'message' => "Login type updated."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Login type not found."
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
        $toDelete = LoginType::find($id);
        if ($toDelete) {
            $toDelete->delete();
            Logger::log($request,Logger::severity(0), 2, 59);
            return response()->json([
                'message' => "Login type deleted."
            ], 204);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Login type not found."
            ], 204);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\UserType;
use App\Log;
use App\Utils\CurrentUser;
use Illuminate\Http\Response;
use App\Utils\Logger;

class UserTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = UserType::select();

        if (!CurrentUser::isSuperAdmin()) {
            $query->where('name', '!=', UserType::SUPER_ADMIN);
        }
        $allTypes = $query->get();

        return $allTypes;
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
            'name'  =>  'required|max:255|unique:user_types'
        ]);


        $userType = UserType::create($request->all());
        Logger::log($request,Logger::severity(0), 2, 7);
        return response()->json($userType, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userType = UserType::findOrFail($id);
        if (!CurrentUser::isSuperAdmin() && $userType->name === UserType::SUPER_ADMIN) {
            return response()->json([
                'code' => 'FORBIDDEN'
            ], Response::HTTP_FORBIDDEN);
        }
        return $userType;
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
        $toUpdate = UserType::findOrFail($id);
        $data = $request->validate([
            'name'  =>  'max:255'
        ]);

        $toUpdate->update($data);
        Logger::log($request,Logger::severity(0), 2, 8);
        return response()->json($toUpdate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $toDelete = UserType::findOrFail($id);
        $toDelete->delete();
        Logger::log($request,Logger::severity(0), 2, 9);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}

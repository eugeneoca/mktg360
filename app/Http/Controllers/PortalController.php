<?php

namespace App\Http\Controllers;

use App\Models\Portal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PortalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function show(Portal $portal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portal $portal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portal $portal)
    {
        //
    }

    public function assignPortalToUser(Portal $portal, User $user){

        try{
            $isAttached = $user->portals->contains($portal->id);
            if(!$isAttached){
                $user->portals()->attach($portal->id);
            }
            return User::find($user->id)->portals;
        }catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function removePortalFromUser(Portal $portal, User $user){

        try{
            $isAttached = $user->portals->contains($portal->id);
            if($isAttached){
                $user->portals()->detach($portal->id);
            }
            return User::find($user->id)->portals;
        }catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }
}

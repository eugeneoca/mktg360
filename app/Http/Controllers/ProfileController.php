<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class ProfileController extends Controller
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
        $data = $request->validate([
            'business_name' => 'required|min:3|max:20|unique:profiles,business_name',
            'site_url' => 'min:3|max:100',
            'business_email' => 'required|email|min:5|max:100',
            'address_line_1' => 'required|min:5|max:255',
            'address_line_2' => 'min:5|max:255',
            'state' => 'required|min:2|max:20',
            'city' => 'required|min:2|max:20',
            'country' => 'required|min:2|max:20',
            'color_a',
            'color_b',
            'color_c',
            'color_d',
        ]);

        DB::beginTransaction();
        try{
            $profile = Profile::create($data);
            $profile->user()->associate(auth()->user()->id);
            $profile->save();

            DB::commit();
            return $profile->load(['user']);

        }catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $data = $request->validate([
            'business_name' => 'min:3|max:20|unique:profiles,business_name'
        ]);

        if($profile->update($data)){
            return $profile->fresh('user');
        }else{
            return response()->json([
                'message' => "Cannot update this model."
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}

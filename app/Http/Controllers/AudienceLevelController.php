<?php

namespace App\Http\Controllers;

use App\Models\AudienceLevel;
use Illuminate\Http\Request;

class AudienceLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = AudienceLevel::select('audience_levels.*');
        return $query->get();
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
     * @param  \App\Models\AudienceLevel  $audienceLevel
     * @return \Illuminate\Http\Response
     */
    public function show(AudienceLevel $audienceLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AudienceLevel  $audienceLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AudienceLevel $audienceLevel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AudienceLevel  $audienceLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(AudienceLevel $audienceLevel)
    {
        //
    }
}

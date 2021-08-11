<?php

namespace App\Http\Controllers;

use App\Models\CampaignIdeaOptions;
use Illuminate\Http\Request;

class CampaignIdeaOptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = CampaignIdeaOptions::select('campaign_idea_options.*');

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
     * @param  \App\Models\CampaignIdeaOptions  $campaignIdeaOptions
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignIdeaOptions $campaignIdeaOptions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CampaignIdeaOptions  $campaignIdeaOptions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignIdeaOptions $campaignIdeaOptions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampaignIdeaOptions  $campaignIdeaOptions
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampaignIdeaOptions $campaignIdeaOptions)
    {
        //
    }
}

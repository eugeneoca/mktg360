<?php

namespace App\Http\Controllers;

use App\Models\CampaignIdea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class CampaignIdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = CampaignIdea::select('campaign_ideas.*');
        $query->where('user_id', auth()->user()->id);

        if($request->query('status')){
            $query->whereHas('status', function($inner) use ($request){
                return $inner->where('id', '=',$request->query('status'));
            });
        }

        if($request->query('platform')){
            $query->whereHas('options', function($inner) use ($request){
                return $inner->where('option_id', $request->query('platform'));
            });
        }

        return $query->get()->load(['user','status', 'options']);
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
            'status_id' => 'required|in:1,4',
            'description' => 'required|min:10|max:1024',
            'cause'=>'min:10|max:1024',
            'primary_customer'=>'min:10|max:255',
            'secondary_customer'=>'min:10|max:255',
            'expected_result'=>'min:10|max:255',
            'budget'=>'min:10|max:255',
            'other_details'=>'min:10|max:255',
            'option_ids.*' => 'required|exists:campaign_idea_options,id',
            'platform_ids.*' => 'required|exists:platforms,id'
        ]);

        DB::beginTransaction();
        try{
            $newCampaignIdea = CampaignIdea::create($data);

            $newCampaignIdea->user()->associate(auth()->user()->id);
            $newCampaignIdea->status()->associate($data['status_id']);

            if(isset($data['option_ids'])){
                $newCampaignIdea->options()->sync($data['option_ids'], false);
            }

            if(isset($data['platform_ids'])){
                $newCampaignIdea->platforms()->sync($data['platform_ids'], false);
            }
            $newCampaignIdea->save();
            DB::commit();
            return $newCampaignIdea->load(['user', 'status', 'options', 'platforms']);

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
     * @param  \App\Models\CampaignIdea  $campaign_idea
     * @return \Illuminate\Http\Response
     */
    public function show(CampaignIdea $campaign_idea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CampaignIdea  $campaign_idea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampaignIdea $campaign_idea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CampaignIdea  $campaign_idea
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDelete = CampaignIdea::find($id);

        if ($toDelete && $toDelete->user_id=auth()->user()->id) {
            $toDelete->delete();
            return response()->json([
                'message' => "Campaign Idea deleted."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Campaign Idea not found."
            ], 204);
        }
    }
}

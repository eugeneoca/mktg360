<?php

namespace App\Http\Controllers;

use App\Models\Audience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class AudienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Audience::select('audiences.*');
        $query->where('user_id', auth()->user()->id);

        if($request->query('status')){
            $query->whereHas('status', function($inner) use ($request){
                return $inner->where('id', '=',$request->query('status'));
            });
        }

        return $query->get()->load(['user','status']);
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
            'challenges'=>'min:10|max:255',
            'level_ids.*' => 'required|exists:audience_levels,id',
        ]);

        DB::beginTransaction();
        try{
            $newAudience = Audience::create($data);

            $newAudience->user()->associate(auth()->user()->id);
            $newAudience->status()->associate($data['status_id']);

            if(isset($data['level_ids'])){
                $newAudience->levels()->sync($data['level_ids'], false);
            }
            $newAudience->save();
            DB::commit();
            return $newAudience->load(['user', 'status', 'levels']);

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
     * @param  \App\Models\Audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function show(Audience $audience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Audience $audience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Audience  $audience
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDelete = Audience::find($id);

        if ($toDelete && $toDelete->user_id=auth()->user()->id) {
            $toDelete->delete();
            return response()->json([
                'message' => "Audience deleted."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Audience not found."
            ], 204);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SocialContent;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class SocialContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = SocialContent::select('social_contents.*');
        $query->where('user_id', auth()->user()->id);

        if($request->query('status')){
            $query->whereHas('status', function($inner) use ($request){
                return $inner->where('id', '=',$request->query('status'));
            });
        }

        return $query->get()->load(['user', 'status']);        
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
            'file' => 'required|file',
            'comment' => 'min:10|max:1024'
        ]);
        
        DB::beginTransaction();
        try{
            if ($request->file('file')) {
                $uploadPath = $request->file('file')->store('social-contents', 's3-mktg360');
                $data['name'] = $request->file('file')->getClientOriginalName();
                $data['file'] = $uploadPath; //Storage::disk('s3-mktg360')->url($uploadPath);
            }

            $socialContent = SocialContent::create($data);
            $socialContent->user()->associate(auth()->user()->id);
            $socialContent->save();

            DB::commit();
            return $socialContent->load(['user']);

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
     * @param  \App\Models\SocialContent  $socialContent
     * @return \Illuminate\Http\Response
     */
    public function show(SocialContent $socialContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialContent  $socialContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialContent $socialContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialContent  $socialContent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $toDelete = SocialContent::find($id);

        if ($toDelete && $toDelete->user_id=auth()->user()->id) {
            $toDelete->delete();
            return response()->json([
                'message' => "Social Content deleted."
            ], 200);
        } else {
            return response()->json([
                'error' => 'NO_CONTENT',
                'message' => "Social Content not found."
            ], 204);
        }
    }
}

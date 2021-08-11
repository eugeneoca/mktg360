<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class UploadController extends Controller
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
            'file' => 'required|file'
        ]);
        
        DB::beginTransaction();
        try{
            if ($request->file('file')) {
                $uploadPath = $request->file('file')->store('uploads', 's3-mktg360');
                $data['name'] = $request->file('file')->getClientOriginalName();
                $data['file'] = $uploadPath; //Storage::disk('s3-mktg360')->url($uploadPath);
            }

            $upload = Upload::create($data);
            $upload->user()->associate(auth()->user()->id);
            $upload->save();

            DB::commit();
            return $upload->load(['user']);

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
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}

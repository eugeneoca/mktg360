<?php

namespace App\Http\Controllers;

use App\ProductType;
use App\Release;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Log;
use App\Utils\CurrentUser;
use App\Utils\Logger;

class ProductTypeController extends Controller
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

        $query = ProductType::select();
        if ($search_text) {
            $query->where('name', 'like', '%' . $search_text . '%');
        }
        $productTypes = $query->paginate($limit);
        return $productTypes;
    }

    public function latest(Request $request, $id)
    {
        $productType = ProductType::findOrFail($id);

        $latest = Release::where('product_type_id', $productType->id)
            ->orderBy('release_date', 'DESC')
            ->limit(1)
            ->firstOrFail();

        return response()->json($latest);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedRequest = $request->validate([
            'name'  => "required|max:255|unique:product_types"
        ]);

        $productType = ProductType::create($validatedRequest);
        Logger::log($request,Logger::severity(0), 2, 72);
        return response()->json($productType, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ProductType::findOrFail($id);
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
        $toUpdate = ProductType::findOrFail($id);
        $request->validate([
            'name'  =>  "max:255"
        ]);
        $toUpdate->update($request->all());
        Logger::log($request,Logger::severity(0), 2, 73);
        return response()->json($toUpdate, Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $toDelete = ProductType::findOrFail($id);
        $toDelete->delete();
        Logger::log($request,Logger::severity(0), 2, 74);
        return response()->json([
            'message' => "Product type deleted."
        ], Response::HTTP_NO_CONTENT);
    }
}

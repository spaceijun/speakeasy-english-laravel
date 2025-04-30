<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailIdiom;
use Illuminate\Http\Request;
use App\Http\Requests\DetailIdiomRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DetailIdiomResource;

class DetailIdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $detailIdioms = DetailIdiom::all();

        return DetailIdiomResource::collection($detailIdioms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailIdiomRequest $request): JsonResponse
    {
        $detailIdiom = DetailIdiom::create($request->validated());

        return response()->json(new DetailIdiomResource($detailIdiom));
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailIdiom $detailIdiom): JsonResponse
    {
        return response()->json(new DetailIdiomResource($detailIdiom));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailIdiomRequest $request, DetailIdiom $detailIdiom): JsonResponse
    {
        $detailIdiom->update($request->validated());

        return response()->json(new DetailIdiomResource($detailIdiom));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(DetailIdiom $detailIdiom): Response
    {
        $detailIdiom->delete();

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailHafalan;
use Illuminate\Http\Request;
use App\Http\Requests\DetailHafalanRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DetailHafalanResource;

class DetailHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $detailHafalans = DetailHafalan::all();

        return DetailHafalanResource::collection($detailHafalans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailHafalanRequest $request): JsonResponse
    {
        $detailHafalan = DetailHafalan::create($request->validated());

        return response()->json(new DetailHafalanResource($detailHafalan));
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailHafalan $detailHafalan): JsonResponse
    {
        return response()->json(new DetailHafalanResource($detailHafalan));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailHafalanRequest $request, DetailHafalan $detailHafalan): JsonResponse
    {
        $detailHafalan->update($request->validated());

        return response()->json(new DetailHafalanResource($detailHafalan));
    }

    /**
     * Get detail hafalan by specific hafalan_id
     */
    public function getByHafalanId($hafalanId): JsonResponse
    {
        $detailHafalans = DetailHafalan::where('hafalan_id', $hafalanId)->get();

        if ($detailHafalans->isEmpty()) {
            return response()->json([
                'message' => 'No detail hafalan found for hafalan_id: ' . $hafalanId
            ], 404);
        }

        return response()->json(DetailHafalanResource::collection($detailHafalans));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(DetailHafalan $detailHafalan): Response
    {
        $detailHafalan->delete();

        return response()->noContent();
    }
}

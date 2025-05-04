<?php

namespace App\Http\Controllers\Api;

use App\Models\TugasHafalan;
use Illuminate\Http\Request;
use App\Http\Requests\TugasHafalanRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TugasHafalanResource;

class TugasHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tugasHafalans = TugasHafalan::paginate();

        return TugasHafalanResource::collection($tugasHafalans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasHafalanRequest $request): JsonResponse
    {
        $tugasHafalan = TugasHafalan::create($request->validated());

        return response()->json(new TugasHafalanResource($tugasHafalan));
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasHafalan $tugasHafalan): JsonResponse
    {
        return response()->json(new TugasHafalanResource($tugasHafalan));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasHafalanRequest $request, TugasHafalan $tugasHafalan): JsonResponse
    {
        $tugasHafalan->update($request->validated());

        return response()->json(new TugasHafalanResource($tugasHafalan));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(TugasHafalan $tugasHafalan): Response
    {
        $tugasHafalan->delete();

        return response()->noContent();
    }
}

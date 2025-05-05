<?php

namespace App\Http\Controllers\Api;

use App\Models\JawabanHafalan;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanHafalanRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanHafalanResource;

class JawabanHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jawabanHafalans = JawabanHafalan::paginate();

        return JawabanHafalanResource::collection($jawabanHafalans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanHafalanRequest $request): JsonResponse
    {
        $jawabanHafalan = JawabanHafalan::create($request->validated());

        return response()->json(new JawabanHafalanResource($jawabanHafalan));
    }

    /**
     * Display the specified resource.
     */
    public function show(JawabanHafalan $jawabanHafalan): JsonResponse
    {
        return response()->json(new JawabanHafalanResource($jawabanHafalan));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanHafalanRequest $request, JawabanHafalan $jawabanHafalan): JsonResponse
    {
        $jawabanHafalan->update($request->validated());

        return response()->json(new JawabanHafalanResource($jawabanHafalan));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(JawabanHafalan $jawabanHafalan): Response
    {
        $jawabanHafalan->delete();

        return response()->noContent();
    }
}

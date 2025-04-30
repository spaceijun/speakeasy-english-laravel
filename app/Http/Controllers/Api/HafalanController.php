<?php

namespace App\Http\Controllers\Api;

use App\Models\Hafalan;
use Illuminate\Http\Request;
use App\Http\Requests\HafalanRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\HafalanResource;

class HafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $hafalans = Hafalan::all();

        return HafalanResource::collection($hafalans);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HafalanRequest $request): JsonResponse
    {
        $hafalan = Hafalan::create($request->validated());

        return response()->json(new HafalanResource($hafalan));
    }

    /**
     * Display the specified resource.
     */
    public function show(Hafalan $hafalan): JsonResponse
    {
        return response()->json(new HafalanResource($hafalan));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HafalanRequest $request, Hafalan $hafalan): JsonResponse
    {
        $hafalan->update($request->validated());

        return response()->json(new HafalanResource($hafalan));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Hafalan $hafalan): Response
    {
        $hafalan->delete();

        return response()->noContent();
    }
}

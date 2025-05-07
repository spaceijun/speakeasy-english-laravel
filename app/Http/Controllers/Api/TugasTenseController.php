<?php

namespace App\Http\Controllers\Api;

use App\Models\TugasTense;
use Illuminate\Http\Request;
use App\Http\Requests\TugasTenseRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TugasTenseResource;

class TugasTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tugasTenses = TugasTense::paginate();

        return TugasTenseResource::collection($tugasTenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasTenseRequest $request): JsonResponse
    {
        $tugasTense = TugasTense::create($request->validated());

        return response()->json(new TugasTenseResource($tugasTense));
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasTense $tugasTense): JsonResponse
    {
        return response()->json(new TugasTenseResource($tugasTense));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasTenseRequest $request, TugasTense $tugasTense): JsonResponse
    {
        $tugasTense->update($request->validated());

        return response()->json(new TugasTenseResource($tugasTense));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(TugasTense $tugasTense): Response
    {
        $tugasTense->delete();

        return response()->noContent();
    }
}

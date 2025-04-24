<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailTense;
use Illuminate\Http\Request;
use App\Http\Requests\DetailTenseRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DetailTenseResource;

class DetailTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $detailTenses = DetailTense::paginate();

        return DetailTenseResource::collection($detailTenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailTenseRequest $request): JsonResponse
    {
        $detailTense = DetailTense::create($request->validated());

        return response()->json(new DetailTenseResource($detailTense));
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailTense $detailTense): JsonResponse
    {
        return response()->json(new DetailTenseResource($detailTense));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailTenseRequest $request, DetailTense $detailTense): JsonResponse
    {
        $detailTense->update($request->validated());

        return response()->json(new DetailTenseResource($detailTense));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(DetailTense $detailTense): Response
    {
        $detailTense->delete();

        return response()->noContent();
    }
}

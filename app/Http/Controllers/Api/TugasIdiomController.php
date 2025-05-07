<?php

namespace App\Http\Controllers\Api;

use App\Models\TugasIdiom;
use Illuminate\Http\Request;
use App\Http\Requests\TugasIdiomRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TugasIdiomResource;

class TugasIdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tugasIdioms = TugasIdiom::paginate();

        return TugasIdiomResource::collection($tugasIdioms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasIdiomRequest $request): JsonResponse
    {
        $tugasIdiom = TugasIdiom::create($request->validated());

        return response()->json(new TugasIdiomResource($tugasIdiom));
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasIdiom $tugasIdiom): JsonResponse
    {
        return response()->json(new TugasIdiomResource($tugasIdiom));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasIdiomRequest $request, TugasIdiom $tugasIdiom): JsonResponse
    {
        $tugasIdiom->update($request->validated());

        return response()->json(new TugasIdiomResource($tugasIdiom));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(TugasIdiom $tugasIdiom): Response
    {
        $tugasIdiom->delete();

        return response()->noContent();
    }
}

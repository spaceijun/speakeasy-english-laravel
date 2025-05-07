<?php

namespace App\Http\Controllers\Api;

use App\Models\JawabanTense;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanTenseRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanTenseResource;

class JawabanTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jawabanTenses = JawabanTense::paginate();

        return JawabanTenseResource::collection($jawabanTenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanTenseRequest $request): JsonResponse
    {
        $jawabanTense = JawabanTense::create($request->validated());

        return response()->json(new JawabanTenseResource($jawabanTense));
    }

    /**
     * Display the specified resource.
     */
    public function show(JawabanTense $jawabanTense): JsonResponse
    {
        return response()->json(new JawabanTenseResource($jawabanTense));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanTenseRequest $request, JawabanTense $jawabanTense): JsonResponse
    {
        $jawabanTense->update($request->validated());

        return response()->json(new JawabanTenseResource($jawabanTense));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(JawabanTense $jawabanTense): Response
    {
        $jawabanTense->delete();

        return response()->noContent();
    }
}

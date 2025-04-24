<?php

namespace App\Http\Controllers\Api;

use App\Models\Tense;
use Illuminate\Http\Request;
use App\Http\Requests\TenseRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TenseResource;

class TenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tenses = Tense::paginate();

        return TenseResource::collection($tenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TenseRequest $request): JsonResponse
    {
        $tense = Tense::create($request->validated());

        return response()->json(new TenseResource($tense));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tense $tense): JsonResponse
    {
        return response()->json(new TenseResource($tense));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TenseRequest $request, Tense $tense): JsonResponse
    {
        $tense->update($request->validated());

        return response()->json(new TenseResource($tense));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Tense $tense): Response
    {
        $tense->delete();

        return response()->noContent();
    }
}

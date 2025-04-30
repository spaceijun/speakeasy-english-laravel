<?php

namespace App\Http\Controllers\Api;

use App\Models\MateriTense;
use Illuminate\Http\Request;
use App\Http\Requests\MateriTenseRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\MateriTenseResource;

class MateriTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $materiTenses = MateriTense::all();

        return MateriTenseResource::collection($materiTenses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriTenseRequest $request): JsonResponse
    {
        $materiTense = MateriTense::create($request->validated());

        return response()->json(new MateriTenseResource($materiTense));
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriTense $materiTense): JsonResponse
    {
        return response()->json(new MateriTenseResource($materiTense));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriTenseRequest $request, MateriTense $materiTense): JsonResponse
    {
        $materiTense->update($request->validated());

        return response()->json(new MateriTenseResource($materiTense));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(MateriTense $materiTense): Response
    {
        $materiTense->delete();

        return response()->noContent();
    }
}

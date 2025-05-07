<?php

namespace App\Http\Controllers\Api;

use App\Models\TugasFrasa;
use Illuminate\Http\Request;
use App\Http\Requests\TugasFrasaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TugasFrasaResource;

class TugasFrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tugasFrasas = TugasFrasa::paginate();

        return TugasFrasaResource::collection($tugasFrasas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasFrasaRequest $request): JsonResponse
    {
        $tugasFrasa = TugasFrasa::create($request->validated());

        return response()->json(new TugasFrasaResource($tugasFrasa));
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasFrasa $tugasFrasa): JsonResponse
    {
        return response()->json(new TugasFrasaResource($tugasFrasa));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasFrasaRequest $request, TugasFrasa $tugasFrasa): JsonResponse
    {
        $tugasFrasa->update($request->validated());

        return response()->json(new TugasFrasaResource($tugasFrasa));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(TugasFrasa $tugasFrasa): Response
    {
        $tugasFrasa->delete();

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailFrasa;
use Illuminate\Http\Request;
use App\Http\Requests\DetailFrasaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DetailFrasaResource;

class DetailFrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $detailFrasas = DetailFrasa::paginate();

        return DetailFrasaResource::collection($detailFrasas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailFrasaRequest $request): JsonResponse
    {
        $detailFrasa = DetailFrasa::create($request->validated());

        return response()->json(new DetailFrasaResource($detailFrasa));
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailFrasa $detailFrasa): JsonResponse
    {
        return response()->json(new DetailFrasaResource($detailFrasa));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailFrasaRequest $request, DetailFrasa $detailFrasa): JsonResponse
    {
        $detailFrasa->update($request->validated());

        return response()->json(new DetailFrasaResource($detailFrasa));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(DetailFrasa $detailFrasa): Response
    {
        $detailFrasa->delete();

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\Frasa;
use Illuminate\Http\Request;
use App\Http\Requests\FrasaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\FrasaResource;

class FrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $frasas = Frasa::all();

        return FrasaResource::collection($frasas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FrasaRequest $request): JsonResponse
    {
        $frasa = Frasa::create($request->validated());

        return response()->json(new FrasaResource($frasa));
    }

    /**
     * Display the specified resource.
     */
    public function show(Frasa $frasa): JsonResponse
    {
        return response()->json(new FrasaResource($frasa));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FrasaRequest $request, Frasa $frasa): JsonResponse
    {
        $frasa->update($request->validated());

        return response()->json(new FrasaResource($frasa));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Frasa $frasa): Response
    {
        $frasa->delete();

        return response()->noContent();
    }
}

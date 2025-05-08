<?php

namespace App\Http\Controllers\Api;

use App\Models\JawabanFrasa;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanFrasaRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanFrasaResource;

class JawabanFrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jawabanFrasas = JawabanFrasa::all();

        return JawabanFrasaResource::collection($jawabanFrasas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanFrasaRequest $request): JsonResponse
    {
        $jawabanFrasa = JawabanFrasa::create($request->validated());

        return response()->json(new JawabanFrasaResource($jawabanFrasa));
    }

    /**
     * Display the specified resource.
     */
    public function show(JawabanFrasa $jawabanFrasa): JsonResponse
    {
        return response()->json(new JawabanFrasaResource($jawabanFrasa));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanFrasaRequest $request, JawabanFrasa $jawabanFrasa): JsonResponse
    {
        $jawabanFrasa->update($request->validated());

        return response()->json(new JawabanFrasaResource($jawabanFrasa));
    }

    /**
     * Display a listing of the resource filtered by user.
     */
    public function getByUserFrasas(Request $request, $userId): JsonResponse
    {
        $jawabanFrasas = JawabanFrasa::where('user_id', $userId)->get();

        return response()->json(JawabanFrasaResource::collection($jawabanFrasas));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(JawabanFrasa $jawabanFrasa): Response
    {
        $jawabanFrasa->delete();

        return response()->noContent();
    }
}

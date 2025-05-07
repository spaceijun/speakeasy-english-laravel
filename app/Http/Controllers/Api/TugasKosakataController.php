<?php

namespace App\Http\Controllers\Api;

use App\Models\TugasKosakata;
use Illuminate\Http\Request;
use App\Http\Requests\TugasKosakataRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TugasKosakataResource;

class TugasKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tugasKosakatas = TugasKosakata::paginate();

        return TugasKosakataResource::collection($tugasKosakatas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasKosakataRequest $request): JsonResponse
    {
        $tugasKosakata = TugasKosakata::create($request->validated());

        return response()->json(new TugasKosakataResource($tugasKosakata));
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasKosakata $tugasKosakata): JsonResponse
    {
        return response()->json(new TugasKosakataResource($tugasKosakata));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasKosakataRequest $request, TugasKosakata $tugasKosakata): JsonResponse
    {
        $tugasKosakata->update($request->validated());

        return response()->json(new TugasKosakataResource($tugasKosakata));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(TugasKosakata $tugasKosakata): Response
    {
        $tugasKosakata->delete();

        return response()->noContent();
    }
}

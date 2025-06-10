<?php

namespace App\Http\Controllers\Api;

use App\Models\JawabanKosakata;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanKosakataRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanKosakataResource;

class JawabanKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jawabanKosakatas = JawabanKosakata::all();

        return JawabanKosakataResource::collection($jawabanKosakatas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanKosakataRequest $request): JsonResponse
    {
        $jawabanKosakata = JawabanKosakata::create($request->validated());

        return response()->json(new JawabanKosakataResource($jawabanKosakata));
    }

    /**
     * Display the specified resource.
     */
    public function show(JawabanKosakata $jawabanKosakata): JsonResponse
    {
        return response()->json(new JawabanKosakataResource($jawabanKosakata));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanKosakataRequest $request, JawabanKosakata $jawabanKosakata): JsonResponse
    {
        $jawabanKosakata->update($request->validated());

        return response()->json(new JawabanKosakataResource($jawabanKosakata));
    }

    /**
     * Display a listing of the resource filtered by user.
     */
    public function getByUser($userId): JsonResponse
    {
        $jawabanKosakatas = JawabanKosakata::where('user_id', $userId)->get();

        if ($jawabanKosakatas->isEmpty()) {
            return response()->json([
                'message' => 'No jawaban kosakata found for user_id: ' . $userId
            ], 404);
        }

        return response()->json(JawabanKosakataResource::collection($jawabanKosakatas));
    }


    /**
     * Delete the specified resource.
     */
    public function destroy(JawabanKosakata $jawabanKosakata): Response
    {
        $jawabanKosakata->delete();

        return response()->noContent();
    }
}

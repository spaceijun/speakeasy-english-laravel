<?php

namespace App\Http\Controllers\Api;

use App\Models\JawabanIdiom;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanIdiomRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanIdiomResource;

class JawabanIdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jawabanIdioms = JawabanIdiom::all();

        return JawabanIdiomResource::collection($jawabanIdioms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanIdiomRequest $request): JsonResponse
    {
        $jawabanIdiom = JawabanIdiom::create($request->validated());

        return response()->json(new JawabanIdiomResource($jawabanIdiom));
    }

    /**
     * Display the specified resource.
     */
    public function show(JawabanIdiom $jawabanIdiom): JsonResponse
    {
        return response()->json(new JawabanIdiomResource($jawabanIdiom));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanIdiomRequest $request, JawabanIdiom $jawabanIdiom): JsonResponse
    {
        $jawabanIdiom->update($request->validated());

        return response()->json(new JawabanIdiomResource($jawabanIdiom));
    }

    /**
     * Display a listing of the resource filtered by user.
     */
    public function getByUser($userId): JsonResponse
    {
        $jawabanIdioms = JawabanIdiom::where('user_id', $userId)->get();

        if ($jawabanIdioms->isEmpty()) {
            return response()->json([
                'message' => 'No jawaban idiom found for user_id: ' . $userId
            ], 404);
        }

        return response()->json(JawabanIdiomResource::collection($jawabanIdioms));
    }



    /**
     * Delete the specified resource.
     */
    public function destroy(JawabanIdiom $jawabanIdiom): Response
    {
        $jawabanIdiom->delete();

        return response()->noContent();
    }
}

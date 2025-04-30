<?php

namespace App\Http\Controllers\Api;

use App\Models\Idiom;
use Illuminate\Http\Request;
use App\Http\Requests\IdiomRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\IdiomResource;

class IdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $idioms = Idiom::all();

        return IdiomResource::collection($idioms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdiomRequest $request): JsonResponse
    {
        $idiom = Idiom::create($request->validated());

        return response()->json(new IdiomResource($idiom));
    }

    /**
     * Display the specified resource.
     */
    public function show(Idiom $idiom): JsonResponse
    {
        return response()->json(new IdiomResource($idiom));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IdiomRequest $request, Idiom $idiom): JsonResponse
    {
        $idiom->update($request->validated());

        return response()->json(new IdiomResource($idiom));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Idiom $idiom): Response
    {
        $idiom->delete();

        return response()->noContent();
    }
}

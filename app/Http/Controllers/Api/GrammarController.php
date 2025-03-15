<?php

namespace App\Http\Controllers\Api;

use App\Models\Grammar;
use Illuminate\Http\Request;
use App\Http\Requests\GrammarRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\GrammarResource;

class GrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $grammars = Grammar::paginate();

        return GrammarResource::collection($grammars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GrammarRequest $request): JsonResponse
    {
        $grammar = Grammar::create($request->validated());

        return response()->json(new GrammarResource($grammar));
    }

    /**
     * Display the specified resource.
     */
    public function show(Grammar $grammar): JsonResponse
    {
        return response()->json(new GrammarResource($grammar));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GrammarRequest $request, Grammar $grammar): JsonResponse
    {
        $grammar->update($request->validated());

        return response()->json(new GrammarResource($grammar));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Grammar $grammar): Response
    {
        $grammar->delete();

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\TugasGrammar;
use Illuminate\Http\Request;
use App\Http\Requests\TugasGrammarRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\TugasGrammarResource;

class TugasGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tugasGrammars = TugasGrammar::all();

        return TugasGrammarResource::collection($tugasGrammars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasGrammarRequest $request): JsonResponse
    {
        $tugasGrammar = TugasGrammar::create($request->validated());

        return response()->json(new TugasGrammarResource($tugasGrammar));
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasGrammar $tugasGrammar): JsonResponse
    {
        return response()->json(new TugasGrammarResource($tugasGrammar));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasGrammarRequest $request, TugasGrammar $tugasGrammar): JsonResponse
    {
        $tugasGrammar->update($request->validated());

        return response()->json(new TugasGrammarResource($tugasGrammar));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(TugasGrammar $tugasGrammar): Response
    {
        $tugasGrammar->delete();

        return response()->noContent();
    }
}

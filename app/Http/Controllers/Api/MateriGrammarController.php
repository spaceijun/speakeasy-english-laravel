<?php

namespace App\Http\Controllers\Api;

use App\Models\MateriGrammar;
use Illuminate\Http\Request;
use App\Http\Requests\MateriGrammarRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\MateriGrammarResource;

class MateriGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $materiGrammars = MateriGrammar::paginate();

        return MateriGrammarResource::collection($materiGrammars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriGrammarRequest $request): JsonResponse
    {
        $materiGrammar = MateriGrammar::create($request->validated());

        return response()->json(new MateriGrammarResource($materiGrammar));
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriGrammar $materiGrammar): JsonResponse
    {
        return response()->json(new MateriGrammarResource($materiGrammar));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriGrammarRequest $request, MateriGrammar $materiGrammar): JsonResponse
    {
        $materiGrammar->update($request->validated());

        return response()->json(new MateriGrammarResource($materiGrammar));
    }

    /**
     * Get detail grammar by specific detailgram_id
     */
    public function getByGrammarId($grammarId): JsonResponse
    {
        $detailGrammars = MateriGrammar::where('detailgram_id', $grammarId)->get();

        if ($detailGrammars->isEmpty()) {
            return response()->json([
                'message' => 'No detail grammar found for detailgram_id: ' . $grammarId
            ], 404);
        }

        return response()->json(MateriGrammarResource::collection($detailGrammars));
    }


    /**
     * Delete the specified resource.
     */
    public function destroy(MateriGrammar $materiGrammar): Response
    {
        $materiGrammar->delete();

        return response()->noContent();
    }
}

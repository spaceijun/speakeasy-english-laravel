<?php

namespace App\Http\Controllers\Api;

use App\Models\DetailGrammar;
use Illuminate\Http\Request;
use App\Http\Requests\DetailGrammarRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\DetailGrammarResource;

class DetailGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $detailGrammars = DetailGrammar::paginate();

        return DetailGrammarResource::collection($detailGrammars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailGrammarRequest $request): JsonResponse
    {
        $detailGrammar = DetailGrammar::create($request->validated());

        return response()->json(new DetailGrammarResource($detailGrammar));
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailGrammar $detailGrammar): JsonResponse
    {
        return response()->json(new DetailGrammarResource($detailGrammar));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailGrammarRequest $request, DetailGrammar $detailGrammar): JsonResponse
    {
        $detailGrammar->update($request->validated());

        return response()->json(new DetailGrammarResource($detailGrammar));
    }


    /**
     * Delete the specified resource.
     */
    public function destroy(DetailGrammar $detailGrammar): Response
    {
        $detailGrammar->delete();

        return response()->noContent();
    }
}

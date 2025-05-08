<?php

namespace App\Http\Controllers\Api;

use App\Models\JawabanGrammar;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanGrammarRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\JawabanGrammarResource;

class JawabanGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $jawabanGrammars = JawabanGrammar::all();

        return JawabanGrammarResource::collection($jawabanGrammars);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanGrammarRequest $request): JsonResponse
    {
        $jawabanGrammar = JawabanGrammar::create($request->validated());

        return response()->json(new JawabanGrammarResource($jawabanGrammar));
    }

    /**
     * Display the specified resource.
     */
    public function show(JawabanGrammar $jawabanGrammar): JsonResponse
    {
        return response()->json(new JawabanGrammarResource($jawabanGrammar));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanGrammarRequest $request, JawabanGrammar $jawabanGrammar): JsonResponse
    {
        $jawabanGrammar->update($request->validated());

        return response()->json(new JawabanGrammarResource($jawabanGrammar));
    }

    /**
     * Display a listing of the resource filtered by user.
     */
    public function getByUserGrammars(Request $request, $userId): JsonResponse
    {
        $jawabanGrammars = JawabanGrammar::where('user_id', $userId)->get();

        return response()->json(JawabanGrammarResource::collection($jawabanGrammars));
    }


    /**
     * Delete the specified resource.
     */
    public function destroy(JawabanGrammar $jawabanGrammar): Response
    {
        $jawabanGrammar->delete();

        return response()->noContent();
    }
}

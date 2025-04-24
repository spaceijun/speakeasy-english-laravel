<?php

namespace App\Http\Controllers\Api;

use App\Models\MateriKosakata;
use Illuminate\Http\Request;
use App\Http\Requests\MateriKosakataRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\MateriKosakataResource;

class MateriKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $materiKosakatas = MateriKosakata::paginate();

        return MateriKosakataResource::collection($materiKosakatas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriKosakataRequest $request): JsonResponse
    {
        $materiKosakata = MateriKosakata::create($request->validated());

        return response()->json(new MateriKosakataResource($materiKosakata));
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriKosakata $materiKosakata): JsonResponse
    {
        return response()->json(new MateriKosakataResource($materiKosakata));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriKosakataRequest $request, MateriKosakata $materiKosakata): JsonResponse
    {
        $materiKosakata->update($request->validated());

        return response()->json(new MateriKosakataResource($materiKosakata));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(MateriKosakata $materiKosakata): Response
    {
        $materiKosakata->delete();

        return response()->noContent();
    }
}

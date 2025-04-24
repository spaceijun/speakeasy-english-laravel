<?php

namespace App\Http\Controllers\Api;

use App\Models\Kosakata;
use Illuminate\Http\Request;
use App\Http\Requests\KosakataRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\KosakataResource;

class KosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $kosakatas = Kosakata::paginate();

        return KosakataResource::collection($kosakatas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KosakataRequest $request): JsonResponse
    {
        $kosakata = Kosakata::create($request->validated());

        return response()->json(new KosakataResource($kosakata));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kosakata $kosakata): JsonResponse
    {
        return response()->json(new KosakataResource($kosakata));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KosakataRequest $request, Kosakata $kosakata): JsonResponse
    {
        $kosakata->update($request->validated());

        return response()->json(new KosakataResource($kosakata));
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(Kosakata $kosakata): Response
    {
        $kosakata->delete();

        return response()->noContent();
    }
}

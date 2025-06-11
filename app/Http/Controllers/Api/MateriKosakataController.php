<?php

namespace App\Http\Controllers\Api;

use App\Models\MateriKosakata;
use App\Models\Kosakata;
use Illuminate\Http\Request;
use App\Http\Requests\MateriKosakataRequest;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Resources\MateriKosakataResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class MateriKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     * Dapat difilter berdasarkan kosakatas_id
     */
    public function index(Request $request): JsonResponse
    {
        $query = MateriKosakata::query();

        // Filter berdasarkan kosakatas_id jika ada
        if ($request->has('kosakatas_id')) {
            $kosakatasId = $request->get('kosakatas_id');

            // Validasi apakah kosakata dengan ID tersebut ada
            if (!Kosakata::find($kosakatasId)) {
                return response()->json([
                    'message' => 'Kosakata dengan ID tersebut tidak ditemukan',
                    'error' => 'Kosakata not found'
                ], 404);
            }

            $query->where('kosakatas_id', $kosakatasId);
        }

        // Tambahkan relasi untuk informasi lebih lengkap
        $materiKosakatas = $query->with(['kosakata'])->get();

        return response()->json([
            'message' => 'Data materi kosakata berhasil diambil',
            'data' => MateriKosakataResource::collection($materiKosakatas),
            'total' => $materiKosakatas->count()
        ]);
    }

    /**
     * Display materi kosakata berdasarkan kosakatas_id tertentu
     */
    public function getByKosakataId($kosakatasId): JsonResponse
    {
        try {
            // Validasi apakah kosakata dengan ID tersebut ada
            $kosakata = Kosakata::findOrFail($kosakatasId);

            $materiKosakatas = MateriKosakata::where('kosakatas_id', $kosakatasId)
                ->with(['kosakata'])
                ->get();

            return response()->json([
                'message' => 'Data materi kosakata berhasil diambil',
                'kosakata_info' => [
                    'id' => $kosakata->id,
                    'nama' => $kosakata->nama ?? 'N/A'
                ],
                'data' => MateriKosakataResource::collection($materiKosakatas),
                'total' => $materiKosakatas->count()
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Kosakata dengan ID tersebut tidak ditemukan',
                'error' => 'Kosakata not found'
            ], 404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriKosakataRequest $request): JsonResponse
    {
        try {
            // Validasi apakah kosakatas_id ada jika disertakan
            if ($request->has('kosakatas_id')) {
                $kosakata = Kosakata::findOrFail($request->kosakatas_id);
            }

            $materiKosakata = MateriKosakata::create($request->validated());

            // Load relasi untuk response yang lebih lengkap
            $materiKosakata->load('kosakata');

            return response()->json([
                'message' => 'Materi kosakata berhasil dibuat',
                'data' => new MateriKosakataResource($materiKosakata)
            ], 201);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Kosakata dengan ID tersebut tidak ditemukan',
                'error' => 'Kosakata not found'
            ], 404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(MateriKosakata $materiKosakata): JsonResponse
    {
        // Load relasi untuk informasi lebih lengkap
        $materiKosakata->load('kosakata');

        return response()->json([
            'message' => 'Data materi kosakata berhasil diambil',
            'data' => new MateriKosakataResource($materiKosakata)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriKosakataRequest $request, MateriKosakata $materiKosakata): JsonResponse
    {
        try {
            // Validasi apakah kosakatas_id ada jika akan diubah
            if ($request->has('kosakatas_id') && $request->kosakatas_id != $materiKosakata->kosakatas_id) {
                $kosakata = Kosakata::findOrFail($request->kosakatas_id);
            }

            $materiKosakata->update($request->validated());

            // Load relasi untuk response yang lebih lengkap
            $materiKosakata->load('kosakata');

            return response()->json([
                'message' => 'Materi kosakata berhasil diperbarui',
                'data' => new MateriKosakataResource($materiKosakata)
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Kosakata dengan ID tersebut tidak ditemukan',
                'error' => 'Kosakata not found'
            ], 404);
        }
    }

    /**
     * Delete the specified resource.
     */
    public function destroy(MateriKosakata $materiKosakata): JsonResponse
    {
        $materiKosakata->delete();

        return response()->json([
            'message' => 'Materi kosakata berhasil dihapus'
        ], 200);
    }

    /**
     * Bulk delete materi kosakata berdasarkan kosakatas_id
     */
    public function destroyByKosakataId($kosakatasId): JsonResponse
    {
        try {
            // Validasi apakah kosakata dengan ID tersebut ada
            $kosakata = Kosakata::findOrFail($kosakatasId);

            $deletedCount = MateriKosakata::where('kosakatas_id', $kosakatasId)->delete();

            return response()->json([
                'message' => "Berhasil menghapus {$deletedCount} materi kosakata",
                'deleted_count' => $deletedCount,
                'kosakata_info' => [
                    'id' => $kosakata->id,
                    'nama' => $kosakata->nama ?? 'N/A'
                ]
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Kosakata dengan ID tersebut tidak ditemukan',
                'error' => 'Kosakata not found'
            ], 404);
        }
    }

    /**
     * Get statistics for materi kosakata by kosakatas_id
     */
    public function getStatistics(Request $request): JsonResponse
    {
        $query = MateriKosakata::query();

        if ($request->has('kosakatas_id')) {
            $kosakatasId = $request->get('kosakatas_id');

            if (!Kosakata::find($kosakatasId)) {
                return response()->json([
                    'message' => 'Kosakata dengan ID tersebut tidak ditemukan',
                    'error' => 'Kosakata not found'
                ], 404);
            }

            $query->where('kosakatas_id', $kosakatasId);
        }

        $total = $query->count();
        $byKosakata = MateriKosakata::selectRaw('kosakatas_id, COUNT(*) as total')
            ->with('kosakata:id,nama')
            ->groupBy('kosakatas_id')
            ->get();

        return response()->json([
            'message' => 'Statistik materi kosakata berhasil diambil',
            'statistics' => [
                'total_materi' => $total,
                'by_kosakata' => $byKosakata->map(function ($item) {
                    return [
                        'kosakatas_id' => $item->kosakatas_id,
                        'kosakata_nama' => $item->kosakata->nama ?? 'N/A',
                        'total_materi' => $item->total
                    ];
                })
            ]
        ]);
    }
}

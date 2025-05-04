<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JawabanHafalan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanHafalanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class JawabanHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanHafalans = JawabanHafalan::with('tugasHafalan', 'user')->all();
        return view('admin.hafalan.jawaban-hafalan.index', compact('jawabanHafalans'));
    }

    /**
     * API: Get all jawaban hafalan resources
     */
    public function apiIndex(Request $request): JsonResponse
    {
        $perPage = $request->input();
        $jawabanHafalans = JawabanHafalan::with('tugasHafalan', 'user')
            ->paginate($perPage);

        return response()->json([
            'status' => 'success',
            'data' => $jawabanHafalans,
            'message' => 'Jawaban Hafalan retrieved successfully',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tugas_hafalan_id): View
    {
        $jawabanHafalan = new JawabanHafalan(['tugas_hafalan_id' => $tugas_hafalan_id]);
        return view('admin.hafalan.jawaban-hafalan.create', compact('jawabanHafalan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanHafalanRequest $request): RedirectResponse
    {
        JawabanHafalan::create($request->validated());
        return Redirect::route('jawaban.hafalan.index')
            ->with('success', 'JawabanHafalan created successfully.');
    }

    /**
     * API: Store a newly created resource in storage
     */
    public function apiStore(JawabanHafalanRequest $request): JsonResponse
    {
        try {
            $jawabanHafalan = JawabanHafalan::create($request->validated());
            return response()->json([
                'status' => 'success',
                'data' => $jawabanHafalan,
                'message' => 'Jawaban Hafalan created successfully',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to create Jawaban Hafalan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanHafalan = JawabanHafalan::find($id);
        return view('admin.hafalan.jawaban-hafalan.show', compact('jawabanHafalan'));
    }

    /**
     * API: Display the specified resource
     */
    public function apiShow($id): JsonResponse
    {
        $jawabanHafalan = JawabanHafalan::with('tugasHafalan', 'user')->find($id);

        if (!$jawabanHafalan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Jawaban Hafalan not found',
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $jawabanHafalan,
            'message' => 'Jawaban Hafalan retrieved successfully',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanHafalan = JawabanHafalan::find($id);
        return view('jawaban.hafalan.edit', compact('jawabanHafalan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanHafalanRequest $request, JawabanHafalan $jawabanHafalan): RedirectResponse
    {
        $jawabanHafalan->update($request->validated());
        $jawabanHafalan->update($request->all());
        // set status
        $jawabanHafalan->status = "Sudah Dikoreksi";
        $jawabanHafalan->save();
        return Redirect::route('jawaban.hafalan.index')
            ->with('success', 'JawabanHafalan updated successfully');
    }

    /**
     * API: Update the specified resource in storage
     */
    public function apiUpdate(JawabanHafalanRequest $request, $id): JsonResponse
    {
        $jawabanHafalan = JawabanHafalan::find($id);

        if (!$jawabanHafalan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Jawaban Hafalan not found',
            ], 404);
        }

        try {
            $jawabanHafalan->update($request->validated());
            // set status
            $jawabanHafalan->status = "Sudah Dikoreksi";
            $jawabanHafalan->save();

            return response()->json([
                'status' => 'success',
                'data' => $jawabanHafalan,
                'message' => 'Jawaban Hafalan updated successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to update Jawaban Hafalan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        JawabanHafalan::find($id)->delete();
        return Redirect::route('jawaban.hafalans.index')
            ->with('success', 'JawabanHafalan deleted successfully');
    }

    /**
     * API: Remove the specified resource from storage
     */
    public function apiDestroy($id): JsonResponse
    {
        $jawabanHafalan = JawabanHafalan::find($id);

        if (!$jawabanHafalan) {
            return response()->json([
                'status' => 'error',
                'message' => 'Jawaban Hafalan not found',
            ], 404);
        }

        try {
            $jawabanHafalan->delete();
            return response()->json([
                'status' => 'success',
                'message' => 'Jawaban Hafalan deleted successfully',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete Jawaban Hafalan',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * API: Get jawaban hafalan by tugas_hafalan_id
     */
    public function apiGetByTugasHafalan($tugas_hafalan_id): JsonResponse
    {
        $jawabanHafalans = JawabanHafalan::where('tugas_hafalan_id', $tugas_hafalan_id)
            ->with('user')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $jawabanHafalans,
            'message' => 'Jawaban Hafalan by Tugas Hafalan retrieved successfully',
        ]);
    }

    /**
     * API: Get jawaban hafalan by user_id
     */
    public function apiGetByUser($user_id): JsonResponse
    {
        $jawabanHafalans = JawabanHafalan::where('user_id', $user_id)
            ->with('tugasHafalan')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $jawabanHafalans,
            'message' => 'Jawaban Hafalan by User retrieved successfully',
        ]);
    }
}

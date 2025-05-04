<?php

namespace App\Http\Controllers;

use App\Models\TugasHafalan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TugasHafalanRequest;
use App\Models\Hafalan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TugasHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tugasHafalans = TugasHafalan::with('hafalan')->paginate();

        return view('admin.hafalan.tugas-hafalan.index', compact('tugasHafalans'))
            ->with('i', ($request->input('page', 1) - 1) * $tugasHafalans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tugasHafalan = new TugasHafalan();
        $hafalans = Hafalan::all();

        return view('admin.hafalan.tugas-hafalan.create', compact('tugasHafalan', 'hafalans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasHafalanRequest $request): RedirectResponse
    {
        TugasHafalan::create($request->validated());

        return Redirect::route('tugas-hafalans.index')
            ->with('success', 'TugasHafalan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tugasHafalan = TugasHafalan::find($id);

        return view('admin.hafalan.tugas-hafalan.show', compact('tugasHafalan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tugasHafalan = TugasHafalan::find($id);

        return view('admin.hafalan.tugas-hafalan.edit', compact('tugasHafalan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasHafalanRequest $request, TugasHafalan $tugasHafalan): RedirectResponse
    {
        $tugasHafalan->update($request->validated());

        return Redirect::route('tugas-hafalans.index')
            ->with('success', 'TugasHafalan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TugasHafalan::find($id)->delete();

        return Redirect::route('tugas-hafalans.index')
            ->with('success', 'TugasHafalan deleted successfully');
    }
}

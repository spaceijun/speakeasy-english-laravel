<?php

namespace App\Http\Controllers;

use App\Models\JawabanHafalan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanHafalanRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JawabanHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanHafalans = JawabanHafalan::paginate();

        return view('jawaban-hafalan.index', compact('jawabanHafalans'))
            ->with('i', ($request->input('page', 1) - 1) * $jawabanHafalans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $jawabanHafalan = new JawabanHafalan();

        return view('jawaban-hafalan.create', compact('jawabanHafalan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanHafalanRequest $request): RedirectResponse
    {
        JawabanHafalan::create($request->validated());

        return Redirect::route('jawaban-hafalans.index')
            ->with('success', 'JawabanHafalan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanHafalan = JawabanHafalan::find($id);

        return view('jawaban-hafalan.show', compact('jawabanHafalan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanHafalan = JawabanHafalan::find($id);

        return view('jawaban-hafalan.edit', compact('jawabanHafalan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanHafalanRequest $request, JawabanHafalan $jawabanHafalan): RedirectResponse
    {
        $jawabanHafalan->update($request->validated());

        return Redirect::route('jawaban-hafalans.index')
            ->with('success', 'JawabanHafalan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        JawabanHafalan::find($id)->delete();

        return Redirect::route('jawaban-hafalans.index')
            ->with('success', 'JawabanHafalan deleted successfully');
    }
}

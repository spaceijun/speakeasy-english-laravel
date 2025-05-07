<?php

namespace App\Http\Controllers;

use App\Models\TugasTense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TugasTenseRequest;
use App\Models\DetailTense;
use App\Models\Tense;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TugasTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tugasTenses = TugasTense::with('tense')->paginate();

        return view('admin.detail-tense.tugas-tense.index', compact('tugasTenses'))
            ->with('i', ($request->input('page', 1) - 1) * $tugasTenses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tugasTense = new TugasTense();
        $tenses = DetailTense::all();

        return view('admin.detail-tense.tugas-tense.create', compact('tugasTense', 'tenses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasTenseRequest $request): RedirectResponse
    {
        TugasTense::create($request->validated());

        return Redirect::route('tugas-tenses.index')
            ->with('success', 'TugasTense created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tugasTense = TugasTense::find($id);

        return view('admin.detail-tense.tugas-tense.show', compact('tugasTense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tugasTense = TugasTense::find($id);

        return view('admin.detail-tense.tugas-tense.edit', compact('tugasTense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasTenseRequest $request, TugasTense $tugasTense): RedirectResponse
    {
        $tugasTense->update($request->validated());

        return Redirect::route('tugas-tenses.index')
            ->with('success', 'TugasTense updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TugasTense::find($id)->delete();

        return Redirect::route('tugas-tenses.index')
            ->with('success', 'TugasTense deleted successfully');
    }
}

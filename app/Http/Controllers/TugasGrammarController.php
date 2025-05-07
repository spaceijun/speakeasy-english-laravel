<?php

namespace App\Http\Controllers;

use App\Models\TugasGrammar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TugasGrammarRequest;
use App\Models\DetailGrammar;
use App\Models\Grammar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TugasGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tugasGrammars = TugasGrammar::with('grammar')->paginate();

        return view('admin.detail-grammar.tugas-grammar.index', compact('tugasGrammars'))
            ->with('i', ($request->input('page', 1) - 1) * $tugasGrammars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tugasGrammar = new TugasGrammar();
        $grammars = DetailGrammar::all();

        return view('admin.detail-grammar.tugas-grammar.create', compact('tugasGrammar', 'grammars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasGrammarRequest $request): RedirectResponse
    {
        TugasGrammar::create($request->validated());

        return Redirect::route('tugas-grammars.index')
            ->with('success', 'TugasGrammar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tugasGrammar = TugasGrammar::find($id);

        return view('admin.detail-grammar.tugas-grammar.show', compact('tugasGrammar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tugasGrammar = TugasGrammar::find($id);

        return view('admin.detail-grammar.tugas-grammar.edit', compact('tugasGrammar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasGrammarRequest $request, TugasGrammar $tugasGrammar): RedirectResponse
    {
        $tugasGrammar->update($request->validated());

        return Redirect::route('tugas-grammars.index')
            ->with('success', 'TugasGrammar updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TugasGrammar::find($id)->delete();

        return Redirect::route('tugas-grammars.index')
            ->with('success', 'TugasGrammar deleted successfully');
    }
}

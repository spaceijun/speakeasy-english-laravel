<?php

namespace App\Http\Controllers;

use App\Models\JawabanGrammar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanGrammarRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JawabanGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanGrammars = JawabanGrammar::with('tugasGrammar', 'user')->paginate();

        return view('admin.detail-grammar.jawaban-grammar.index', compact('jawabanGrammars'))
            ->with('i', ($request->input('page', 1) - 1) * $jawabanGrammars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tugas_grammars_id): View
    {
        $jawabanGrammar = new JawabanGrammar(['tugas_grammars_id' => $tugas_grammars_id]);

        return view('admin.detail-grammar.jawaban-grammar.create', compact('jawabanGrammar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanGrammarRequest $request): RedirectResponse
    {
        JawabanGrammar::create($request->validated());

        return Redirect::route('jawaban.grammar.index')
            ->with('success', 'JawabanGrammar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanGrammar = JawabanGrammar::find($id);

        return view('admin.detail-grammar.jawaban-grammar.show', compact('jawabanGrammar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanGrammar = JawabanGrammar::find($id);

        return view('admin.detail-grammar.jawaban-grammar.edit', compact('jawabanGrammar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanGrammarRequest $request, JawabanGrammar $jawabanGrammar): RedirectResponse
    {
        $jawabanGrammar->update($request->validated());
        $jawabanGrammar->update($request->all());

        // set status
        $jawabanGrammar->status = "Sudah Dikoreksi";
        $jawabanGrammar->save();

        return Redirect::route('jawaban.grammar.index')
            ->with('success', 'JawabanHafalan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        JawabanGrammar::find($id)->delete();

        return Redirect::route('jawaban.grammar.index')
            ->with('success', 'JawabanGrammar deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\MateriGrammar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MateriGrammarRequest;
use App\Models\DetailGrammar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MateriGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $materiGrammars = MateriGrammar::paginate();

        return view('admin.materi-grammar.index', compact('materiGrammars'))
            ->with('i', ($request->input('page', 1) - 1) * $materiGrammars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $materiGrammar = new MateriGrammar();
        $detailGrammar = DetailGrammar::all();

        // Filter Detailgram_id yang sudah dipilih derr
        $selectedDetailGrammarsId = MateriGrammar::pluck('detailgram_id')->toArray();
        $availableDetailGrammars = $detailGrammar->whereNotIn('id', $selectedDetailGrammarsId);

        return view('admin.materi-grammar.create', compact('materiGrammar', 'availableDetailGrammars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriGrammarRequest $request): RedirectResponse
    {
        MateriGrammar::create($request->validated());

        return Redirect::route('materi-grammars.index')
            ->with('success', 'MateriGrammar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $materiGrammar = MateriGrammar::find($id);

        return view('admin.materi-grammar.show', compact('materiGrammar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $materiGrammar = MateriGrammar::find($id);

        return view('admin.materi-grammar.edit', compact('materiGrammar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriGrammarRequest $request, MateriGrammar $materiGrammar): RedirectResponse
    {
        $materiGrammar->update($request->validated());

        return Redirect::route('materi-grammars.index')
            ->with('success', 'MateriGrammar updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MateriGrammar::find($id)->delete();

        return Redirect::route('materi-grammars.index')
            ->with('success', 'MateriGrammar deleted successfully');
    }
}

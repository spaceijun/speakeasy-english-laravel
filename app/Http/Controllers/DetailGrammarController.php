<?php

namespace App\Http\Controllers;

use App\Models\DetailGrammar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetailGrammarRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetailGrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detailGrammars = DetailGrammar::paginate();

        return view('admin.detail-grammar.index', compact('detailGrammars'))
            ->with('i', ($request->input('page', 1) - 1) * $detailGrammars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detailGrammar = new DetailGrammar();

        return view('admin.detail-grammar.create', compact('detailGrammar'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailGrammarRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/grammar', $filename);
            $data['images'] = $filename;
        }

        DetailGrammar::create($data);

        return redirect()->route('detial-grammars.index')
            ->with('success', 'Materi Grammar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detailGrammar = DetailGrammar::find($id);

        return view('admin.detail-grammar.show', compact('detailGrammar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detailGrammar = DetailGrammar::find($id);

        return view('admin.detail-grammar.edit', compact('detailGrammar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailGrammarRequest $request, DetailGrammar $detailGrammar): RedirectResponse
    {
        $detailGrammar->update($request->validated());

        return Redirect::route('detail-grammars.index')
            ->with('success', 'DetailGrammar updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetailGrammar::find($id)->delete();

        return Redirect::route('detail-grammars.index')
            ->with('success', 'DetailGrammar deleted successfully');
    }
}

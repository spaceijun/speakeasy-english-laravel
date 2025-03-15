<?php

namespace App\Http\Controllers;

use App\Models\Grammar;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\GrammarRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class GrammarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $grammars = Grammar::with('category')->paginate();

        return view('admin.grammar.index', compact('grammars'))
            ->with('i', ($request->input('page', 1) - 1) * $grammars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $grammar = new Grammar();
        $categories = Category::where('name', 'grammar')->get();
        return view('admin.grammar.create', compact('grammar', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GrammarRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/grammar'), $filename);
            $data['images'] = $filename;
        }

        Grammar::create($data);

        return redirect()->route('grammars.index')
            ->with('success', 'Grammar created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $grammar = Grammar::find($id);

        return view('admin.grammar.show', compact('grammar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $grammar = Grammar::find($id);

        return view('admin.grammar.edit', compact('grammar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GrammarRequest $request, Grammar $grammar): RedirectResponse
    {
        $grammar->update($request->validated());

        return Redirect::route('grammars.index')
            ->with('success', 'Grammar updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Grammar::find($id)->delete();

        return Redirect::route('grammars.index')
            ->with('success', 'Grammar deleted successfully');
    }
}

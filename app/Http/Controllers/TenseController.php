<?php

namespace App\Http\Controllers;

use App\Models\Tense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TenseRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tenses = Tense::with('category')->paginate();

        return view('admin.tense.index', compact('tenses'))
            ->with('i', ($request->input('page', 1) - 1) * $tenses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tense = new Tense();
        $categories = Category::where('name', 'tenses')->get();

        return view('admin.tense.create', compact('tense', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TenseRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/tenses'), $filename);
            $data['images'] = $filename;
        }

        Tense::create($data);

        return redirect()->route('tenses.index')
            ->with('success', 'Tenses created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tense = Tense::find($id);

        return view('admin.tense.show', compact('tense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tense = Tense::find($id);

        return view('admin.tense.edit', compact('tense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TenseRequest $request, Tense $tense): RedirectResponse
    {
        $tense->update($request->validated());

        return Redirect::route('tenses.index')
            ->with('success', 'Tenses updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tense::find($id)->delete();

        return Redirect::route('tenses.index')
            ->with('success', 'Tenses deleted successfully');
    }
}

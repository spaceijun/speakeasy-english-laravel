<?php

namespace App\Http\Controllers;

use App\Models\Idiom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\IdiomRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $idioms = Idiom::with('category')->paginate();
        $categories = Category::all();
        return view('admin.idiom.index', compact('idioms', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * $idioms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $idiom = new Idiom();
        $categories = Category::where('name', 'idiom')->get();
        return view('admin.idiom.create', compact('idiom', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdiomRequest $request): RedirectResponse
    {
        Idiom::create($request->validated());
        return Redirect::route('idioms.index')
            ->with('success', 'Idiom created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $idiom = Idiom::find($id);

        return view('admin.idiom.show', compact('idiom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $idiom = Idiom::find($id);

        return view('admin.idiom.edit', compact('idiom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(IdiomRequest $request, Idiom $idiom): RedirectResponse
    {
        $idiom->update($request->validated());

        return Redirect::route('idioms.index')
            ->with('success', 'Idiom updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Idiom::find($id)->delete();

        return Redirect::route('idioms.index')
            ->with('success', 'Idiom deleted successfully');
    }
}

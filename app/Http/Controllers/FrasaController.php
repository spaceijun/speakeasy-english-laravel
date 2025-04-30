<?php

namespace App\Http\Controllers;

use App\Models\Frasa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FrasaRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $frasas = Frasa::with('category')->paginate();
        $categories = Category::all();
        return view('admin.frasa.index', compact('frasas', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * $frasas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $frasa = new Frasa();
        $categories = Category::where('name', 'frasa')->get();
        return view('admin.frasa.create', compact('frasa', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FrasaRequest $request): RedirectResponse
    {
        Frasa::create($request->validated());

        return Redirect::route('frasas.index')
            ->with('success', 'Frasa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $frasa = Frasa::find($id);

        return view('admin.frasa.show', compact('frasa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $frasa = Frasa::find($id);
        $categories = Category::where('name', 'frasa')->get();
        return view('admin.frasa.edit', compact('frasa', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FrasaRequest $request, Frasa $frasa): RedirectResponse
    {
        $frasa->update($request->validated());

        return Redirect::route('frasas.index')
            ->with('success', 'Frasa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Frasa::find($id)->delete();

        return Redirect::route('frasas.index')
            ->with('success', 'Frasa deleted successfully');
    }
}

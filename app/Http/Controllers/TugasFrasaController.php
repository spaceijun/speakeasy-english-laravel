<?php

namespace App\Http\Controllers;

use App\Models\TugasFrasa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TugasFrasaRequest;
use App\Models\Frasa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TugasFrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tugasFrasas = TugasFrasa::with('frasa')->paginate();

        return view('admin.frasa.tugas-frasa.index', compact('tugasFrasas'))
            ->with('i', ($request->input('page', 1) - 1) * $tugasFrasas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tugasFrasa = new TugasFrasa();
        $frasas = Frasa::all();

        return view('admin.frasa.tugas-frasa.create', compact('tugasFrasa', 'frasas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasFrasaRequest $request): RedirectResponse
    {
        TugasFrasa::create($request->validated());

        return Redirect::route('tugas-frasas.index')
            ->with('success', 'TugasFrasa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tugasFrasa = TugasFrasa::find($id);

        return view('admin.frasa.tugas-frasa.show', compact('tugasFrasa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tugasFrasa = TugasFrasa::find($id);
        $frasas = Frasa::all();

        return view('admin.frasa.tugas-frasa.edit', compact('tugasFrasa', 'frasas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasFrasaRequest $request, TugasFrasa $tugasFrasa): RedirectResponse
    {
        $tugasFrasa->update($request->validated());

        return Redirect::route('tugas-frasas.index')
            ->with('success', 'TugasFrasa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TugasFrasa::find($id)->delete();

        return Redirect::route('tugas-frasas.index')
            ->with('success', 'TugasFrasa deleted successfully');
    }
}

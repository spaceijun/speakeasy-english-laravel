<?php

namespace App\Http\Controllers;

use App\Models\DetailFrasa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetailFrasaRequest;
use App\Models\Frasa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetailFrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detailFrasas = DetailFrasa::with('frasa')->paginate();

        return view('admin.detail-frasa.index', compact('detailFrasas'))
            ->with('i', ($request->input('page', 1) - 1) * $detailFrasas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detailFrasa = new DetailFrasa();
        $frasas = Frasa::all();
        return view('admin.detail-frasa.create', compact('detailFrasa', 'frasas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailFrasaRequest $request): RedirectResponse
    {
        DetailFrasa::create($request->validated());

        return Redirect::route('detail-frasas.index')
            ->with('success', 'DetailFrasa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detailFrasa = DetailFrasa::find($id);

        return view('admin.detail-frasa.show', compact('detailFrasa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detailFrasa = DetailFrasa::find($id);
        $frasas = Frasa::all();

        return view('admin.detail-frasa.edit', compact('detailFrasa', 'frasas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailFrasaRequest $request, DetailFrasa $detailFrasa): RedirectResponse
    {
        $detailFrasa->update($request->validated());

        return Redirect::route('detail-frasas.index')
            ->with('success', 'DetailFrasa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetailFrasa::find($id)->delete();

        return Redirect::route('detail-frasas.index')
            ->with('success', 'DetailFrasa deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DetailHafalan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetailHafalanRequest;
use App\Models\Hafalan;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetailHafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detailHafalans = DetailHafalan::with('hafalan')->paginate();

        return view('admin.detail-hafalan.index', compact('detailHafalans'))
            ->with('i', ($request->input('page', 1) - 1) * $detailHafalans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detailHafalan = new DetailHafalan();
        $hafalans = Hafalan::all();
        return view('admin.detail-hafalan.create', compact('detailHafalan', 'hafalans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailHafalanRequest $request): RedirectResponse
    {
        DetailHafalan::create($request->validated());

        return Redirect::route('detail-hafalans.index')
            ->with('success', 'DetailHafalan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detailHafalan = DetailHafalan::find($id);

        return view('admin.detail-hafalan.show', compact('detailHafalan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detailHafalan = DetailHafalan::find($id);

        return view('admin.detail-hafalan.edit', compact('detailHafalan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailHafalanRequest $request, DetailHafalan $detailHafalan): RedirectResponse
    {
        $detailHafalan->update($request->validated());

        return Redirect::route('detail-hafalans.index')
            ->with('success', 'DetailHafalan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetailHafalan::find($id)->delete();

        return Redirect::route('detail-hafalans.index')
            ->with('success', 'DetailHafalan deleted successfully');
    }
}

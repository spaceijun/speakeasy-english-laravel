<?php

namespace App\Http\Controllers;

use App\Models\DetailIdiom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetailIdiomRequest;
use App\Models\Idiom;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetailIdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detailIdioms = DetailIdiom::with('idiom')->paginate();

        return view('admin.detail-idiom.index', compact('detailIdioms'))
            ->with('i', ($request->input('page', 1) - 1) * $detailIdioms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detailIdiom = new DetailIdiom();
        $idioms = Idiom::all();
        return view('admin.detail-idiom.create', compact('detailIdiom', 'idioms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailIdiomRequest $request): RedirectResponse
    {
        DetailIdiom::create($request->validated());

        return Redirect::route('detail-idioms.index')
            ->with('success', 'DetailIdiom created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detailIdiom = DetailIdiom::find($id);

        return view('admin.detail-idiom.show', compact('detailIdiom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detailIdiom = DetailIdiom::find($id);
        $idioms = Idiom::all();
        return view('admin.detail-idiom.edit', compact('detailIdiom', 'idioms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailIdiomRequest $request, DetailIdiom $detailIdiom): RedirectResponse
    {
        $detailIdiom->update($request->validated());

        return Redirect::route('detail-idioms.index')
            ->with('success', 'DetailIdiom updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetailIdiom::find($id)->delete();

        return Redirect::route('detail-idioms.index')
            ->with('success', 'DetailIdiom deleted successfully');
    }
}

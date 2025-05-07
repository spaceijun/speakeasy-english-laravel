<?php

namespace App\Http\Controllers;

use App\Models\TugasIdiom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TugasIdiomRequest;
use App\Models\Idiom;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TugasIdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tugasIdioms = TugasIdiom::with('idiom')->paginate();

        return view('admin.idiom.tugas-idiom.index', compact('tugasIdioms'))
            ->with('i', ($request->input('page', 1) - 1) * $tugasIdioms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tugasIdiom = new TugasIdiom();
        $idioms = Idiom::all();

        return view('admin.idiom.tugas-idiom.create', compact('tugasIdiom', 'idioms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasIdiomRequest $request): RedirectResponse
    {
        TugasIdiom::create($request->validated());

        return Redirect::route('tugas-idioms.index')
            ->with('success', 'TugasIdiom created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tugasIdiom = TugasIdiom::find($id);

        return view('admin.idiom.tugas-idiom.show', compact('tugasIdiom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tugasIdiom = TugasIdiom::find($id);

        return view('admin.idiom.tugas-idiom.edit', compact('tugasIdiom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasIdiomRequest $request, TugasIdiom $tugasIdiom): RedirectResponse
    {
        $tugasIdiom->update($request->validated());

        return Redirect::route('tugas-idioms.index')
            ->with('success', 'TugasIdiom updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TugasIdiom::find($id)->delete();

        return Redirect::route('tugas-idioms.index')
            ->with('success', 'TugasIdiom deleted successfully');
    }
}

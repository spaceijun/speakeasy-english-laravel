<?php

namespace App\Http\Controllers;

use App\Models\TugasKosakata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TugasKosakataRequest;
use App\Models\Kosakata;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TugasKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tugasKosakatas = TugasKosakata::with('kosakata')->paginate();

        return view('admin.kosakata.tugas-kosakata.index', compact('tugasKosakatas'))
            ->with('i', ($request->input('page', 1) - 1) * $tugasKosakatas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tugasKosakata = new TugasKosakata();
        $kosakatas = Kosakata::all();

        return view('admin.kosakata.tugas-kosakata.create', compact('tugasKosakata', 'kosakatas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TugasKosakataRequest $request): RedirectResponse
    {
        TugasKosakata::create($request->validated());

        return Redirect::route('tugas-kosakatas.index')
            ->with('success', 'TugasKosakata created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tugasKosakata = TugasKosakata::find($id);

        return view('admin.kosakata.tugas-kosakata.show', compact('tugasKosakata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tugasKosakata = TugasKosakata::find($id);

        return view('admin.kosakata.tugas-kosakata.edit', compact('tugasKosakata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TugasKosakataRequest $request, TugasKosakata $tugasKosakata): RedirectResponse
    {
        $tugasKosakata->update($request->validated());

        return Redirect::route('tugas-kosakatas.index')
            ->with('success', 'TugasKosakata updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TugasKosakata::find($id)->delete();

        return Redirect::route('tugas-kosakatas.index')
            ->with('success', 'TugasKosakata deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\JawabanIdiom;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanIdiomRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JawabanIdiomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanIdioms = JawabanIdiom::with('tugasIdiom', 'user')->paginate();

        return view('admin.idiom.jawaban-idiom.index', compact('jawabanIdioms'))
            ->with('i', ($request->input('page', 1) - 1) * $jawabanIdioms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tugas_idiom_id): View
    {
        $jawabanIdiom = new JawabanIdiom(['tugas_idiom_id' => $tugas_idiom_id]);

        return view('admin.idiom.jawaban-idiom.create', compact('jawabanIdiom'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanIdiomRequest $request): RedirectResponse
    {
        JawabanIdiom::create($request->validated());

        return Redirect::route('jawaban.idioms.index')
            ->with('success', 'JawabanIdiom created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanIdiom = JawabanIdiom::find($id);

        return view('admin.idiom.jawaban-idiom.show', compact('jawabanIdiom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanIdiom = JawabanIdiom::find($id);

        return view('jawaban.idioms.edit', compact('jawabanIdiom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanIdiomRequest $request, JawabanIdiom $jawabanIdiom): RedirectResponse
    {
        $jawabanIdiom->update($request->validated());
        $jawabanIdiom->update($request->all());

        // set status
        $jawabanIdiom->status = "Sudah Dikoreksi";
        $jawabanIdiom->save();

        return Redirect::route('jawaban.idioms.index')
            ->with('success', 'JawabanIdiom updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        JawabanIdiom::find($id)->delete();

        return Redirect::route('jawaban.idioms.index')
            ->with('success', 'JawabanIdiom deleted successfully');
    }
}

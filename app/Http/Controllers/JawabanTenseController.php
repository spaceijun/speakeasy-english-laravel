<?php

namespace App\Http\Controllers;

use App\Models\JawabanTense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanTenseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JawabanTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanTenses = JawabanTense::with('tugasTense', 'user')->paginate();

        return view('admin.detail-tense.jawaban-tense.index', compact('jawabanTenses'))
            ->with('i', ($request->input('page', 1) - 1) * $jawabanTenses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tugas_tense_id): View
    {
        $jawabanTense = new JawabanTense(['tugas_tenses_id' => $tugas_tense_id]);

        return view('admin.detail-tense.jawaban-tense.create', compact('jawabanTense'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanTenseRequest $request): RedirectResponse
    {
        JawabanTense::create($request->validated());

        return Redirect::route('jawaban.tenses.index')
            ->with('success', 'JawabanTense created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanTense = JawabanTense::find($id);

        return view('admin.detail-tense.jawaban-tense.show', compact('jawabanTense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanTense = JawabanTense::find($id);

        return view('admin.detail-tense.jawaban-tense.edit', compact('jawabanTense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanTenseRequest $request, JawabanTense $jawabanTense): RedirectResponse
    {
        $jawabanTense->update($request->validated());
        $jawabanTense->update($request->all());

        // set status
        $jawabanTense->status = "Sudah Dikoreksi";
        $jawabanTense->save();

        return Redirect::route('jawaban.tenses.index')
            ->with('success', 'JawabanTense updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        JawabanTense::find($id)->delete();

        return Redirect::route('jawaban.tenses.index')
            ->with('success', 'JawabanTense deleted successfully');
    }
}

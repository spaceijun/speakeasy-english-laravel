<?php

namespace App\Http\Controllers;

use App\Models\MateriTense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MateriTenseRequest;
use App\Models\DetailTense;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MateriTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $materiTenses = MateriTense::with('detailTense')->paginate();

        return view('admin.materi-tense.index', compact('materiTenses'))
            ->with('i', ($request->input('page', 1) - 1) * $materiTenses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $materiTense = new MateriTense();
        $detailTenses = DetailTense::all();

        // Filter detail_tenses_id yang sudah dipilih derr
        $selectedDetailTensesId = MateriTense::pluck('detail_tenses_id')->toArray();
        $availableDetailTenses = $detailTenses->whereNotIn('id', $selectedDetailTensesId);


        return view('admin.materi-tense.create', compact('materiTense', 'availableDetailTenses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriTenseRequest $request): RedirectResponse
    {
        MateriTense::create($request->validated());

        return Redirect::route('materi-tenses.index')
            ->with('success', 'MateriTense created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $materiTense = MateriTense::find($id);

        return view('admin.materi-tense.show', compact('materiTense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $materiTense = MateriTense::find($id);
        $detailTenses = DetailTense::all();

        // Filter detail_tenses_id yang sudah dipilih derr
        $selectedDetailTensesId = MateriTense::pluck('detail_tenses_id')->toArray();
        $availableDetailTenses = $detailTenses->whereNotIn('id', $selectedDetailTensesId);


        return view('admin.materi-tense.edit', compact('materiTense', 'availableDetailTenses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriTenseRequest $request, MateriTense $materiTense): RedirectResponse
    {
        $materiTense->update($request->validated());

        return Redirect::route('materi-tenses.index')
            ->with('success', 'MateriTense updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MateriTense::find($id)->delete();

        return Redirect::route('materi-tenses.index')
            ->with('success', 'MateriTense deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DetailTense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DetailTenseRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DetailTenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $detailTenses = DetailTense::paginate();

        return view('admin.detail-tense.index', compact('detailTenses'))
            ->with('i', ($request->input('page', 1) - 1) * $detailTenses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $detailTense = new DetailTense();

        return view('admin.detail-tense.create', compact('detailTense'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DetailTenseRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/tenses'), $filename);
            $data['images'] = $filename;
        }

        DetailTense::create($data);

        return redirect()->route('detail-tenses.index')
            ->with('success', 'Tenses created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $detailTense = DetailTense::find($id);

        return view('admin.detail-tense.show', compact('detailTense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $detailTense = DetailTense::find($id);

        return view('admin.detail-tense.edit', compact('detailTense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DetailTenseRequest $request, DetailTense $detailTense): RedirectResponse
    {
        $detailTense->update($request->validated());

        return Redirect::route('detail-tenses.index')
            ->with('success', 'DetailTense updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DetailTense::find($id)->delete();

        return Redirect::route('detail-tenses.index')
            ->with('success', 'DetailTense deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\JawabanFrasa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanFrasaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JawabanFrasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanFrasas = JawabanFrasa::with('tugasFrasa', 'user')->paginate();

        return view('admin.frasa.jawaban-frasa.index', compact('jawabanFrasas'))
            ->with('i', ($request->input('page', 1) - 1) * $jawabanFrasas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tugas_frasa_id): View
    {
        $jawabanFrasa = new JawabanFrasa(['tugas_frasa_id' => $tugas_frasa_id]);

        return view('admin.frasa.jawaban-frasa.create', compact('jawabanFrasa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanFrasaRequest $request): RedirectResponse
    {
        JawabanFrasa::create($request->validated());

        return Redirect::route('jawaban.frasa.index')
            ->with('success', 'JawabanFrasa created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanFrasa = JawabanFrasa::find($id);

        return view('admin.frasa.jawaban-frasa.show', compact('jawabanFrasa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanFrasa = JawabanFrasa::find($id);

        return view('jawaban.frasa.edit', compact('jawabanFrasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanFrasaRequest $request, JawabanFrasa $jawabanFrasa): RedirectResponse
    {
        $jawabanFrasa->update($request->validated());
        $jawabanFrasa->update($request->all());

        // set status
        $jawabanFrasa->status = "Sudah Dikoreksi";
        $jawabanFrasa->save();

        return Redirect::route('jawaban.frasa.index')
            ->with('success', 'JawabanFrasa updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        JawabanFrasa::find($id)->delete();

        return Redirect::route('jawaban.frasa.index')
            ->with('success', 'JawabanFrasa deleted successfully');
    }
}

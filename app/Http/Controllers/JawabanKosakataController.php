<?php

namespace App\Http\Controllers;

use App\Models\JawabanKosakata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\JawabanKosakataRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class JawabanKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $jawabanKosakatas = JawabanKosakata::with('tugasKosakata', 'user')->paginate();

        return view('admin.kosakata.jawaban-kosakata.index', compact('jawabanKosakatas'))
            ->with('i', ($request->input('page', 1) - 1) * $jawabanKosakatas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tugas_kosakatas_id): View
    {
        $jawabanKosakata = new JawabanKosakata(['tugas_kosakatas_id' => $tugas_kosakatas_id]);

        return view('admin.kosakata.jawaban-kosakata.create', compact('jawabanKosakata'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JawabanKosakataRequest $request): RedirectResponse
    {
        JawabanKosakata::create($request->validated());

        return Redirect::route('jawaban.kosakatas.index')
            ->with('success', 'JawabanKosakata created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $jawabanKosakata = JawabanKosakata::find($id);

        return view('admin.kosakata.jawaban-kosakata.show', compact('jawabanKosakata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $jawabanKosakata = JawabanKosakata::find($id);

        return view('admin.kosakata.jawaban-kosakata.edit', compact('jawabanKosakata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JawabanKosakataRequest $request, JawabanKosakata $jawabanKosakata): RedirectResponse
    {
        $jawabanKosakata->update($request->validated());
        $jawabanKosakata->update($request->all());

        // set status
        $jawabanKosakata->status = "Sudah Dikoreksi";
        $jawabanKosakata->save();

        return Redirect::route('jawaban.kosakatas.index')
            ->with('success', 'JawabanKosakata updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        JawabanKosakata::find($id)->delete();

        return Redirect::route('jawaban.kosakatas.index')
            ->with('success', 'JawabanKosakata deleted successfully');
    }
}

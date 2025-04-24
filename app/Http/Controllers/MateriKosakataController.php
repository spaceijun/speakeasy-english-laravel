<?php

namespace App\Http\Controllers;

use App\Models\MateriKosakata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\MateriKosakataRequest;
use App\Models\Kosakata;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class MateriKosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $materiKosakatas = MateriKosakata::with('kosakata')->paginate();

        return view('admin.materi-kosakata.index', compact('materiKosakatas'))
            ->with('i', ($request->input('page', 1) - 1) * $materiKosakatas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $materiKosakata = new MateriKosakata();
        $kosakatas = Kosakata::all();

        $selectedMateriKosakataId = MateriKosakata::pluck('kosakatas_id')->toArray();
        $availableMateriKosakata = $kosakatas->whereNotIn('id', $selectedMateriKosakataId);


        return view('admin.materi-kosakata.create', compact('materiKosakata', 'availableMateriKosakata'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MateriKosakataRequest $request): RedirectResponse
    {
        MateriKosakata::create($request->validated());

        return Redirect::route('materi-kosakatas.index')
            ->with('success', 'MateriKosakata created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $materiKosakata = MateriKosakata::find($id);

        return view('admin.materi-kosakata.show', compact('materiKosakata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $materiKosakata = MateriKosakata::find($id);

        return view('materi-kosakata.edit', compact('materiKosakata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MateriKosakataRequest $request, MateriKosakata $materiKosakata): RedirectResponse
    {
        $materiKosakata->update($request->validated());

        return Redirect::route('materi-kosakatas.index')
            ->with('success', 'MateriKosakata updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        MateriKosakata::find($id)->delete();

        return Redirect::route('materi-kosakatas.index')
            ->with('success', 'MateriKosakata deleted successfully');
    }
}

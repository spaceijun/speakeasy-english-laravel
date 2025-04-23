<?php

namespace App\Http\Controllers;

use App\Models\Hafalan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\HafalanRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class HafalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $hafalans = Hafalan::with('category')->paginate();
        $categories = Category::all();

        return view('admin.hafalan.index', compact('hafalans', 'categories'))
            ->with('i', ($request->input('page', 1) - 1) * $hafalans->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $hafalan = new Hafalan();
        $categories = Category::where('name', 'hafalan')->get();
        return view('admin.hafalan.create', compact('hafalan', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HafalanRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/hafalan', $filename);
            $data['images'] = $filename;
        }

        Hafalan::create($data);

        return redirect()->route('hafalans.index')
            ->with('success', 'Hafalan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $hafalan = Hafalan::find($id);

        return view('hafalan.show', compact('hafalan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $hafalan = Hafalan::find($id);
        $categories = Category::where('name', 'hafalan')->get();

        return view('admin.hafalan.edit', compact('hafalan', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HafalanRequest $request, Hafalan $hafalan): RedirectResponse
    {
        $hafalan->update($request->validated());

        return Redirect::route('hafalans.index')
            ->with('success', 'Hafalan updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Hafalan::find($id)->delete();

        return Redirect::route('hafalans.index')
            ->with('success', 'Hafalan deleted successfully');
    }
}

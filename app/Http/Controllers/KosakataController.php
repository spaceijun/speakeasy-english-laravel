<?php

namespace App\Http\Controllers;

use App\Models\Kosakata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\KosakataRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class KosakataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $kosakatas = Kosakata::with('category')->paginate();

        return view('admin.kosakata.index', compact('kosakatas'))
            ->with('i', ($request->input('page', 1) - 1) * $kosakatas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $kosakata = new Kosakata();
        $categories = Category::where('name', 'kosakata')->get();


        return view('admin.kosakata.create', compact('kosakata', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KosakataRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/kosakata', $filename);
            $data['images'] = $filename;
        }

        Kosakata::create($data);

        return redirect()->route('kosakata.index')
            ->with('success', 'Kosakata created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $kosakata = Kosakata::find($id);

        return view('admin.kosakata.show', compact('kosakata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $kosakata = Kosakata::find($id);

        return view('admin.kosakata.edit', compact('kosakata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KosakataRequest $request, Kosakata $kosakata): RedirectResponse
    {
        $kosakata->update($request->validated());

        return Redirect::route('kosakatas.index')
            ->with('success', 'Kosakata updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Kosakata::find($id)->delete();

        return Redirect::route('kosakatas.index')
            ->with('success', 'Kosakata deleted successfully');
    }
}

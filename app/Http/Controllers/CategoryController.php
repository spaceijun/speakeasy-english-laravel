<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $categories = Category::paginate();

        return view('admin.category.index', compact('categories'))
            ->with('i', ($request->input('page', 1) - 1) * $categories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = new Category();

        return view('admin.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request): RedirectResponse
    {
        $data = $request->validated();


        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/category', $filename);
            $data['images'] = $filename;
        }

        Category::create($data);

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $category = Category::find($id);

        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $category = Category::find($id);

        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category): RedirectResponse
    {
        $category->update($request->validated());

        return Redirect::route('categories.index')
            ->with('success', 'Category updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Category::find($id)->delete();

        return Redirect::route('categories.index')
            ->with('success', 'Category deleted successfully');
    }
}

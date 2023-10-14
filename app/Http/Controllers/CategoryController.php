<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $queryCategories = Category::orderBy('created_at', 'DESC');
        $search = $request->input('search');
        if (!empty($search)) {
            $queryCategories->where('name', 'like', '%' . $search . '%');
        }
        $categories = $queryCategories->get();
        return view('categories.index', compact('categories'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('categories.create', compact('categories'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories')->with('success', 'Berhasil menambah kategori');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
  
        $category->update($request->all());
  
        return redirect()->route('categories')->with('success', 'Berhasil mengupdate kategori');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
  
        $category->delete();
  
        return redirect()->route('categories')->with('success', 'Berhasil menghapus kategori');
    }
}
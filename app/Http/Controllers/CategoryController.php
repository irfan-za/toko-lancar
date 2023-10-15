<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
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
  
    public function create()
    {
        $categories = Category::all(); 
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Category::create($request->all());
        return redirect()->route('categories')->with('success', 'Berhasil menambah kategori');
    }
  
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }
  
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);
  
        $category->update($request->all());
  
        return redirect()->route('categories')->with('success', 'Berhasil mengupdate kategori');
    }
    
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
  
        $category->delete();
  
        return redirect()->route('categories')->with('success', 'Berhasil menghapus kategori');
    }
}
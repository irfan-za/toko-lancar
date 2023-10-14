<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $queryProducts = Product::orderBy('created_at', 'DESC')->with('category');
        $search = $request->input('search');
        if (!empty($search)) {
            $queryProducts->where('name', 'like', '%' . $search . '%');
        }
        $products = $queryProducts->get();
        return view('products.index', compact('products'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('products.create', compact('categories'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('products')->with('success', 'Berhasil menambah produk');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $category = Category::find($product->category_id);
        return view('products.show', compact('product', 'category'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); 
        return view('products.edit', compact('product', 'categories'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'category_id' => 'required',
            'description' => 'required',
        ]);
        $product = Product::findOrFail($id);
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Berhasil mengupdate produk');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Berhasil menghapus produk');
    }
}
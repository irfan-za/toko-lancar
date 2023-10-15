<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
 
class ProductController extends Controller
{
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
  
    public function create()
    {
        $categories = Category::all(); 
        return view('products.create', compact('categories'));
    }
  
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
  

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $category = Category::find($product->category_id);
        return view('products.show', compact('product', 'category'));
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); 
        return view('products.edit', compact('product', 'categories'));
    }
  
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
  
 
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Berhasil menghapus produk');
    }
}
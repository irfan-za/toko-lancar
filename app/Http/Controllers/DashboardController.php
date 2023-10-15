<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class DashboardController extends Controller
{
    public function index()
    {
        $totalStock = Product::sum('stock');
        $totalProduct = Product::count();
        $totalCategory = Category::count();
        return view('dashboard', compact('totalStock','totalProduct', 'totalCategory'));
    }
    public function api()
    {
        $newestProducts = Product::orderBy('created_at', 'desc')->take(5)->get();
        $categories = Category::withCount('products')->take(3)->get();

        return response()->json([
            'newestProducts' => $newestProducts,
            'categories' => $categories,
        ]);
    }
}

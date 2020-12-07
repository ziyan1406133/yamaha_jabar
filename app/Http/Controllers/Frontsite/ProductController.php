<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $category = Category::with('products')->get();
        return view('pages.frontsite.product.index', compact('category'));
    }

    public function show($id)
    {
        $produk = Product::with('features')->with('colors')->find($id);
        return view('pages.frontsite.product.show', compact('produk'));
    }
}

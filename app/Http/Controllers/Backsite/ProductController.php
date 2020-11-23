<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Product::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.product.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('pages.backsite.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produk = new Product;
        $produk->category_id = $request->category_id;
        $produk->name = $request->name;
        
        $image_name	= time().'_'.rand(100,999).'.png';
        $request->file('cover')->move('public/images/products/cover/', $image_name);
        $produk->cover = 'images/products/cover/'.$image_name;

        $image_name	= time().'_'.rand(100,999).'.png';
        $request->file('slider')->move('public/images/products/slider/', $image_name);
        $produk->slider = 'images/products/slider/'.$image_name;

        $produk->save();

        return redirect()->route('product.show', $produk->id)->with('success', 'Produk berhasil dibuat, silahkan tambahkan fitur dan warna produk');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Product::with('features')->with('colors')->findOrFail($id);
        return view('pages.backsite.product.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $produk = Product::findOrFail($id);
        return view('pages.backsite.product.edit', compact('categories', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = Product::find($id);
        $produk->category_id = $request->category_id;
        $produk->name = $request->name;
        
        if($request->hasFile('cover')) {

            $file = public_path($produk->cover);
            if (file_exists($file)) {
                unlink($file);
            }

            $image_name	= time().'_'.rand(100,999).'.png';
            $request->file('cover')->move('public/images/products/cover/', $image_name);
            $produk->cover = 'images/products/cover/'.$image_name;
        }

        if($request->hasFile('slider')) {

            $file = public_path($produk->slider);
            if (file_exists($file)) {
                unlink($file);
            }

            $image_name	= time().'_'.rand(100,999).'.png';
            $request->file('slider')->move('public/images/products/slider/', $image_name);
            $produk->slider = 'images/products/slider/'.$image_name;
        }
        $produk->save();

        return redirect()->route('product.show', $produk->id)->with('success', 'Produk Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Product::find($id);

        $file = public_path($produk->cover);
        if (file_exists($file)) {
            unlink($file);
        }
        $file = public_path($produk->slider);
        if (file_exists($file)) {
            unlink($file);
        }

        foreach($produk->features as $feature)
        {
            $file = public_path($feature->image);
            if (file_exists($file)) {
                unlink($file);
            }
        }
        foreach($produk->colors as $color)
        {
            $file = public_path($color->image);
            if (file_exists($file)) {
                unlink($file);
            }
        }

        $produk->delete();
        return redirect()->route('product.index')->with('success', 'Produk Berhasil Dihapus');
    }
}

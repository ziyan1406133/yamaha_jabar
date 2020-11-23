<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
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
    
    public function store(Request $request)
    {
        $feature = new Feature;
        $feature->product_id = $request->product_id;

        $image_name	= time().'_'.rand(100,999).'.png';
        $request->file('image')->move('public/images/feature/', $image_name);
        $feature->image = 'images/feature/'.$image_name;

        $feature->name = $request->name;
        $feature->save();

        return redirect()->route('product.show', $request->product_id)->with('success', 'Fitur produk berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $feature = Feature::find($id);
        $product_id = $feature->product_id;
        $file = public_path($feature->image);
        if (file_exists($file)) {
            unlink($file);
        }
        $feature->delete();

        return redirect()->route('product.show', $product_id)->with('success', 'Fitur produk berhasil dihapus');
    }
}

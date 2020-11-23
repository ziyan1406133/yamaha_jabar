<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;

class ColorController extends Controller
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
        $color = new Color;
        $color->product_id = $request->product_id;

        $image_name	= time().'_'.rand(100,999).'.png';
        $request->file('image')->move('public/images/color/', $image_name);
        $color->image = 'images/color/'.$image_name;

        $color->name = $request->name;
        $color->save();

        return redirect()->route('product.show', $request->product_id)->with('success', 'Warna produk berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $color = Color::find($id);
        $product_id = $color->product_id;
        $file = public_path($color->image);
        if (file_exists($file)) {
            unlink($file);
        }
        $color->delete();

        return redirect()->route('product.show', $product_id)->with('success', 'Warna produk berhasil dihapus');
    }
}

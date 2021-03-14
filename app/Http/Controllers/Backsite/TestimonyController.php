<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends Controller
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
        $testimonies = Testimony::orderBy('id', 'desc')->get();
        return view('pages.backsite.testimony.index', compact('testimonies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimony = new Testimony;
        $image_name	= time().'_'.rand(100,999).'.png';
        $request->file('image')->move('public/images/testimonies/', $image_name);
        $testimony->image = 'images/testimonies/'.$image_name;
        $testimony->save();

        return redirect()->route('testimony.index')->with('success', 'Testimoni Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
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
        $testimony = Testimony::findOrFail($id);
        
        if($request->hasFile('image')) {

            if($testimony->image !== null) {
                $file = public_path($testimony->image);
                if (file_exists($file)) {
                    unlink($file);
                }
            }

            $image_name	= time().'_'.rand(100,999).'.png';
            $request->file('image')->move('public/images/testimonies/', $image_name);
            $testimony->image = 'images/testimonies/'.$image_name;
        }

        $testimony->save();

        return redirect()->route('testimony.index')->with('success', 'Testimoni Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimony = Testimony::find($id);

        $file = public_path($testimony->image);
        if(!is_dir($file)){
            if (file_exists($file)) {
                unlink($file);
            }
        }
        
        $testimony->delete();

        return redirect()->route('testimony.index')->with('success', 'Testimoni Berhasil Dihapus');
    }
}

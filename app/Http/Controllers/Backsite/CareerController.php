<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = Career::orderBy('name', 'asc')->get();

        return view('pages.backsite.career.index', compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.backsite.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new Career;
        $career->name = $request->name;
        $career->description = $request->description;
        if($request->is_active == null) {
            $career->is_active = 1;
        } else {
            $career->is_active = $request->is_active;
        }
        $career->save();

        return redirect()->route('career.index')->with('success', 'Career berhasil dibuat');
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
        $career = Career::findOrFail($id);
        return view('pages.backsite.career.edit', compact('career'));
    }

    public function change_status(Request $request)
    {
        $id = $request->career_id;
        $career = Career::find($id);
        $career->is_active = !$career->is_active;
        $career->save();

        $a_href = '<a href="#" id="status_'.$id.'" data-career_id="'.$id.'" class="status">'. isActive($career->is_active).'</a>';

        return $a_href;
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
        $career = Career::findOrFail($id);
        $career->name = $request->name;
        $career->description = $request->description;
        if($request->is_active == null) {
            $career->is_active = 1;
        } else {
            $career->is_active = $request->is_active;
        }
        $career->save();

        return redirect()->route('career.index')->with('success', 'Career berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = Career::findOrFail($id);
        $career->delete();

        return redirect()->route('career.index')->with('success', 'Status berhasil diperbaharui');
    }
}

<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Network;

class NetworkController extends Controller
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
        $regions = Region::orderBy('name', 'asc')->get();
        $network = Network::with('region')->orderBy('name', 'asc')->get();
        
        return view('pages.backsite.partner-network.index', compact('regions', 'network'));
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
        $network = new Network;
        $network->region_id = $request->region_id;
        $network->name = $request->name;
        $network->address = $request->address;
        $network->phone = $request->phone;
        $network->save();

        return redirect()->route('partner-network.index')->with('success', 'Network Berhasil Ditambah');
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
        $network = Network::findOrFail($id);
        $network->region_id = $request->region_id;
        $network->name = $request->name;
        $network->address = $request->address;
        $network->phone = $request->phone;
        $network->save();

        return redirect()->route('partner-network.index')->with('success', 'Network Berhasil Diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $network = Network::find($id);
        $network->delete();

        return redirect()->route('partner-network.index')->with('success', 'Network Berhasil Dihapus');
    }
}

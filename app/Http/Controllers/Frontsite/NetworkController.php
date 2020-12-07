<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class NetworkController extends Controller
{
    public function index()
    {
        $regions = Region::get();
        $region = Region::with('networks')->first();
        return view('pages.frontsite.network.index', compact('region', 'regions'));
    }

    public function show($id)
    {
        $regions = Region::get();
        $region = Region::with('networks')->find($id);
        return view('pages.frontsite.network.index', compact('region', 'regions'));
    }
}

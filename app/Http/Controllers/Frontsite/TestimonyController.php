<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    public function index()
    {
        $testimonies = Testimony::orderBy('id', 'desc')->get()->toArray();
        return view('pages.frontsite.testimony.index', compact('testimonies'));
    }
}

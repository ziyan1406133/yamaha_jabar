<?php

namespace App\Http\Controllers\Frontsite;

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
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $career = Career::where(function($q) use ($keyword) {
            $q->orWhere('name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('description', 'LIKE', '%'.$keyword.'%');
        })->where('is_active', true)->orderBy('name', 'asc')->get();

        return view('pages.frontsite.career.index', compact('career'));
    }
}

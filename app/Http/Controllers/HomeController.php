<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::with('products')->orderBy('name', 'asc')->get();
        return view('pages.frontsite.homepage', compact('categories'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('pages.backsite.dashboard');
    }

    /**
     * Show the application contact_us.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_us()
    {
        return view('pages.frontsite.contact_us');
    }
}

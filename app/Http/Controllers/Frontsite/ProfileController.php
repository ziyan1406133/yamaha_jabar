<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function company()
    {
        return view('pages.frontsite.profile.company');
    }
    
    public function history()
    {
        return view('pages.frontsite.profile.history');
    }
    
    public function visionMission()
    {
        return view('pages.frontsite.profile.vision-mission');
    }
    
    public function awards()
    {
        return view('pages.frontsite.profile.awards');
    }
    
    public function partner()
    {
        return view('pages.frontsite.profile.partner');
    }
}

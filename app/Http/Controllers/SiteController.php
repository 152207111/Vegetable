<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getabout()
    {
        return view('site.aboutus');
    }
    public function getHome()
    {
        return view('site.home');
    }
}
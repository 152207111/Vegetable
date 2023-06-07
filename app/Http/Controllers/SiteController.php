<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function getcategory()
    {
        return view('site.category');
    }
    public function getHome()
    {
        return view('site.home');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function create()
    {
        return view('home.home');
    }

    public function contact()
    {
        return view('home.contact');
    }
}

<?php

namespace App\Http\Controllers;

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function forum()
    {
        return view('forum');
    }
}

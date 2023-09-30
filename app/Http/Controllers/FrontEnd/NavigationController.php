<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

class NavigationController extends Controller
{

    public function home()
    {
        return view('website.home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

}

<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductPageController extends Controller
{

    public function index()
    {
        return view('website.products.index');
    }


    public function details($id)
    {
        return view('website.products.details');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastaringController extends Controller
{
    //frontEnd Home Page
    public function index()
    {
        return view('frontEnd.home.homepage');
    }
    // Product Registration Page
    public function createProduct()
    {
        return view('frontEnd.home.create');
    }

    public function allProduct()
    {
        return view('frontEnd.home.showProduct');
    }
}

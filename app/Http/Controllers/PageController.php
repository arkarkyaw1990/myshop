<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	return view('home.pages.index');
    }
    public function products()
    {
        return view('home.pages.products');
    }
}

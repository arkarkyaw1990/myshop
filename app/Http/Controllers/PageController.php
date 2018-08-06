<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PageController extends Controller
{
    public function index()
    {
        // return view('home.pages.index');
        $client = new Client();
        $response = $client->get('https://myshop.test/api/products?cat=vel');
        dd($response);

        
    }
    public function products()
    {
        return view('home.pages.products');
    }
}

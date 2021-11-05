<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{
    public function httpClent()
    {
        $showAlldata = Http::get('https://jsonplaceholder.typicode.com/posts');
        $showAlldata->json();
    }

    public function httpSinglePost($id)
    {
        $showSingleData = Http::get('https://jsonplaceholder.typicode.com/posts' . $id);
        return $showSingleData->json();
    }
}

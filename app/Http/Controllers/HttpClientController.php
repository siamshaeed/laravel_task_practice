<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HttpClientController extends Controller
{
    public function httpClent()
    {
        $showAlldata = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $showAlldata->json();
    }

    public function addData()
    {
        $addData = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'userId' => '1',
            'title' => 'Test Title',
            'body' => 'Test Body',
        ]);
        return $addData->json();
    }
}

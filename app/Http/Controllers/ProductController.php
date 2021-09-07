<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GrahamCampbell\ResultType\Success;

class ProductController extends Controller
{
    public function newProduct(Request $request){
        DB::table('products')->insert([
            'mname'  => $request->mname,
            'memail'  => $request->memail,
            'mphone'  => $request->mphone,
            'mdepertment'  => $request->mdepertment,
            'gender'  => $request->gender,
        ]);
    }
}
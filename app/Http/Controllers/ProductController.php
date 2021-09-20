<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use GrahamCampbell\ResultType\Success;
use DB;


class ProductController extends Controller
{
    // for data insert
    public function newProduct(Request $request)
    {
        Product::saveProductInfo($request); //connect Product model saveProductInfo function.
        return redirect('all-product')->with('message', 'Product Insert Successfully'); //return all product page
    }

    // for data show
    public function allProduct()
    {
        $products = Product::all();
        return view('frontEnd.home.allProduct', [
            'products' => $products         //data pass by url
        ]);
    }

    public function editProduct($id)
    {
        $products = Product::find($id); //find table row by $id
        return view('frontEnd.home.editProduct', [
            'products' => $products //data pass by url
        ]);
    }

    public function updateProduct(Request $request)
    {
        $product = Product::find($request->id);
        $product->mname = $request->mname;
        $product->memail = $request->memail;
        $product->mphone = $request->mphone;
        $product->mdepertment = $request->mdepertment;
        $product->gender = $request->gender;
        $product->save();
        return redirect('all-product')->with('message', 'Product Edit Successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('all-product')->with('message', 'Product Delete Successfully');
    }


    // Restore soft data

    public function restoreProduct($id)
    {
        $resoreData = Product::all();
        $resoreData->withTrashed($id)->restore();

        return view('frontEnd.home.allProduct', [
            'resoreDatas' => $resoreData
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
class ProductController extends Controller
{
    public function index(){
       $category = category::all();
       $product = product::all();
        return view('product', compact('category','product'));
    }


    public function product_post(Request $request){
        product::create($request->all());
        return redirect()->back();
    }
}

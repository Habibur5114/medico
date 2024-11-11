<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\brand;
use App\Models\category;
class BrandController extends Controller
{
    public function index(){
        $product=product::all();
        $brand=brand::all();
        $category=category::all();
        return view('brand',compact('product','brand','category'));
    }


    public function store(Request $request){

        brand::create([

            'name' => $request->name,
            'product_id' => $request->product_id,
            'category_id' => $request->category_id,
          
    
        ]);

    }

    public function ajax(){
        return view('ajax');
    }

}

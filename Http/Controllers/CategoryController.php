<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;


class CategoryController extends Controller
{
    public function index(){
        $data = category::all();
        return view('category',compact('data'));
    }

   public function store(Request $request){

    $request->validate([
        'name' => 'required|string|max:255', // Ensure 'name' is required and max 255 characters
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ensure an image is required, with valid types and max 2MB
    ]);
    
    $originalName = $request->file('image')->getClientOriginalName();
    $extension = $request->file('image')->getClientOriginalExtension();           
    $newFileName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
    $imagePath = $request->file('image')->storeAs('image', $newFileName, 'public');


    category::create([

        'name' => $request->name,
        'image' => $newFileName,

    ]);
    return redirect()->back()->with('message', 'Added Successfully');

   }

   public function edit($id){
    $edit=category::findOrFail($id);
    return view('edit',compact('edit'));

   }

   public function update(Request $request){

   
    $id=$request->id;

      
     $newFileName="";
    if($request->file('image')){
        $originalName = $request->file('image')->getClientOriginalName();
        $extension = $request->file('image')->getClientOriginalExtension();           
        $newFileName = pathinfo($originalName, PATHINFO_FILENAME) . '_' . time() . '.' . $extension;
        $imagePath = $request->file('image')->storeAs('image', $newFileName, 'public');
    }else{
        $newFileName=$request->old_image;
    }

    category::findOrFail($id)->update([
        'name' => $request->name,
        'image' => $newFileName,
    ]);


   }




    public function product(){
        return view('product');
    }

    public function delete($id){

        category::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Added Successfully');
      }
}

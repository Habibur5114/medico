<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quality;
use DataTables;

class QualityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quality = Quality::all();
        return view('backend.pages.quality.index',compact('quality'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.quality.quality');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $quality = new Quality();
        $quality->name = $request->name;

        if ($request->file('image')) {
            $imageFile = $request->file('image');  // Renaming the file upload variable
            $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/qualityt/';
            $imageFile->move($imagePath, $imageName);

            $quality->image = $imagePath . $imageName;
        }
        $quality->save();
        return redirect()->route('quality')->with('success', 'Quality created successfully.');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $quality = Quality::find($id);
        return view('backend.pages.quality.edit', compact('quality'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,)
    {
        $id =$request->id;

        $quality = Quality::find($id);
        $quality->name = $request->name;

        if ($request->file('image')) {
            $imageFile = $request->file('image');  // Renaming the file upload variable

            if( !is_null($quality->main_img) && file_exists($management->main_img) ){
                unlink($quality->main_img);
             }
            $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/qualityt/';
            $imageFile->move($imagePath, $imageName);

            $quality->image = $imagePath . $imageName;
        }
        $quality->update();
        return redirect()->route('quality')->with('success', 'Quality updated successfully.');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $quality = Quality::find($id);
        $quality->delete();
        return redirect()->route('quality')->with('success', 'Quality deleted successfully.');
    }


    public function status($id){
        $quality = Quality::find($id);
        if($quality->status == 1){
            $quality->status = 0;
        }else{
            $quality->status = 1;
        }
        $quality->update();
        return redirect()->route('quality')->with('success', 'management Status has been changed successfully');
    }





}

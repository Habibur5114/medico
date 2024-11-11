<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shipcountry;

class ShipcountryController extends Controller
{

        public function index()
        {
            $shipcountry = Shipcountry::first();
            return view('backend.pages.ship.index',compact('shipcountry'));
        }


        public function update(Request $request)
         {






            $shipcountry = Shipcountry::first();
            $shipcountry->name =$request->name;
            $shipcountry->title = $request->title;

            if ($request->file('image')) {
                $imageFile = $request->file('image');  // Renaming the file upload variable

                if( !is_null($shipcountry->main_img) && file_exists($shipcountry->main_img) ){
                    unlink($quality->main_img);
                 }
                $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
                $imagePath = 'public/backend/image/ship/';
                $imageFile->move($imagePath, $imageName);

                $shipcountry->image = $imagePath . $imageName;
            }

            $shipcountry->short_title = $request->short_title;

            $shipcountry->update();
            return redirect()->back()->with('success','Ship Country updated successfully');
        }


    }



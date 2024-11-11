<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer ;
use DataTables;



class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footers = Footer::first();
        return view('backend.pages.footer.manage',compact('footers'));
    }



    public function update(Request $request)
    {


        $footer = Footer::first();
        $footer->description = $request->description;
        $footer->save();
        return redirect()->back()->with('success','Footer updated successfully.');

    }

}

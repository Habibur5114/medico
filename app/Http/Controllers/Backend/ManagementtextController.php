<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Managementtext;
use Illuminate\Http\Request;

class ManagementtextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managementtexts = Managementtext::first();
        return view('backend.pages.management_team.managementupdate',compact('managementtexts'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

     $managementtext = Managementtext::first();
     $managementtext->name =$request->name;
     $managementtext->description = $request->description;
     $managementtext->update();

     return redirect()->back()->with('success', 'Management Team Details Updated Successfully');

    }


}

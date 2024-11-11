<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hospital;
use DataTables;


class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hospitals = Hospital::all();
        return view('backend.pages.hospital.index',compact('hospitals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.hospital.hospital');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $hospital = new Hospital();
        $hospital->title = $request->title;
        $hospital->description = $request->description;

        $hospital->save();

        return redirect()->route('hospital')->with('success', 'Hospital created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $edit = Hospital::find($id);
        return view('backend.pages.hospital.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)

    {
        $id=$request->id;

        $hospital = Hospital::find($request->id);
        $hospital->title = $request->title;
        $hospital->description = $request->description;

        $hospital->update();

        return redirect()->route('hospital')->with('success', 'Hospital updated successfully.');
    }


    public function delete($id)
    {
        $hospital = hospital::find($id);
        $hospital->delete();
        return redirect()->route('hospital')->with('success', 'Hospital deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function status($id)
    {
        $hospital = hospital::find($id);
        if($hospital->status == 1){
            $hospital->status = 0;
        }else{
            $hospital->status = 1;
        }
        $hospital->update();
        return redirect()->route('hospital')->with('success', 'Hospital Status has been changed successfully');

    }
}

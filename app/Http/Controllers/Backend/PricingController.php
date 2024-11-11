<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pricing;
use App\Models\Managepricing ;
use DataTables;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricing = Pricing::first();
        return view('backend.pages.pricing.index',compact('pricing'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function update(Request $request)
    {

        $pricing = Pricing ::first();
        $pricing->name = $request->name;
        $pricing->description = $request->description;
        $pricing->save();
        return redirect()->back()->withSuccess('Pricing updated successfully.');


    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show()
    {

        $pricing = Managepricing::all();
        return view('backend.pages.pricing.manage',compact('pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function create()
    {
        return view('backend.pages.pricing.pricing');
    }

    /**
     * Update the specified resource in storage.
     */
    public function store(Request $request)
    {
        $pricing = new  Managepricing();
        $pricing->name = $request->name;
        if ($request->file('image')) {
            $imageFile = $request->file('image');
            $imageName = microtime(true) . '.' .$imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/pricing/';
            $imageFile->move($imagePath, $imageName);

            $pricing->image = $imagePath . $imageName;
        }
        $pricing->save();
        return redirect()->route('pricing.show')->withSuccess('Pricing created successfully.');
    }




    public function edit($id)
    {
        $pricing = Managepricing::find($id);
        return view('backend.pages.pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatet(Request $request){

        $id =$request->id;
        $pricing = ManagePricing::find($id);
        $pricing->name = $request->name;
        $pricing->name = $request->name;
        if ($request->file('image')) {
            $imageFile = $request->file('image');
            $imageName = microtime(true) . '.' .$imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/pricing/';
            $imageFile->move($imagePath, $imageName);

            $pricing->image = $imagePath . $imageName;
        }
        $pricing->save();
        return redirect()->route('pricing.show')->withSuccess('Pricing updated successfully.');

    }



    public function delete($id){
        $pricing = ManagePricing::find($id);
        $pricing->delete();
        return redirect()->route('pricing.show')->withSuccess('Pricing deleted successfully.');
    }
}

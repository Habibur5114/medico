<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qualitytext;
use DataTables;

class QualitytextController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qualitytexts = Qualitytext::first();
        return view('backend.pages.quality.qualityupdate',compact('qualitytexts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function update(Request $request)
    {
       /// dd($request->all());

        $shipcountry = Shipcountry::first();
        $shipcountry->name = $request->name;
        $shipcountry->title = $request->title;
        $shipcountry->short_title = $request->short_title;
        $shipcountry->image = $request->image;
        $shipcountry->save(); // Use save() instead of update() here.

        return redirect()->back()->with('success', 'Ship Country updated successfully');
    }

}

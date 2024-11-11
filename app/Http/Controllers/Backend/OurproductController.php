<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ourproduct;
use DataTables;

class OurproductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourproduct = Ourproduct::first();
        return view('backend.pages.product.index',compact('ourproduct'));
    }


    public function update(Request $request)
    {

        $ourproduct = Ourproduct::first();
        $ourproduct->name =$request->name;
        $ourproduct->description =$request->description;
        $ourproduct->update();
        return back()->with('success', 'Product updated successfully.');

    }

}

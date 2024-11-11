<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productdetalis;
use DataTables;

class ProductdetalisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productDetails = Productdetalis::all();
        return view('backend.pages.products_details.index',compact('productDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.products_details.products');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $Productdetalis = new Productdetalis();
        $Productdetalis->name = $request->name;

        if ($request->file('image')) {
            $imageFile = $request->file('image');

            // if( !is_null($Productdetalis->main_img) && file_exists($Productdetalis->main_img) ){
            //     unlink($Productdetalis->main_img);
            //  }
            $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/products/';
            $imageFile->move($imagePath, $imageName);

            $Productdetalis->image = $imagePath . $imageName;
        }
        $Productdetalis->description = $request->description;
        $Productdetalis->descriptiontwo = $request->descriptiontwo;
        $Productdetalis->save();
        return redirect()->route('product.detalis')->with('success', 'Product has been added successfully.');
    }

    public function status($id){
        $Productdetalis =  Productdetalis::find($id);
        if($Productdetalis->status == 1){
            $Productdetalis->status = 0;
        }else{
            $Productdetalis->status = 1;
        }
        $Productdetalis->update();
        return redirect()->route('product.detalis')->with('success', 'Status has been updated successfully.');
    }



    public function show($id)
    {
        $show =  Productdetalis ::find($id);
        return view('backend.pages.products_details.edit',compact('show'));
    }

    public function update(Request $request)
    {

      $id =$request->id;
      $Productdetalis = Productdetalis::find($id);
      $Productdetalis->name = $request->name;

      if ($request->file('image')) {
        $imageFile = $request->file('image');

        if( !is_null($Productdetalis->main_img) && file_exists($Productdetalis->main_img) ){
            unlink($Productdetalis->main_img);
         }
        $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
        $imagePath = 'public/backend/image/products/';
        $imageFile->move($imagePath, $imageName);

        $Productdetalis->image = $imagePath . $imageName;
    }
    $Productdetalis->description = $request->description;
    $Productdetalis->descriptiontwo = $request->descriptiontwo;
    $Productdetalis->update();
    return redirect()->route('product.detalis')->with('success', 'Product has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
     $Productdetalis = Productdetalis::find($id);

     if( !is_null($Productdetalis->main_img) && file_exists($Productdetalis->main_img) ){
         unlink($Productdetalis->main_img);
     }
     $Productdetalis->delete();
     return redirect()->route('product.detalis')->with('success', 'Product has been deleted successfully.');
    }
}

<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Management;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managements = Management::all();
        return view('backend.pages.management_team.index',compact('managements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.pages.management_team.management');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $management = new Management();
        $management->name = $request->name;
        $management->description = $request->description;

        if ($request->file('image')) {
            $imageFile = $request->file('image');  // Renaming the file upload variable
            $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/management/';
            $imageFile->move($imagePath, $imageName);

            $management->image = $imagePath . $imageName;
        }

        $management->save();

        return redirect()->route('management')->with('success', 'Management Team Member Added Successfully');
    }


    /**
     * Display the specified resource.
     */
    public function edit($id)

    {
        $edit = Management::find($id);
        return view('backend.pages.management_team.edit',compact('edit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request)
    {
        $id=$request->id;


        $management = Management::find($request->id);
        $management->name = $request->name;
        $management->description = $request->description;

        if ($request->file('image')) {
            $imageFile = $request->file('image');  // Renaming the file upload variable

            if( !is_null($management->main_img) && file_exists($management->main_img) ){
                unlink($management->main_img);
             }
            $imageName = microtime(true) . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = 'public/backend/image/management/';
            $imageFile->move($imagePath, $imageName);

            $management->image = $imagePath . $imageName;
        }

        $management->update();

        return redirect()->route('management')->with('success', 'Management Team Member Added Successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function delete($id)
    {
        $management = Management::find($id);
        $management->delete();
        return redirect()->route('management')->with('success', 'Management deleted successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function status($id)
    {
        $management = Management::find($id);
        if($management->status == 1){
            $management->status = 0;
        }else{
            $management->status = 1;
        }
        $management->update();
        return redirect()->route('management')->with('success', 'management Status has been changed successfully');

    }
}

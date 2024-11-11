<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\MeetUs;
use DataTables;

class MeetUsController extends Controller
{
          /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.meet_us.index');
    }

    public function getData(Request $request)
    {
        $meetUs = MeetUs::all();

        // dd($categories);

        return DataTables::of($meetUs)
             ->addIndexColumn()
             ->addColumn('image', function ($meetUs) {
                return '<img src="'. asset($meetUs->image) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('status', function ($meetUs) {
                if ($meetUs->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$meetUs->id.'" data-status="'.$meetUs->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$meetUs->id.'" data-status="'.$meetUs->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($meetUs) {
                return '
                <div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $meetUs->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $meetUs->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['image', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $meet = new MeetUs();

        $meet->title                       = $request->title;
        $meet->slug                        = Str::slug($request->title);
        $meet->address                     = $request->address;
        $meet->status                      = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/meet-us/';
            $image->move($imagePath, $imageName);

            $meet->image   = $imagePath . $imageName;
        }

        $meet->save();

        return response()->json(['message' => 'Successfully Meet Us Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminMeetUsStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = MeetUs::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $meet = MeetUs::find($id);
        return response()->json(['success' => $meet]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $meet = MeetUs::find($id);

        $meet->title                       = $request->title;
        $meet->slug                        = Str::slug($request->title);
        $meet->address                     = $request->address;
        $meet->status                      = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($meet->image) && file_exists($meet->image) ){
                unlink($meet->image);
             }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/meet-us/';
            $image->move($imagePath, $imageName);

            $meet->image   = $imagePath . $imageName;
        }

        $meet->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $meet = MeetUs::find($id);

        if ( !is_null($meet->image) ) {
            if (file_exists($meet->image)) {
                unlink($meet->image);
            }
        }

        $meet->delete();

        return response()->json(['message' => 'Meet Us has been deleted.'], 200);
    }
}

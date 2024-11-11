<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use DataTables;

class TestimonialController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.testimonial.index');
    }

    public function getData(Request $request)
    {
        $testimonials = Testimonial::all();

        // dd($categories);

        return DataTables::of($testimonials)
             ->addIndexColumn()
             ->addColumn('status', function ($testimonial) {
                if ($testimonial->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$testimonial->id.'" data-status="'.$testimonial->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$testimonial->id.'" data-status="'.$testimonial->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($testimonial) {
                return '
                <div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $testimonial->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $testimonial->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })
            ->rawColumns(['status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $testimonial = new Testimonial();

        $testimonial->title                       = $request->title;
        $testimonial->description                 = $request->description;
        $testimonial->status                      = $request->status;

        $testimonial->save();

        return response()->json(['message' => 'Successfully Testimonial Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminTestimonialStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Testimonial::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $testimonial = Testimonial::find($id);
        return response()->json(['success' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $testimonial = Testimonial::find($id);

        $testimonial->title                       = $request->title;
        $testimonial->description                 = $request->description;
        $testimonial->status                      = $request->status;

        $testimonial->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial = Testimonial::find($id);

        $testimonial->delete();

        return response()->json(['message' => 'Testimonial has been deleted.'], 200);
    }
}

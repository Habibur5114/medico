<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Project;
use App\Models\PricePlan;
use DataTables;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.service.index');
    }

    public function getData(Request $request)
    {
        $services = Service::all();
        // dd($categories);

        return DataTables::of( $services )
             ->addIndexColumn()
             ->addColumn('service_img', function ($service) {
                return '<img src="'. asset($service->service_img) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('rating', function ($service) {
                return '<span class="badge rounded-pill bg-warning">'. $service->ratings .'<i class="bx bxs-star" style="font-size: 12px; margin-left: 4px;"></i></span> ';
             })
             ->addColumn('pricing_add', function ($service) {
                 return '<a href="pricing/'. $service->id .'" class="btn btn-primary">Add</a>';
            })
             ->addColumn('project_add', function ($service) {
                 return '<a href="projects/'. $service->id .'" class="btn btn-primary">Add</a>';
            })
             ->addColumn('service_info', function ($service) {
                 return '<a href="service-infos/'. $service->id .'" class="btn btn-primary">Add</a>';
            })
            ->addColumn('status', function ($service) {
                if ($service->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$service->id.'" data-status="'.$service->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$service->id.'" data-status="'.$service->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($service) {
                return '
                <div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $service->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $service->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })

            ->rawColumns(['service_img', 'rating', 'status', 'pricing_add', 'project_add', 'service_info','action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $service = new Service();

        $service->title           = $request->title;
        $service->ratings         = $request->ratings;
        $service->whatsapp        = $request->whatsapp;
        $service->status          = $request->status;

        if( $request->file('service_img') ){
            $service_img = $request->file('service_img');

            $imageName          = microtime('.') . '.' . $service_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/service/';
            $service_img->move($imagePath, $imageName);

            $service->service_img   = $imagePath . $imageName;
        }

        $service->save();

        return response()->json(['message' => 'successfully Service Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminServiceStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Service::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return response()->json(['success' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $service = Service::find($id);

        $service->title           = $request->title;
        $service->ratings         = $request->ratings;
        $service->whatsapp        = $request->whatsapp;
        $service->status          = $request->status;

        if( $request->file('service_img') ){
            $service_img = $request->file('service_img');

            if( !is_null($service->service_img) && file_exists($service->service_img) ){
                unlink($service->service_img);
             }

            $imageName          = microtime('.') . '.' . $service_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/service/';
            $service_img->move($imagePath, $imageName);

            $service->service_img   = $imagePath . $imageName;
        }

        $service->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);

        if ( !is_null($service->service_img) ) {
            if (file_exists($service->service_img)) {
                unlink($service->service_img);
            }
        }

        $service->delete();

        return response()->json(['message' => 'Service has been deleted.'], 200);
    }


}

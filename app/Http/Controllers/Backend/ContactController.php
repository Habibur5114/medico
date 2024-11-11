<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use DataTables;

class ContactController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.contact.index');
    }

    public function getData(Request $request)
    {
        $contacts = Contact::all();

        // dd($categories);

        return DataTables::of($contacts)
             ->addIndexColumn()
             ->addColumn('name', function ($contact) {
                return '<span class="badge bg-label-info">'. $contact->name .'</span>';
             })
             ->addColumn('status', function ($contact) {
                if ($contact->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$contact->id.'" data-status="'.$contact->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$contact->id.'" data-status="'.$contact->status.'">Deactive</span>';
                }
            })

            ->rawColumns(['name', 'status'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $contact = new Contact();

        $contact->name                  = $request->name;
        $contact->email                 = $request->email;
        $contact->mobile                = $request->mobile;
        $contact->service               = $request->service;
        $contact->note                  = $request->note;
        $contact->status                = 1;

        $contact->save();

        return response()->json(['message' => 'successfully Contact Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminContactStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Contact::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

}

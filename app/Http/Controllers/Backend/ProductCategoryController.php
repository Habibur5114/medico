<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductCategory;
use DataTables;

class ProductCategoryController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.product_category.index');
    }

    public function getData(Request $request)
    {
        $productCategories = ProductCategory::all();

        // dd($categories);

        return DataTables::of($productCategories)
             ->addIndexColumn()
             ->addColumn('main_img', function ($productCategory) {
                return '<img src="'. asset($productCategory->main_img) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('banner_img', function ($productCategory) {
                return '<img src="'. asset($productCategory->banner_img) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('status', function ($productCategory) {
                if ($productCategory->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$productCategory->id.'" data-status="'.$productCategory->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$productCategory->id.'" data-status="'.$productCategory->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($productCategory) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $productCategory->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $productCategory->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })

            ->rawColumns(['main_img', 'banner_img', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $productCategory = new ProductCategory();

        $productCategory->title                       = $request->title;
        $productCategory->sub_title                   = $request->sub_title;
        $productCategory->slug                        = Str::slug($request->title);
        $productCategory->youtube_url                 = $request->youtube_url;
        $productCategory->description                 = $request->description;
        $productCategory->status                      = $request->status;

        if( $request->file('main_img') ){
            $main_img = $request->file('main_img');

            $imageName          = microtime('.') . '.' . $main_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-category/';
            $main_img->move($imagePath, $imageName);

            $productCategory->main_img   = $imagePath . $imageName;
        }

        if( $request->file('banner_img') ){
            $banner_img = $request->file('banner_img');

            $imageName          = microtime('.') . '.' . $banner_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-category/';
            $banner_img->move($imagePath, $imageName);

            $productCategory->banner_img   = $imagePath . $imageName;
        }

        $productCategory->save();

        return response()->json(['message' => 'successfully Product Category Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminProductCategoryStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = ProductCategory::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productCategory = ProductCategory::find($id);
        return response()->json(['success' => $productCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $productCategory = ProductCategory::find($id);

        $productCategory->title                       = $request->title;
        $productCategory->sub_title                   = $request->sub_title;
        $productCategory->slug                        = Str::slug($request->title);
        $productCategory->youtube_url                 = $request->youtube_url;
        $productCategory->description                 = $request->description;
        $productCategory->status                      = $request->status;

        if( $request->file('main_img') ){
            $main_img = $request->file('main_img');

            if( !is_null($productCategory->main_img) && file_exists($productCategory->main_img) ){
                unlink($productCategory->main_img);
             }

            $imageName          = microtime('.') . '.' . $main_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-category/';
            $main_img->move($imagePath, $imageName);

            $productCategory->main_img   = $imagePath . $imageName;
        }

        if( $request->file('banner_img') ){
            $banner_img = $request->file('banner_img');

            if( !is_null($productCategory->banner_img) && file_exists($productCategory->banner_img) ){
                unlink($productCategory->banner_img);
             }

            $imageName          = microtime('.') . '.' . $banner_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-category/';
            $banner_img->move($imagePath, $imageName);

            $productCategory->banner_img   = $imagePath . $imageName;
        }

        $productCategory->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productCategory = ProductCategory::find($id);

        if ( !is_null($productCategory->main_img) ) {
            if (file_exists($productCategory->main_img)) {
                unlink($productCategory->main_img);
            }
        }

        if ( !is_null($productCategory->banner_img) ) {
            if (file_exists($productCategory->banner_img)) {
                unlink($productCategory->banner_img);
            }
        }

        $productCategory->delete();

        return response()->json(['message' => 'Product Category has been deleted.'], 200);
    }
}

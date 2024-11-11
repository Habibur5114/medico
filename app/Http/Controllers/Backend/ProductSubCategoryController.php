<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use DataTables;
use Illuminate\Support\Facades\DB;

class ProductSubCategoryController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories = ProductCategory::where('status', 1)->get();
        return view('backend.pages.product_sub_category.index', compact('productCategories'));
    }

    public function getData(Request $request)
    {
        // $productSubCategories = ProductSubCategory::all();
        $productSubCategories = DB::table('product_categories')
                            ->join('product_sub_categories', 'product_sub_categories.category_id', 'product_categories.id')
                            ->select('product_sub_categories.*', 'product_categories.title as cat_title')
                            ->get();
        // dd($categories);

        return DataTables::of($productSubCategories)
             ->addIndexColumn()
             ->editColumn('cat_title', function ($productSubCategory) {
                return '<span class="badge bg-label-primary cursor-pointer" id="status">'. $productSubCategory->cat_title .'</span>';
             })
             ->editColumn('subCat_title', function ($productSubCategory) {
                return '<span class="badge bg-label-secondary cursor-pointer" id="status">'. $productSubCategory->title .'</span>';
             })
             ->editColumn('main_img', function ($productSubCategory) {
                return '<img src="'. asset($productSubCategory->main_img) .'" alt="" style="width: 65px;">';
             })
             ->editColumn('banner_img', function ($productSubCategory) {
                return '<img src="'. asset($productSubCategory->banner_img) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('status', function ($productSubCategory) {
                if ($productSubCategory->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$productSubCategory->id.'" data-status="'.$productSubCategory->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$productSubCategory->id.'" data-status="'.$productSubCategory->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($productSubCategory) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $productSubCategory->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $productSubCategory->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })

            ->rawColumns(['main_img', 'cat_title', 'subCat_title', 'banner_img', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $productSubCategory = new ProductSubCategory();

        $productSubCategory->title                       = $request->title;
        $productSubCategory->sub_title                   = $request->sub_title;
        $productSubCategory->category_id                 = $request->category_id;
        $productSubCategory->slug                        = Str::slug($request->title);
        $productSubCategory->youtube_url                 = $request->youtube_url;
        $productSubCategory->description                 = $request->description;
        $productSubCategory->status                      = $request->status;

        if( $request->file('main_img') ){
            $main_img = $request->file('main_img');

            $imageName          = microtime('.') . '.' . $main_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-subCategory/';
            $main_img->move($imagePath, $imageName);

            $productSubCategory->main_img   = $imagePath . $imageName;
        }

        if( $request->file('banner_img') ){
            $banner_img = $request->file('banner_img');

            $imageName          = microtime('.') . '.' . $banner_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-subCategory/';
            $banner_img->move($imagePath, $imageName);

            $productSubCategory->banner_img   = $imagePath . $imageName;
        }

        $productSubCategory->save();

        return response()->json(['message' => 'successfully Product SubCategory Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminProductSubCategoryStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = ProductSubCategory::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productSubCategory = ProductSubCategory::find($id);
        return response()->json(['success' => $productSubCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $productSubCategory = ProductSubCategory::find($id);

        $productSubCategory->title                       = $request->title;
        $productSubCategory->sub_title                   = $request->sub_title;
        $productSubCategory->category_id                 = $request->category_id;
        $productSubCategory->slug                        = Str::slug($request->title);
        $productSubCategory->youtube_url                 = $request->youtube_url;
        $productSubCategory->description                 = $request->description;
        $productSubCategory->status                      = $request->status;

        if( $request->file('main_img') ){
            $main_img = $request->file('main_img');

            if( !is_null($productSubCategory->main_img) && file_exists($productSubCategory->main_img) ){
                unlink($productSubCategory->main_img);
             }

            $imageName          = microtime('.') . '.' . $main_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-subCategory/';
            $main_img->move($imagePath, $imageName);

            $productSubCategory->main_img   = $imagePath . $imageName;
        }

        if( $request->file('banner_img') ){
            $banner_img = $request->file('banner_img');

            if( !is_null($productSubCategory->banner_img) && file_exists($productSubCategory->banner_img) ){
                unlink($productSubCategory->banner_img);
             }

            $imageName          = microtime('.') . '.' . $banner_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-subCategory/';
            $banner_img->move($imagePath, $imageName);

            $productSubCategory->banner_img   = $imagePath . $imageName;
        }

        $productSubCategory->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productSubCategory = ProductSubCategory::find($id);

        if ( !is_null($productSubCategory->main_img) ) {
            if (file_exists($productSubCategory->main_img)) {
                unlink($productSubCategory->main_img);
            }
        }

        if ( !is_null($productSubCategory->banner_img) ) {
            if (file_exists($productSubCategory->banner_img)) {
                unlink($productSubCategory->banner_img);
            }
        }

        $productSubCategory->delete();

        return response()->json(['message' => 'Product SubCategory has been deleted.'], 200);
    }
}

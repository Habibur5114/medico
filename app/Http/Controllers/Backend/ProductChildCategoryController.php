<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ProductSubCategory;
use App\Models\ProductCategory;
use App\Models\ProductChildCategory;
use DataTables;
use Illuminate\Support\Facades\DB;

class ProductChildCategoryController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productCategories      =  ProductCategory::where('status', 1)->get();
        $productSubCategories   =  ProductSubCategory::where('status', 1)->get();
        return view('backend.pages.product_child_category.index', compact('productCategories', 'productSubCategories'));
    }

    public function getData(Request $request)
    {
        $productChildCategories = DB::table('product_child_categories')
                    ->join('product_categories', 'product_categories.id', 'product_child_categories.category_id')
                    ->join('product_sub_categories', 'product_sub_categories.id', 'product_child_categories.subCategory_id')
                    ->select('product_sub_categories.*', 'product_child_categories.*', 'product_categories.title as cat_title', 'product_sub_categories.title as subCat_title')
                    ->get();
        // dd($categories);

        return DataTables::of($productChildCategories)
             ->addIndexColumn()
             ->editColumn('cat_title', function ($productChildCategory) {
                return '<span class="badge bg-label-primary cursor-pointer" id="status">'. $productChildCategory->cat_title .'</span>';
             })
             ->editColumn('subCat_title', function ($productChildCategory) {
                return '<span class="badge bg-label-primary cursor-pointer" id="status">'. $productChildCategory->subCat_title .'</span>';
             })
             ->editColumn('childCat_title', function ($productChildCategory) {
                return '<span class="badge bg-label-primary cursor-pointer" id="status">'. $productChildCategory->title .'</span>';
             })
             ->editColumn('main_img', function ($productChildCategory) {
                return '<img src="'. asset($productChildCategory->main_img) .'" alt="" style="width: 65px;">';
             })
             ->addColumn('status', function ($productChildCategory) {
                if ($productChildCategory->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'. $productChildCategory->id. '" data-status="' .$productChildCategory->status. '">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'. $productChildCategory->id. '" data-status="'. $productChildCategory->status .'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($productChildCategory) {
                return '<div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $productChildCategory->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $productChildCategory->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })

            ->rawColumns(['cat_title', 'subCat_title', 'childCat_title', 'main_img', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $productChildCategory = new ProductChildCategory();

        $productChildCategory->title                       = $request->title;
        $productChildCategory->category_id                 = $request->category_id;
        $productChildCategory->subCategory_id              = $request->subCategory_id;
        $productChildCategory->slug                        = Str::slug($request->title);
        $productChildCategory->description                 = $request->description;
        $productChildCategory->status                      = $request->status;

        if( $request->file('main_img') ){
            $main_img = $request->file('main_img');

            $imageName          = microtime('.') . '.' . $main_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-childCategory/';
            $main_img->move($imagePath, $imageName);

            $productChildCategory->main_img   = $imagePath . $imageName;
        }

        $productChildCategory->save();

        return response()->json(['message' => 'successfully Product ChildCategory Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminProductChildCategoryStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = ProductChildCategory::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $productChildCategory = ProductChildCategory::find($id);
        return response()->json(['success' => $productChildCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $productChildCategory = ProductChildCategory::find($id);

        $productChildCategory->title                       = $request->title;
        $productChildCategory->category_id                 = $request->category_id;
        $productChildCategory->subCategory_id              = $request->subCategory_id;
        $productChildCategory->slug                        = Str::slug($request->title);
        $productChildCategory->description                 = $request->description;
        $productChildCategory->status                      = $request->status;

        if( $request->file('main_img') ){
            $main_img = $request->file('main_img');

            if( !is_null($productChildCategory->main_img) && file_exists($productChildCategory->main_img) ){
                unlink($productChildCategory->main_img);
             }

            $imageName          = microtime('.') . '.' . $main_img->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/product-childCategory/';
            $main_img->move($imagePath, $imageName);

            $productChildCategory->main_img   = $imagePath . $imageName;
        }

        $productChildCategory->save();

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

        $productSubCategory->delete();

        return response()->json(['message' => 'Product SubCategory has been deleted.'], 200);
    }
}

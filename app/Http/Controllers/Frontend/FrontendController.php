<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSubCategory;
use App\Models\Ourproduct;
use App\Models\About;
use App\Models\Pricing;
use App\Models\Managepricing;
use App\Models\hospital;
use App\Models\Management;
use App\Models\Quality;
use App\Models\Footer;
use App\Models\Qualitytext;
use App\Models\Shipcountry;
use App\Models\Managementtext;
use App\Models\ProductChildCategory;
use App\Models\Productdetalis;
use App\Models\Banner;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

    public function home()
    {
        $abouts= About::first();
        $footers= Footer::first();
        $Banner = Banner ::first();
        return view('frontend.static_pages.home',compact('abouts','footers','Banner'));
    }

    public function address()
    {
        return view('frontend.static_pages.address');
    }

    public function abouts()
    {
        $abouts= About::first();
        $hospital = hospital::all();
        $management = Management::all();
        $managementtext = Managementtext::first();
        $quality = Quality::all();
        $qualitytext = Qualitytext::all();
        $shipcountry = Shipcountry::all();

        return view('frontend.static_pages.abouts',compact('abouts','hospital','management','quality','qualitytext','shipcountry','managementtext',));
    }

    public function price()
    {
        $Pricing = Pricing::first();
        $managepricings = Managepricing::all();
        return view('frontend.static_pages.pricing',compact('Pricing','managepricings'));
    }

    public function quality()
    {
        $quality = Quality::all();
        $qualitytext = Qualitytext::first();

        return view('frontend.static_pages.quality',compact('quality','qualitytext'));
    }

    public function feedback()
    {
        return view('frontend.static_pages.feedback');
    }

    public function distributor()
    {
        return view('frontend.static_pages.distributor');
    }

    public function purchase_enquiry()
    {
        return view('frontend.static_pages.purchase_enquiry');
    }

    public function nml_exhibitions()
    {
        return view('frontend.static_pages.nml_exhibitions');
    }

    // products
    public function products()
    {
        $ourproduct = Ourproduct::first();
        $Productdetalis = Productdetalis::all();
        return view('frontend.static_pages.products',compact('ourproduct','Productdetalis'));
    }

    // Category Products
    public function products_details($slug)
    {
        $singleProduct = ProductCategory::where('slug', $slug)->first();
        return view('frontend.static_pages.products_details', compact('singleProduct'));
    }

    // SubCategory Products
    public function sub_products_details($slug)
    {
        $productCategory         = ProductCategory::where('slug', $slug)->first();
        $productSubCategories    = ProductSubCategory::where('status', 1)->where('category_id', $productCategory->id)->get();
        return view('frontend.static_pages.sub_product_details', compact('productCategory', 'productSubCategories'));
    }

    // ChildCategory Products
    public function child_products_details($slug)
    {
         $productSubCategory  =  DB::table('product_sub_categories')
                                ->join('product_categories', 'product_categories.id', '=', 'product_sub_categories.category_id' )
                                ->select('product_sub_categories.*', 'product_categories.slug as cat_slug', 'product_categories.title as cat_titles')
                                ->where('product_sub_categories.slug', $slug)
                                ->where('product_sub_categories.status', 1)
                                ->first();
        $productChildCategories   =   ProductChildCategory::where('status', 1)->where('subCategory_id', $productSubCategory->id)->get();
        // $productChildCategory   =   ProductChildCategory::where('status', 1)->where('subCategory_id', $productSubCategory->id)->first();
        return view('frontend.static_pages.child_product_details', compact('productSubCategory', 'productChildCategories'));
    }

}

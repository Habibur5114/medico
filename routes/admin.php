<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\BasicInfoController;
use App\Http\Controllers\Backend\ProfessionalController;
use App\Http\Controllers\Backend\ServiceInfoController;
use App\Http\Controllers\Backend\TestimonialController;
use App\Http\Controllers\Backend\MeetUsController;
use App\Http\Controllers\Backend\ProductCategoryController;
use App\Http\Controllers\Backend\ProductSubCategoryController;
use App\Http\Controllers\Backend\ProductChildCategoryController;
use App\Http\Controllers\Backend\OurproductController;
use App\Http\Controllers\Backend\ProductdetalisController;
use App\Http\Controllers\Backend\HospitalController;
use App\Http\Controllers\Backend\ManagementController;
use App\Http\Controllers\Backend\ManagementtextController ;
use App\Http\Controllers\Backend\QualityController;
use App\Http\Controllers\Backend\QualitytextController;
use App\Http\Controllers\Backend\ShipcountryController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\PricingController;



// Route::view('/admin/login', 'backend.pages.login.index');


// Route::group(['prefix' => 'admin', 'middleware' => ['Is_admin', 'auth']], function(){
Route::group(['prefix' => 'admin'], function(){
    Route::get('/dashboards', [AdminController::class, 'dashboards'])->name('dashboards');

    //____  Banner  ____//
    Route::resource('banner', BannerController::class)->names('admin.banner');
    Route::get('/get-banner',[BannerController::class,'getData'])->name('admin.get-banner');
    Route::post('/banner/status',[BannerController::class,'adminBannerStatus'])->name('admin.banner.status');


    //____  Review  ____//
    Route::resource('review', ReviewController::class)->names('admin.review');
    Route::get('/get-review',[ReviewController::class,'getData'])->name('admin.get-review');
    Route::post('/review/status',[ReviewController::class,'adminReviewStatus'])->name('admin.review.status');


    //____  Product-Category  ____//
    Route::resource('product-category', ProductCategoryController::class)->names('admin.product-category');
    Route::get('/get-product-category',[ProductCategoryController::class,'getData'])->name('admin.get-product-category');
    Route::post('/product-category/status',[ProductCategoryController::class,'adminProductCategoryStatus'])->name('admin.product-category.status');


    //____  Product-SubCategory  ____//
    Route::resource('product-subCategory', ProductSubCategoryController::class)->names('admin.product-subCategory');
    Route::get('/product-subCategory/{id}',[ProductSubCategoryController::class,'singleProductSubCategory'])->name('single.admin.product-subCategory');
    Route::get('/get-product-subCategory',[ProductSubCategoryController::class,'getData'])->name('admin.get-product-subCategory');
    Route::post('/product-subCategory/status',[ProductSubCategoryController::class,'adminProductSubCategoryStatus'])->name('admin.product-subCategory.status');


    //____  Product-ChildCategory  ____//
    Route::resource('product-childCategory', ProductChildCategoryController::class)->names('admin.product-childCategory');
    Route::get('/get-product-childCategory',[ProductChildCategoryController::class,'getData'])->name('admin.get-product-childCategory');
    Route::post('/product-childCategory/status',[ProductChildCategoryController::class,'adminProductChildCategoryStatus'])->name('admin.product-childCategory.status');

    //____  our Product  ____//

   Route::get('/ourproduct',[OurproductController::class,'index'])->name('ourproduct');
   Route::post('/ourproduct/update',[OurproductController::class,'update'])->name('ourproduct.update');

    //____  Products Details  ____//
    Route::get('/ourproduct/detalis',[ProductdetalisController::class,'index'])->name('product.detalis');
    Route::get('/ourproduct/save',[ProductdetalisController::class,'create'])->name('product.save');
    Route::post('/ourproduct/store',[ProductdetalisController::class,'store'])->name('product.store');
    Route::get('/ourproduct/status/{id}',[ProductdetalisController::class,'status'])->name('product.status');
    Route::get('/ourproduct/show/{id}',[ProductdetalisController::class,'show'])->name('product.show');
    Route::post('/ourproduct/update',[ProductdetalisController::class,'update'])->name('product.update');
    Route::get('/ourproduct/delete/{id}',[ProductdetalisController::class,'delete'])->name('product.delete');

    //____  Contact  ____//
    Route::resource('contact', ContactController::class)->names('admin.contact');
    Route::get('/get-contact',[ContactController::class,'getData'])->name('admin.get-contact');
    Route::post('/contact/status',[ContactController::class,'adminContactStatus'])->name('admin.contact.status');


    //____  Testimonial  ____//
    Route::resource('testimonial', TestimonialController::class)->names('admin.testimonial');
    Route::get('/get-testimonial',[TestimonialController::class,'getData'])->name('admin.get-testimonial');
    Route::post('/testimonial/status',[TestimonialController::class,'adminTestimonialStatus'])->name('admin.testimonial.status');


    //____  MeetUs  ____//
    Route::resource('meet-us', MeetUsController::class)->names('admin.meet-us');
    Route::get('/get-meet-us',[MeetUsController::class,'getData'])->name('admin.get-meet-us');
    Route::post('/meet-us/status',[MeetUsController::class,'adminMeetUsStatus'])->name('admin.meet-us.status');


    //____  Service Info  ____//
    Route::resource('service-info', ServiceInfoController::class)->names('admin.service-info');
    Route::post('/service-info/status',[ServiceInfoController::class,'adminServiceInfoStatus'])->name('admin.service-info.status');
    Route::get('/service-infos/{id}',[ServiceInfoController::class,'index_service_info'])->name('index.service.info');
    Route::get('/get-service-info-data/{id}',[ServiceInfoController::class,'get_all_service_info'])->name('get-service-info.data');


    //____ Service  ____//
    Route::resource('service', ServiceController::class)->names('admin.service');
    Route::get('/get-service',[ServiceController::class,'getData'])->name('admin.get-service');
    Route::post('/service/status',[ServiceController::class,'adminServiceStatus'])->name('admin.service.status');


    //____ BasicInfo  ____//
    Route::resource('basic-info', BasicInfoController::class)->names('admin.basic-info');


    //____ Professional  ____//
    Route::resource('professional', ProfessionalController::class)->names('admin.professional');


    //____ About  ____//
    Route::resource('about', AboutController::class)->names('admin.about');

    //____ Hospital   ____//
    Route::get('hospital', [HospitalController::class, 'index'])->name('hospital');
    Route::get('hospital/create', [HospitalController::class, 'create'])->name('hospital.create');
    Route::post('hospital/store', [HospitalController::class, 'store'])->name('hospital.store');
    Route::get('hospital/status/{id}', [HospitalController::class, 'status'])->name('hospital.status');
    Route::get('hospital/edit/{id}', [HospitalController::class, 'edit'])->name('hospital.edit');
    Route::post('hospital/update', [HospitalController::class, 'update'])->name('hospital.update');
    Route::get('hospital/delete/{id}', [HospitalController::class, 'delete'])->name('hospital.delete');


    //____ management team  ____//

  Route::get('management', [ManagementController::class, 'index'])->name('management');
  Route::get('management/create', [ManagementController::class, 'create'])->name('management.create');
  Route::post('management/save', [ManagementController::class, 'store'])->name('management.save');
  Route::get('management/status/{id}', [ManagementController::class, 'status'])->name('management.status');
  Route::get('management/edit/{id}', [ManagementController::class, 'edit'])->name('management.edit');
  Route::post('management/update', [ManagementController::class, 'update'])->name('management.update');
  Route::get('management/delete/{id}', [ManagementController::class, 'delete'])->name('management.delete');

//____ management team  ____//

Route::get('management/team', [ManagementtextController ::class, 'index'])->name('managementteam');
Route::post('management/team/update', [ManagementtextController ::class, 'update'])->name('managementteam.update');

 //____   Quality Policy ____//

 Route::get('quality/politcy', [QualityController::class, 'index'])->name('quality.politcy');
 Route::get('quality/create', [QualityController::class, 'create'])->name('quality.create');
 Route::post('quality/save', [QualityController::class, 'store'])->name('quality.save');
 Route::get('quality/status/{id}', [QualityController::class, 'status'])->name('quality.status');
 Route::get('quality/edit/{id}', [QualityController::class, 'edit'])->name('quality.edit');
 Route::post('quality/update', [QualityController::class, 'update'])->name('quality.update');
 Route::get('quality/delete{id}', [QualityController::class, 'delete'])->name('quality.delete');



  //____   Quality Policy Update ____//

  Route::get('quality/policy', [QualitytextController::class, 'index'])->name('qualitypolicy');
  Route::post('quality/policy/update', [QualitytextController::class, 'update'])->name('qualitypolicy.update');

    //____   ship country ____//


Route::get('ship/country', [ShipcountryController::class, 'index'])->name('shipcountry');
Route::post('ship/country/update', [ShipcountryController::class, 'update'])->name('shipcountry.update');


   //____   Footer ____//


   Route::get('footer', [FooterController::class, 'index'])->name('footer');
   Route::post('footer/update', [FooterController::class, 'update'])->name('footer.update');


   //____   Footer ____//

 Route::get('pricing', [PricingController::class, 'index'])->name('pricing');
 Route::post('pricing/update', [PricingController::class, 'update'])->name('pricing.update');
 Route::get('pricing/show', [PricingController::class, 'show'])->name('pricing.show');
 Route::get('pricing/create', [PricingController::class, 'create'])->name('pricing.create');
 Route::post('pricing/save', [PricingController::class, 'store'])->name('pricing.store');
 Route::get('pricing/edit/{id}', [PricingController::class, 'edit'])->name('pricing.edit');
 Route::post('pricing/updatet', [PricingController::class, 'updatet'])->name('pricing.updatet');
 Route::get('pricing/delete/{id}', [PricingController::class, 'delete'])->name('pricing.delete');

});



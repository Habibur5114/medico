<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;


Route::get('/optimize-clear', function () {
    if (app()->environment('local')) {
        Artisan::call('optimize:clear');
        return "Optimization cache cleared!";
    }
    return "This action is not allowed in this environment.";
});

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/address', 'address')->name('address');
    Route::get('/abouts', 'abouts')->name('abouts');
    Route::get('/price', 'price')->name('price');
    Route::get('/quality', 'quality')->name('quality');
    Route::get('/feedback', 'feedback')->name('feedback');
    Route::get('/distributor', 'distributor')->name('distributor');
    Route::get('/purchase-enquiry', 'purchase_enquiry')->name('purchase.enquiry');
    Route::get('/products', 'products')->name('products');
    Route::get('/nml-exhibitions', 'nml_exhibitions')->name('nml.exhibitions');
    Route::get('/product-details/{slug}', 'products_details')->name('product.details');
    Route::get('/product/sub-details/{slug}', 'sub_products_details')->name('sub-product.details');
    Route::get('/product/child-details/{slug}', 'child_products_details')->name('child-product.details');
});


Route::middleware('auth')->group(function (){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\customer\contactcontroller;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    // front-end route----
    Route::get('/about', 'about')->name('about');
    Route::get('/product', 'products')->name('product');
    Route::get('/product-details', 'productDetails')->name('product-details');
    Route::get('/project', 'projects')->name('project');
    Route::get('/project-details', 'projectDetails')->name('project-details');
    Route::get('/contact', 'contact')->name('contact');
});


Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');

// ---------



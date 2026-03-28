<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customer\contactcontroller;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('frontend.home');
})->name('home');


// front-end route----
Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/product', function () {
    return view('frontend.product');
})->name('product');

Route::get('/product-details', function () {
    return view('frontend.productdetails');
})->name('product-details');

Route::get('/project', function () {
    return view('frontend.project');
})->name('project');

Route::get('/project-details', function () {
    return view('frontend.projectdetails');
})->name('project-details');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Route::post('/contact-send', [ContactController::class, 'send'])->name('contact.send');

// ---------




<?php

use Illuminate\Support\Facades\Route;

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
    $products = \App\Models\Product::latest()->get();
    return view('frontend.product', compact('products'));
})->name('product');

Route::get('/product-details/{slug?}', function ($slug = null) {
    if (!$slug) {
        $first = \App\Models\Product::latest()->first();
        if ($first) {
            return redirect()->route('product-details', ['slug' => $first->slug ?: $first->id]);
        }
        return redirect()->route('product');
    }
    $product = \App\Models\Product::with('images')
        ->where('slug', $slug)
        ->orWhere('id', $slug)
        ->firstOrFail();
    $otherProducts = \App\Models\Product::where('id', '!=', $product->id)->latest()->take(6)->get();
    return view('frontend.productdetails', compact('product', 'otherProducts'));
})->name('product-details');

Route::get('/product/{slug}', function ($slug) {
    return redirect()->route('product-details', ['slug' => $slug]);
});

Route::get('/project', function () {
    return view('frontend.project');
})->name('project');

Route::get('/project-details', function () {
    return view('frontend.projectdetails');
})->name('project-details');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/certificates', function () {
    return view('frontend.certificates');
})->name('certificates');

Route::get('/download-visiting-card', function () {
    $filePath = public_path('storage/documents/Omkar_Engineers_Visiting_Card.jpg');
    if (file_exists($filePath)) {
        return response()->download($filePath, 'Omkar_Engineers_Visiting_Card.jpg', [
            'Content-Type' => 'image/jpeg',
        ]);
    }
    abort(404);
})->name('download.visiting-card');

// ---------




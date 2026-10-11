<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    $services = \App\Models\Services::where('is_active', true)->orderBy('sort_order')->latest()->get();
    return view('frontend.home', compact('services'));
})->name('home');

Route::get('/services', function () {
    return redirect(route('home') . '#services');
})->name('services');


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
    $projects = \App\Models\Project::where('is_active', true)->orderBy('sort_order')->latest()->get();
    return view('frontend.project', compact('projects'));
})->name('project');

Route::get('/project-details/{slug?}', function ($slug = null) {
    if (!$slug) {
        $first = \App\Models\Project::where('is_active', true)->orderBy('sort_order')->first();
        if ($first) {
            return redirect()->route('project-details', ['slug' => $first->slug ?: $first->id]);
        }
        return redirect()->route('project');
    }

    $project = \App\Models\Project::where('is_active', true)
        ->where(function ($q) use ($slug) {
            $q->where('slug', $slug)->orWhere('id', $slug);
        })
        ->firstOrFail();

    $prevProject = \App\Models\Project::where('is_active', true)
        ->where('id', '<', $project->id)
        ->orderBy('id', 'desc')
        ->first();

    $nextProject = \App\Models\Project::where('is_active', true)
        ->where('id', '>', $project->id)
        ->orderBy('id', 'asc')
        ->first();

    return view('frontend.projectdetails', compact('project', 'prevProject', 'nextProject'));
})->name('project-details');

Route::get('/project/{slug}', function ($slug) {
    return redirect()->route('project-details', ['slug' => $slug]);
});


Route::get('/contact', function () {
    $services = \App\Models\Services::where('is_active', true)->orderBy('sort_order')->get();
    return view('frontend.contact', compact('services'));
})->name('contact');

Route::post('/contact/inquiry', [\App\Http\Controllers\InquiryController::class, 'store'])->name('contact.inquiry.store');


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




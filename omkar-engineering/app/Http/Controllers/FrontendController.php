<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class FrontendController extends Controller
{
    public function home(): View
    {
        return view('frontend.home', [
            'featuredProducts' => Cache::remember(
                'frontend.home.featured_products',
                now()->addMinutes(15),
                fn () => Product::query()
                    ->select(['id', 'title', 'slug', 'sort_description', 'image', 'updated_at'])
                    ->latest('updated_at')
                    ->limit(6)
                    ->get()
            ),
            'featuredProjects' => Cache::remember(
                'frontend.home.featured_projects',
                now()->addMinutes(15),
                fn () => Project::query()
                    ->select(['id', 'title', 'slug', 'sort_description', 'image', 'updated_at'])
                    ->latest('updated_at')
                    ->limit(6)
                    ->get()
            ),
        ]);
    }

    public function about(): View
    {
        return view('frontend.about');
    }

    public function products(): View
    {
        return view('frontend.product', [
            'products' => Cache::remember(
                'frontend.products.index',
                now()->addMinutes(15),
                fn () => Product::query()
                    ->select(['id', 'title', 'slug', 'sort_description', 'image', 'updated_at'])
                    ->latest('updated_at')
                    ->limit(12)
                    ->get()
            ),
        ]);
    }

    public function productDetails(): View
    {
        return view('frontend.productdetails', [
            'otherProducts' => Cache::remember(
                'frontend.products.other',
                now()->addMinutes(15),
                fn () => Product::query()
                    ->select(['id', 'title', 'slug', 'sort_description', 'image'])
                    ->latest('updated_at')
                    ->limit(6)
                    ->get()
            ),
        ]);
    }

    public function projects(): View
    {
        return view('frontend.project', [
            'projects' => Cache::remember(
                'frontend.projects.index',
                now()->addMinutes(15),
                fn () => Project::query()
                    ->select(['id', 'title', 'slug', 'sort_description', 'image', 'updated_at'])
                    ->latest('updated_at')
                    ->limit(12)
                    ->get()
            ),
        ]);
    }

    public function projectDetails(): View
    {
        return view('frontend.projectdetails', [
            'relatedProjects' => Cache::remember(
                'frontend.projects.related',
                now()->addMinutes(15),
                fn () => Project::query()
                    ->select(['id', 'title', 'slug', 'sort_description', 'image'])
                    ->latest('updated_at')
                    ->limit(6)
                    ->get()
            ),
        ]);
    }

    public function contact(): View
    {
        return view('frontend.contact');
    }
}

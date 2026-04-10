<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'sort_description',
        'image',
    ];

    protected static function booted(): void
    {
        $flushFrontendCache = static function (): void {
            Cache::forget('frontend.home.featured_products');
            Cache::forget('frontend.products.index');
            Cache::forget('frontend.products.other');
        };

        static::saved($flushFrontendCache);
        static::deleted($flushFrontendCache);
        static::restored($flushFrontendCache);
    }

    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }
}

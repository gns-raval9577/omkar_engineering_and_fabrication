<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'projects';

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
            Cache::forget('frontend.home.featured_projects');
            Cache::forget('frontend.projects.index');
            Cache::forget('frontend.projects.related');
        };

        static::saved($flushFrontendCache);
        static::deleted($flushFrontendCache);
        static::restored($flushFrontendCache);
    }
}

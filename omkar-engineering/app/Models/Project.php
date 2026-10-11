<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'location',
        'category',
        'client',
        'project_date',
        'icon',
        'image',
        'sort_description',
        'description',
        'included_items',
        'slider_images',
        'gallery_images',
        'website_url',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'included_items' => 'array',
        'slider_images' => 'array',
        'gallery_images' => 'array',
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Get the full URL for the primary project image.
     */
    public function getImageUrlAttribute(): string
    {
        if (!$this->image) {
            return asset('template/img/projects/1.jpg');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'template/')) {
            return asset($this->image);
        }

        return asset('storage/' . $this->image);
    }

    /**
     * Resolve full URL for any arbitrary relative or storage path.
     */
    public static function resolveImageUrl(?string $path, string $fallback = 'template/img/projects/1.jpg'): string
    {
        if (!$path) {
            return asset($fallback);
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'template/')) {
            return asset($path);
        }

        return asset('storage/' . $path);
    }
}

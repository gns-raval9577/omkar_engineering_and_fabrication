<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'galleries';

    protected $fillable = [
        'title',
        'category',
        'image',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public const CATEGORIES = [
        'company' => 'Company & Infrastructure',
        'celebration' => 'Celebrations & Events',
        'achievement' => 'Achievements & Milestones',
        'other' => 'Other Moments',
    ];

    public function getCategoryLabelAttribute(): string
    {
        return self::CATEGORIES[$this->category] ?? ucfirst($this->category);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeCategory($query, string $category)
    {
        return $query->where('category', $category);
    }
}

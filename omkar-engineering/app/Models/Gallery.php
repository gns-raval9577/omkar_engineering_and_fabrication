<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'image',
    ];

    public function scopeForAdminIndex(Builder $query): Builder
    {
        return $query->select([
            'id',
            'title',
            'image',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
    }
}

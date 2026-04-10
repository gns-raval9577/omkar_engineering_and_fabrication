<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'message',
    ];

    public function scopeForAdminIndex(Builder $query): Builder
    {
        return $query->select([
            'id',
            'name',
            'message',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
    }
}

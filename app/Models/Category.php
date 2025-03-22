<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $table = 'categories';

    // Mass assignable attributes
    protected $fillable = [
        'uuid', 'en_name', 'cn_name', 'updated_en_name', 'image', 'status'
    ];

    // Automatically generate UUID if not provided
    protected static function booted()
    {
        static::creating(function ($category) {
            if (empty($category->uuid)) {
                $category->uuid = Str::uuid();
            }
        });
    }

    // Optional: Adding type casting for uuid
    protected $casts = [
        'uuid' => 'string',
    ];
}

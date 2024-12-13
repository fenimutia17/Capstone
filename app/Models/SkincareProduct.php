<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    class SkincareProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'skin_type',
        'conditions',
        'rating',
    ];

    protected $casts = [
        'conditions' => 'array',
    ];
}



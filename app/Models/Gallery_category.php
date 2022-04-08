<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery_category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_en',
    'category_ar',
    'decription_en',
    'decription_ar',
    'order',
    ];
}

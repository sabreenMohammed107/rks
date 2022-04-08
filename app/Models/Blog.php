<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_date',
        'title_en',
        'title_ar',
        'text_en',
        'text_ar',
        'image',
        'order',
        'active',
    ];
}

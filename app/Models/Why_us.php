<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Why_us extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'logo',
        'text_en',
        'text_ar',
    ];
}

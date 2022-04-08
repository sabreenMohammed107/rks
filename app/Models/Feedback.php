<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'feedback_date',
    'image',
    'name_en',
    'name_ar',
    'position_en',
    'position_ar',
    'feedback_en',
    'feedback_ar',
    'order',
    'active',
    ];
}

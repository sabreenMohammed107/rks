<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team_member extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name_en',
        'name_ar',
        'position_en',
        'position_ar',
        'facebook',
        'twitter',
        'instagram',
        'order',
        'active',
    ];
}

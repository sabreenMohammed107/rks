<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
    'type',
    'category_id',
    'description_en',
    'description_ar',
    'order',
    'active',
    ];

    public function cat(){
        return $this->belongsTo('App\Models\Gallery_category', 'category_id');
    }
}

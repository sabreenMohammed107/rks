<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_en',
        'name_ar',
        'desc_en',
        'desc_ar',
        'image',
        'pdf_en',
        'pdf_ar',
        'product_type_id',
        'active',
    ];
    public function type(){
        return $this->belongsTo('App\Models\Product_type', 'product_type_id');
    }
}

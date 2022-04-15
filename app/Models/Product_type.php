<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_type_ar',
        'product_type_en',
        'order',
        'text_en',
        'text_ar'
    ];



    public function products()
    {
        return $this->hasMany(Product::class, 'product_type_id');
    }
}

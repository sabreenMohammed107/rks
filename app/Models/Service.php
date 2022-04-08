<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_en',
    'title_ar',
    'service_en',
    'service_ar',
    'text_en',
    'text_ar',
    'image',
    'vedio',
    'post_date',
    'pdf_en',
    'pdf_ar',
    'service_type_id',
    'order',
    'active',
    ];
    public function type(){
        return $this->belongsTo('App\Models\Service_type', 'service_type_id');
    }
}

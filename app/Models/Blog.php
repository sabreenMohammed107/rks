<?php

namespace App\Models;

use App\Http\Controllers\web\BlogController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

    public function getSlugAttribute(): string
    {
        if (LaravelLocalization::getCurrentLocale() == "en") {
            return str_slug($this->title_en);
        } else {
            return urlencode(strip_tags($this->title_ar));

        }
    }




    public function getUrlAttribute(): string
    {
        return action([BlogController::class,'singleBlog'], [$this->id, $this->slug]);
    }
}

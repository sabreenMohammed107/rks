<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider_image;
use App\Models\Why_us;

class IndexController extends Controller
{
    protected $viewName = 'web.';

    public function index()
    {
        $homeSliders = Slider_image::where('active', 1)->orderBy('order', 'asc')->get();
        $singleSlide = Slider_image::where('active', 1)->orderBy('order', 'asc')->first();
        $whyRows = Why_us::limit(4)->get();

        $service_one = Service::where('id', 1)->where('service_type_id', 1)->first();
        $service_two = Service::where('id', 2)->where('service_type_id', 1)->first();
        $service_three = Service::where('id', 3)->where('service_type_id', 1)->first();
        $products = Product::where('active', 1)->get();
        $partners = Partner::orderBy('order', 'asc')->get();
        $feedBacks = Feedback::where('active', 1)->get();
        $blogs = Blog::where('active', 1)->inRandomOrder()->limit(5)->get();

        return view($this->viewName . 'index', compact('homeSliders', 'singleSlide', 'whyRows', 'service_one'
           ,'service_two','service_three' , 'products', 'feedBacks', 'blogs', 'partners'));
    }
}

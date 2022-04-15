<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Gallery_category;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $galleries=Gallery::orderBy('order', 'asc')->get();
        $categories = Gallery_category::all();
                return view('web.galleries',compact('galleries','categories'));

    }
}

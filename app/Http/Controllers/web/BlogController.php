<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->paginate(6);
        $latestPlogs = Blog::take(5)->orderBy("created_at", "desc")->get();
        $products=Product::where('active', 1)->get();
        return view('web.blogs',compact('blogs','latestPlogs','products'));

    }


    public function singleBlog($id){
        $blog=Blog::where('id', $id)->first();

        $blogs=Blog::where('active', 1)->orderBy('order', 'asc')->get();
        $latestPlogs = Blog::take(5)->orderBy("created_at", "desc")->get();
        $products=Product::where('active', 1)->get();
        return view('web.single-blog',compact('blog','blogs','latestPlogs','products'))->withCanonical($blog->url);
    }

    public function fetch_data(Request $request)
    {

        if ($request->ajax()) {
            $blogs = Blog::orderBy("created_at", "Desc")->paginate(6);

            return view('web.blogList', compact('blogs'))->render();
        }
    }
}

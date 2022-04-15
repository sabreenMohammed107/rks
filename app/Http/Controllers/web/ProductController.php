<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Product_type;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){


        $productsTypeOne=Product_type::findOrFail(1);

        $productsTypeTwo=Product_type::findOrFail(2);

        $productsTypeThree=Product_type::findOrFail(3);
        return view('web.products',compact('productsTypeOne','productsTypeTwo','productsTypeThree'));

    }
}

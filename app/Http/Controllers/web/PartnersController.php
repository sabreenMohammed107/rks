<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index(){

        $partners=Partner::orderBy('order', 'asc')->paginate(8);
        $feedBacks = Feedback::where('active', 1)->get();
        return view('web.partners',compact('partners','feedBacks'));

    }

    public function fetch_data(Request $request)
    {

        if ($request->ajax()) {
            $partners = Partner::orderBy("created_at", "Desc")->paginate(8);

            return view('web.partnersList', compact('partners'))->render();
        }
    }
}

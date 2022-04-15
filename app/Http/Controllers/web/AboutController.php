<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\Feedback;
use App\Models\Partner;
use App\Models\Team_member;
use App\Models\Why_us;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $viewName = 'web.';
    public function index()
    {

        $whyRows = Why_us::limit(4)->get();

        $partners = Partner::orderBy('order', 'asc')->get();
        $feedBacks = Feedback::where('active', 1)->get();
        $contracts = Contract::where('active', 1)->orderBy('order', 'asc')->get();
        $teams= Team_member::where('active', 1)->orderBy('order', 'asc')->get();
        return view($this->viewName . 'about', compact('whyRows', 'feedBacks', 'partners', 'contracts','teams'));
    }
}

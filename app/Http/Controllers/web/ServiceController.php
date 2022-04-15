<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $services = Service::where('service_type_id', 1)->orderBy('id', 'DESC')->get();

        return view('web.service', compact('services'));
    }
}

<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Lang as Lang;
class ExperianceController extends Controller
{
    public function index()
    {
        $allRows = Service::where('service_type_id', 2)->orderBy('id', 'DESC')->get();
        $services = Service::where('service_type_id', 2)->limit(8)->orderBy('id', 'DESC')->get();
        $allAdvices = Service::where('service_type_id', 3)->orderBy('id', 'DESC')->get();
        $advices = Service::where('service_type_id', 3)->limit(8)->orderBy('id', 'DESC')->get();
        return view('web.experience', compact('services', 'allRows', 'allAdvices', 'advices'));
    }

    public function singleExper($id){
        $service=Service::where('id', $id)->first();
        $latestPlogs = Blog::take(4)->orderBy("created_at", "desc")->get();
        $products=Service::where('service_type_id', 3)->take(4)->orderBy('id', 'DESC')->get();
        return view('web.single-exper',compact('service','latestPlogs','products'));
    }
    public function loadMoreData(Request $request)
    {
        if ($request->id > 0) {
            //info($request->id);
            \Log::info('clicked');

            $services = Service::where('id', '<', $request->id)->where('service_type_id', 2)->limit(8)->orderBy('id', 'DESC')->get();
        }
        $allRows = Service::orderBy('id', 'DESC')->get();
        $output = '';
        $last_id = '';

        if (!$services->isEmpty()) {

            foreach ($services as $row) {
                $name = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $name = $row->title_en;
                } else {
                    $name = $row->title_ar;
                };
                $desc = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $desc = $row->text_en;
                } else {
                    $desc = $row->text_ar;
                };

                $output .='<div class="col-lg-6">
                <div class="about-author d-flex mb-4">
                    <div class="bio">
                        <div class="img img-video d-flex align-items-center pro-img"
                            style="background-image: url(' . asset('uploads/services/') . '/' . $row->image . ');">
                            <div class="video justify-content-center">
                                <a href=". $row->vedio ."
                                    class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                    <span class="fa-solid fa-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="desc text-right pr-2 pl-2 block-blog">
                        <h3 class="clr-blue pb-2 pt-3">' . $name . '</h3>
                        <p>' . $desc . ' </p>
                    </div>
                </div>
            </div>
';

                $last_id = $row->id;

            }

        }

        // return $output;
        $arr = [
            'output' => $output,
            'last_id' => $last_id,
        ];
        // return json_encode($arr);
        return response()->json($arr);
    }
    public function loadMoreAdvices(Request $request)
    {
        if ($request->id > 0) {
            //info($request->id);
            \Log::info('clicked');

            $advices = Service::where('id', '<', $request->id)->where('service_type_id', 3)->limit(8)->orderBy('id', 'DESC')->get();
        }
        $allAdvices = Service::where('service_type_id', 4)->orderBy('id', 'DESC')->get();
        $output = '';
        $lastdevice_id = '';

        if (!$advices->isEmpty()) {

            foreach ($advices as $row) {
                $name = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $name = $row->title_en;
                } else {
                    $name = $row->title_ar;
                };
                $desc = '';
                if (LaravelLocalization::getCurrentLocale() === 'en') {
                    $desc = $row->text_en;
                } else {
                    $desc = $row->text_ar;
                };
                $output .= '<div class="col-lg-3 col-md-6 mb-4">
                <div class="border-roz">
                    <div class="text-center">
                        <img src="' . asset('uploads/services/') . '/' . $row->image . '" class="partner-img" />
                        <div class="text pt-4 pr-2 pl-2 pb-2  box-hover">
                            <h4><a href="#" class="clr-blue">'. $name .'</a></h4>
                            <p>' . $desc .'</p>
                        </div>
                    </div>
                </div>
            </div>';

                $lastdevice_id = $row->id;

            }

        }

        $arr = [
            'output' => $output,
            'lastdevice_id' => $lastdevice_id,
        ];
        // return json_encode($arr);
        return response()->json($arr);
    }



    public function sendMessage(Request $request)
    {
        Message::create($request->except('_token'));
        session()->flash('success', Lang::get('links.controller_message'));
        return redirect()->back()->with('flash_success', Lang::get('links.controller_message'));
    }
}

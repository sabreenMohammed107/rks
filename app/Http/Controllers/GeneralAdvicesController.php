<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;
use Carbon\Carbon;
class GeneralAdvicesController extends Controller
{
     // This is for General Class Variables.
     protected $object;
     protected $viewName;
     protected $routeName;

     /**
      * UserController Constructor.
      *
      * @return \Illuminate\Http\Response
      */
     public function __construct(Service $object)
     {
         $this->middleware('auth');

         $this->object = $object;
         $this->viewName = 'admin.general-advices.';
         $this->routeName = 'general-advices.';
     }/**

     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Service::where('service_type_id',2)->get();
        return view($this->viewName . 'index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewName . 'add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token',  'active','post_date']);

        if ($request->has('active')) {
            $input['active'] = 1;
        } else {
            $input['active'] = 0;

        }
        $input['service_type_id'] = 2;
        $input['post_date'] = Carbon::parse($request->get('post_date'));
        Service::create($input);
        return redirect()->route($this->routeName . 'index')->with('flash_success', 'تم الحفظ بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Service::where('id', $id)->first();

        return view($this->viewName . 'edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->except(['_token','active','post_date']);


        if ($request->has('active')) {
            $input['active'] = 1;
        } else {
            $input['active'] = 0;

        }
        $input['service_type_id'] = 2;
        $input['post_date'] = Carbon::parse($request->get('post_date'));
        Service::findOrFail($id)->update($input);
        return redirect()->route($this->routeName . 'index')->with('flash_success', 'تم الحفظ بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=Service::where('id',$id)->first();
        // Delete File ..

        try {

            $row->delete();
            return redirect()->back()->with('flash_success', 'تم الحذف بنجاح !');

        } catch (QueryException $q) {
            return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());

            // return redirect()->back()->with('flash_danger', 'هذه القضية مربوطه بجدول اخر ..لا يمكن المسح');
        }
    }
}

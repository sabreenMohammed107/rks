<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Gallery_category;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use File;
class GalleryController extends Controller
{
    protected $object;
    protected $viewName;
    protected $routeName;
    protected $message;
    protected $errormessage;
    public function __construct(Gallery $object)
    {

        $this->middleware('auth');
        $this->object = $object;
        $this->viewName = 'admin.gallery.';
        $this->routeName = 'admin-gallery.';
        $this->message = 'تم حفظ البيانات';
        $this->errormessage = 'راجع البيانات هناك خطأ';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows=Gallery::all();
        return view($this->viewName.'index',compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Gallery_category::all();
        return view($this->viewName.'add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except(['_token','img','active']);

        if($request->get('type')==1){
            if ($request->hasFile('img')) {

                $attach_image = $request->file('img');

                $input['path'] = $this->UplaodImage($attach_image);

            }
        }else{

            $input['path'] =$request->get('image');
        }
        if($request->has('active')){
            $input['active'] = 1;
        }else{
            $input['active'] = 0;

        }

    Gallery::create($input);
    return redirect()->route($this->routeName.'index')->with('flash_success', 'تم الحفظ بنجاح');
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
        $row=Gallery::where('id',$id)->first();
        $categories=Gallery_category::all();
        return view($this->viewName.'edit',compact('row','categories'));
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
        $row=Gallery::where('id',$id)->first();
        $input = $request->except(['_token','img','active']);

        if($row->type==1){
            if ($request->hasFile('img')) {

                $attach_image = $request->file('img');

                $input['path'] = $this->UplaodImage($attach_image);

            }
        }else{

            $input['path'] =$request->get('image');
        }

        if($request->has('active')){
            $input['active'] = 1;
        }else{
            $input['active'] = 0;

        }


    Gallery::findOrFail($id)->update($input);
        return redirect()->route($this->routeName.'index')->with('flash_success', 'تم الحفظ بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row=Gallery::where('id',$id)->first();
        // Delete File ..
        $file = $row->image;
        $file_name = public_path('uploads/categories/' . $file);
        try {
            File::delete($file_name);
            $row->delete();
            return redirect()->back()->with('flash_success', 'تم الحذف بنجاح !');

        } catch (QueryException $q) {
            return redirect()->back()->withInput()->with('flash_danger', $q->getMessage());

            // return redirect()->back()->with('flash_danger', 'هذه القضية مربوطه بجدول اخر ..لا يمكن المسح');
        }
    }

     /* uplaud image
     */
    public function UplaodImage($file_request)
    {
        //  This is Image Info..
        $file = $file_request;
        $name = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $size = $file->getSize();
        $path = $file->getRealPath();
        $mime = $file->getMimeType();

        // Rename The Image ..
        $imageName = $name;
        $uploadPath = public_path('uploads/categories');

        // Move The image..
        $file->move($uploadPath, $imageName);

        return $imageName;
    }
}

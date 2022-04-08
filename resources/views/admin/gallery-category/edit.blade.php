@extends('layout.web')

@section('title', 'اراء العملاء')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
            <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">تعديل</h3>
        </div>






                  <form action="{{route('admin-gallery-category.update',$row->id)}}"  method="post" enctype="multipart/form-data">

                @method('PUT')
				  @csrf
                  <div class="box-body">



                        <div class="col-sm-12">
                            <div class="form-group">
                                <label  >{{ __('  اسم التصنيف عربى ') }}</label>
                                    <input type="text" id="newTitle" name="category_ar" value="{{$row->category_ar}}" class="form-control"
                                       placeholder=" الاسم">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label  >{{ __('  اسم التصنيف انجليزى ') }}</label>
                                        <input type="text" id="newTitle" name="category_en" value="{{$row->category_en}}" class="form-control"
                                           placeholder=" الاسم">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label  >{{ __('  الوصف عربي ') }}</label>
                                        <textarea class="form-control " name="decription_ar" > {{$row->decription_ar}}</textarea>

                                        </div>
                                    </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label  >{{ __('  الوصف انجليزى ') }}</label>
                                        <textarea class="form-control " name="decription_en">{{$row->decription_en}}</textarea>


                                    </div>
                                    </div>

                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <a href="{{route('admin-gallery-category.index')}}" class="btn btn-danger">إلغاء</a>
                </div>
                </div>

                  </form>
              </div>
    </div>

@endsection

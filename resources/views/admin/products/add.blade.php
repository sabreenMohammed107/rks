@extends('layout.web')

@section('title', ' المنتجات')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
            <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">اضافة</h3>
        </div>






                  <form action="{{route('admin-products.store')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="box-body">

                        <div class="col-sm-12">
                        <div class="form-group">
                            <label  >{{ __('  الاسم عربى ') }}</label>
                                <input type="text" id="newTitle" name="name_ar" value="{{old('name_ar')}}" class="form-control"
                                   placeholder=" الاسم">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label  >{{ __('  الاسم انجليزى ') }}</label>
                                    <input type="text" id="newTitle" name="name_en" value="{{old('name_en')}}" class="form-control"
                                       placeholder=" الاسم">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label  >{{ __('  الوصف عربى ') }}</label>
                                    <textarea class="form-control " name="desc_ar">{{old('desc_ar')}}</textarea>


                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label  >{{ __('  الوصف انجليزى ') }}</label>
                                        <textarea class="form-control " name="desc_en">{{old('desc_en')}}</textarea>


                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group ">
                                        <label> التصنيف</label>
                                        <select name="product_type_id"  class="form-control">
                                            <option value="">إختر</option>
                                            @foreach ($types as $cat)
                                            <option value="{{$cat->id}}">{{$cat->product_type_ar}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">اضافة  صورة</label>

                                    <input type="file" name="img" class="custom-file-input"
                                    id="inputGroupFile02" />


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">اضافة  ملف عربي</label>

                                    <input type="file" name="pdf_ar" class="custom-file-input"
                                    id="inputGroupFile02" />


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">اضافة  ملف أنجليزى</label>

                                    <input type="file" name="pdf_en" class="custom-file-input"
                                    id="inputGroupFile02" />


                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="checkbox">
                                      <label>
                                        {{ __('نشط') }}
                                        <input type="checkbox" checked  id="newTitle" name="active"  value="1"/>

                                      </label>
                                    </div>

                            </div>
                            </div>

                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <a href="{{route('admin-products.index')}}" class="btn btn-danger">إلغاء</a>
                </div>
                </div>

                  </form>
              </div>
    </div>

@endsection

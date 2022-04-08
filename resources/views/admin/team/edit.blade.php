@extends('layout.web')

@section('title', 'فريق العمل')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
            <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">تعديل</h3>
        </div>






                  <form action="{{route('admin-team.update',$row->id)}}"  method="post" enctype="multipart/form-data">

                @method('PUT')
				  @csrf
                  <div class="box-body">


                    <div class="col-sm-12">
                        <div class="form-group">
                            <label  >{{ __('  الاسم عربى ') }}</label>
                                <input type="text" id="newTitle" name="name_ar" value="{{$row->name_ar}}" class="form-control"
                                   placeholder=" الاسم">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label  >{{ __('  الاسم انجليزى ') }}</label>
                                    <input type="text" id="newTitle" name="name_en" value="{{$row->name_en}}" class="form-control"
                                       placeholder=" الاسم">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label  >{{ __('  الموقع عربى ') }}</label>
                                    <textarea class="form-control " name="position_ar">{{$row->position_ar}}</textarea>


                                </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label  >{{ __('  الموقع انجليزى ') }}</label>
                                        <textarea class="form-control " name="position_en">{{$row->position_en}}</textarea>


                                    </div>
                                    </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label  >{{ __('  facebook ') }}</label>
                                    <input type="text" id="newTitle" class="form-control"  name="facebook" value="{{$row->facebook}}" >


                                </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label  >{{ __('  twitter ') }}</label>
                                        <input type="text" id="newTitle"  class="form-control" name="twitter" value="{{$row->twitter}}">


                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label  >{{ __('  instagram ') }}</label>
                                            <input type="text" id="newTitle" class="form-control" name="instagram" value="{{$row->instagram}}">


                                        </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label  >{{ __('  linkedin ') }}</label>
                                                <input type="text" id="newTitle" class="form-control"  name="linkedin" value="{{$row->linkedin}} ">


                                            </div>
                                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">اضافة صورة</label>

                                    <div class="custom-file">
                                        <input type="file" name="img"
                                            class="custom-file-input"
                                            id="inputGroupFile02" />
                                        <label class="custom-file-label"
                                            for="inputGroupFile02">{{ $row->image ?? '' }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">الترتيب</label>
                                    <input type="number"
                                        value="{{$row->order}}"
                                        name="order" class="form-control"
                                        id="">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <div class="checkbox">
                                      <label>
                                        {{ __('نشط') }}
                                        <input type="checkbox" @if($row->active==1) checked @endif id="newTitle" name="active"  value="1"/>

                                      </label>
                                    </div>

                            </div>
                            </div>


                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <a href="{{route('admin-team.index')}}" class="btn btn-danger">إلغاء</a>
                </div>
                </div>

                  </form>
              </div>
    </div>

@endsection

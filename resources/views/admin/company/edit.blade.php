@extends('layout.web')

@section('title', 'عن الشركة')

@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
            <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">تعديل</h3>
        </div>






                  <form action="{{route('admin-company.update',$row->id)}}" method="POST">
                @method('PUT')
				  @csrf
                  <div class="box-body">



                        <div class="col-sm-12">
                            <div class="form-group">
                                <label  >{{ __(' عن الشركة عربى ') }}</label>
                                <textarea class="form-control " name="overview_ar">{{$row->overview_ar}}</textarea>


                            </div>
                    </div>
                    <hr>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label  >{{ __(' عن الشركة انجليزى') }}</label>
                                <textarea class="form-control " name="overview_en">{{$row->overview_en}}</textarea>


                            </div>
                    </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label  >{{ __('الفديو يوتيوب') }}</label>
                                <input type="url" name="company_vedio" class="form-control " value="{{$row->company_vedio}}">


                            </div>
                    </div>
                <div class="col-xs-6 col-sm-6 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary">حفظ</button>
                    <a href="{{route('admin-company.index')}}" class="btn btn-danger">إلغاء</a>
                </div>
                </div>

                  </form>
              </div>
    </div>

@endsection

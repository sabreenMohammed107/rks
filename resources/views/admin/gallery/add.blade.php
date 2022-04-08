@extends('layout.web')

@section('title', 'معرض الصور')

@section('content')
<style>
    .hide{
        display: none;
    }
</style>

<div class="row">
    <!-- left column -->
    <div class="col-md-10">
            <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">اضافة</h3>
        </div>

<form action="{{ route('admin-gallery.store') }}" method="POST"  enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="box-body">

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            <div class="form-group ">
                <label> النوع</label>
                <select name="type" id="category_id" class="form-control">

                    <option value="1">صور</option>
                    <option value="2">فديو</option>

                </select>

            </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4 hide" id="vedio" style="direction:rtl">

                <div class="form-group">
                    <label class="">  فديو</label>
                    <input name="image"  value="{{old('image') }}"   type="url" class="form-control" placeholder=" فديو">
                </div>
            </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="image" style="direction:rtl">
            <div class="form-group">
                <label for="">اضافة  صورة</label>

                <input type="file" name="img" class="custom-file-input "
                id="inputGroupFile02" />


            </div>

        </div>

    </div>
    <div class="row">

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص عربى</label>
                <textarea name="description_ar"   class="form-control" placeholder="النص">{{old('description_ar') }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class="">  النص انجليزى</label>
                <textarea name="description_en"   class="form-control" placeholder="النص">{{old('description_en') }}</textarea>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
            <div class="form-group ">
                <label> التصنيف</label>
                <select name="category_id"  class="form-control">
                    <option value="">إختر</option>
                    @foreach ($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->category_ar}}</option>
                    @endforeach
                </select>

            </div>
            </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">
        <div class="form-group ">
            <label> </label>
            <input type="checkbox" class="" name="active" id=" active" checked {{ old('active') == 'on' ? 'checked' : '' }}
        >
           نشط

        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="direction:rtl">

            <div class="form-group">
                <label class=""> الترتيب</label>
                <input type="number" class="form-control" name="order" value="{{old('order') }}">
            </div>
        </div>

        </div>

     <div class="card-footer">

        <div class="col-xs-6 col-sm-6 col-md-6 text-center">
            <button type="submit" class="btn btn-primary">حفظ</button>
            <a href="{{route('admin-gallery.index')}}" class="btn btn-danger">إلغاء</a>
        </div>
    </div>
    </div>
</form>
</div>
</div>

@endsection
@section('scripts')
<script>
$(document).ready(function (){
    $("#category_id").change(function(){
    var selected_option = $('#category_id').val();

    if(selected_option == '2'){
        $("#vedio").removeClass("hide");
        $("#image").addClass("hide");
    }
        if(selected_option != '2'){
            $("#vedio").addClass("hide");
        $("#image").removeClass("hide");
    }
  })
  });
  </script>
@endsection


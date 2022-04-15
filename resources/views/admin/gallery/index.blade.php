@extends('layout.web')

@section('title', 'معرض الصور')

@section('content')


<div class="box">
    <div class="box-header">
      <h3 class="box-title">معرض الصور</h3>
      <a href="{{ route('admin-gallery.create') }}" class="btn btn-info btn-lg pull-right"> اضافة </a>

    </div><!-- /.box-header -->
    <div class="box-body">

            <div class="box-body">
                <table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-resizable="true" data-cookie="true"
                data-show-export="true" data-locale="ar-SA"  style="direction: rtl" >
        <thead class="bg-info">
            <tr>
                <th>#</th>
                <th style="width:120px">الصورة  </th>
                <th style="width:120px">التصنيف  </th>

                <th>النص انجليزى</th>
                <th> النص عربى</th>

                <th>نشظ</th>
                <th>الترتيب</th>
                <th style="width:120px">الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rows as $index => $row)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    @if ($row->type==1)
                    <img width="200" src="{{ asset('uploads/categories') }}/{{ $row->path }}" />

                    @else
                    {{ $row->path }}
                    {{-- <video autoplay muted loop width="200">
                        <source src="{{ $row->path }}" type="video/mp4" />
                    </video> --}}
                    @endif
                </td>
                <td>{{$row->cat->category_ar ?? ''}}</td>

                    <td>{{$row->description_en}} </td>

                    <td>{{$row->description_ar}} </td>

                    <td>@if ($row->active==1)
                        <i class="fa fa-check" aria-hidden="true"></i>

                    @else
                    <i class="fa fa-times" aria-hidden="true"></i>

                    @endif</th>
                    <td>{{$row->order}}</td>

                    <td>
                        <div class="btn-group">

                            <a  class="btn btn-default" href="{{route('admin-gallery.edit', $row->id) }}"><i class="fa fa-edit"
                                    title="edit"></i></button>
                                    <a class="btn btn-danger" data-toggle="modal"
                                    data-target="#del{{ $row->id }}"><i class="fa fa-times"></i></a>

                    </td>
                </tr>
                 <!-- Delete Modal -->
            <div class="modal fade dir-rtl" id="del{{ $row->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form action="{{ route('admin-gallery.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-content">
                            <div class="modal-header bg-gradient-danger">
                                <h5 class="modal-title" id="exampleModalLabel">تأكيد الحذف</h5>
                                <button type="button" class="close m-0 p-0 text-white"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <h3><i class="fas fa-fire text-danger"></i></h3>
                                <h4 class="text-danger">حذف جميع البيانات ؟</h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">إلغاء</button>
                                <button type="submit" class="btn btn-danger">تأكيد</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endforeach

        </tbody>
    </table>
</div>
</div>
</div>
</div>

@endsection

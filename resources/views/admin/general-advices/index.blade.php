@extends('layout.web')

@section('title', ' خدمات عامة')

@section('content')


<div class="box">
    <div class="box-header">
      <h3 class="box-title"> خدمات عامة</h3>
      <a href="{{ route('general-advices.create') }}" class="btn btn-info btn-lg pull-right"> اضافة </a>

    </div><!-- /.box-header -->
    <div class="box-body">

            <div class="box-body">
                <table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-resizable="true" data-cookie="true"
                data-show-export="true" data-locale="ar-SA"  style="direction: rtl" >
                                   <thead>
                                    <th data-field="state" data-checkbox="false"></th>
                                    <th data-field="id">#</th>
                                        <th>الاسم عربي  </th>

                                        <th> الاسم انجليزي </th>

                                        <th>النص عربي  </th>

                                        <th> النص انجليزي </th>
                                        <th> الفديو </th>

							<th>{{ __('الإجراء') }}</th>
						</thead>
						<tbody>
						@foreach($rows as $index => $row)
							<tr>
                                <td></td>
                                <td>{{ $index + 1 }}</td>
                                <td>{{$row->title_ar}}</td>
                                <td>{{$row->title_en}}</td>

                                <td>{!! $row->text_ar !!} </td>

                                <td>{!! $row->text_en !!} </td>

                                <td>{{$row->vedio}} </td>
                                      <td>
                                        <div class="btn-group">


                                            <a href="{{ route('general-advices.edit', $row->id) }}">
                                                <p class=" fa fa-cogs"></p>
                                            </a>


                                            <a href="#del{{ $row->id }}" data-toggle="modal"
                                                data-target="#del{{ $row->id }}">
                                                <p class="fa  fa-times"></p>
                                            </a>


                                        </div>
                                    </td>
							</tr>
                             <!-- Delete Modal -->
                             <div class="modal modal-danger" id="del{{ $row->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <form action="{{ route('general-advices.destroy', $row->id) }}"  method="POST" >
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h5 class="modal-title" id="exampleModalLabel">تأكيد الحذف</h5>
                                            </button>
                                        </div>
                                        <div class="modal-body bg-light">
                                            <p><i class="fa fa-fire "></i></p>
                                            <p>حذف جميع البيانات ؟</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline pull-left"
                                                data-dismiss="modal">الغاء</button>
                                            <button type="submit" class="btn btn-outline">حفظ </button>
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
</div>

@endsection



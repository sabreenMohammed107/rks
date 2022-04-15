@extends('layout.web')

@section('title', ' انواع المنتجات')

@section('content')


<div class="box">
    <div class="box-header">
      <h3 class="box-title">انواع المنتجات</h3>
      {{-- <a href="{{ route('admin-company.create') }}" class="btn btn-info btn-lg pull-right"> اضافة </a> --}}

    </div><!-- /.box-header -->
    <div class="box-body">

            <div class="box-body">
                <table id="table" data-toggle="table" data-pagination="true" data-search="true"  data-resizable="true" data-cookie="true"
                data-show-export="true" data-locale="ar-SA"  style="direction: rtl" >
                                   <thead>
                                    <th data-field="state" data-checkbox="false"></th>
                                    <th data-field="id">#</th>
                                        <th>الاسم عربى </th>



                                        <th>الاسم انجليزى </th>


                                        <th>الوصف عربى </th>

                                        <th>الوصف انجليزي </th>

							<th>{{ __('الإجراء') }}</th>
						</thead>
						<tbody>
						@foreach($rows as $index => $row)
							<tr>
                                <td></td>
                                <td>{{ $index + 1 }}</td>

                                <td>
                                    {{$row->product_type_ar}}
                                </td>




                                <td>
                                    {{$row->product_type_en}}
                                                                </td>




                                <td>
                                    {{$row->text_ar}}
                                </td>

                                <td>
                                    {{$row->text_en}}
                                </td>

                                      <td>
                                        <div class="btn-group">

                                            <a href="{{ route('admin-product-types.edit', $row->id) }}">
                                                <p class=" fa fa-cogs"></p>
                                            </a>



                                        </div>
                                    </td>
							</tr>

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



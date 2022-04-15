<div class="row" dir="rtl">
    @foreach ($partners as $partner)
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="border-roz">
            <div class="text-center">
                <img src="{{ asset('uploads/partners') }}/{{ $partner->logo ?? '' }}" class="partner-img" />
                <div class="text pt-4 pr-2 pl-2 pb-2 bg-roz">
                    <h4><a href="#" class="clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $partner->name_en ?? '' !!}
                    @else
                        {!! $partner->name_ar ?? '' !!}
                    @endif</a></h4>
                    <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $partner->description_en ?? '' !!}
                    @else
                        {!! $partner->description_ar ?? '' !!}
                    @endif</p>
                </div>
            </div>
        </div>
    </div>
  @endforeach
</div>
<div class="row justify-content-center mt-5" dir="rtl">

<nav class="blog-pagination justify-content-center d-flex">
  <ul class="pagination">
    @for ($i = 1; $i <= $partners->lastPage(); $i++)
    <!-- a Tag for another page -->
    <li class="page-item ml-2  {{ $partners->currentPage() == $i ? ' active' : '' }}"> <a
            href="{{ $partners->url($i) }}" class="page-link">{{ $i }}</a></li>
@endfor

  </ul>
</nav>
</div>

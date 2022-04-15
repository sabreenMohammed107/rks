@extends('web.layout.web')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" dir="rtl">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.blogs') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.blogs') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row" dir="rtl">
            <div class="col-lg-8 ftco-animate">
                <div id="table_data">

                    @include('web.blogList')



                </div>

            </div>

            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate text-right">
                    <h2 class="clr-blue mb-2">نصائح زراعية</h2>
                    <hr />
                    @foreach ($products as $product)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img ml-4" style="background-image: url('{{asset('uploads/services')}}/{{$product->image}}');"></a>
                        <div class="text text-right">
                            <h3 class="heading">
                                <a href="#" class="clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {!! $product->title_en ?? '' !!}
                                @else
                                    {!! $product->title_ar ?? '' !!}
                                @endif</a>
                            </h3>
                            <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                {!! str_limit($product->text_en ?? '', $limit = 50, $end = '...') !!}
                            @else
                                {!! str_limit($product->text_en ?? '', $limit = 50, $end = '...') !!}
                            @endif</p>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="sidebar-box ftco-animate text-right">
                    <h2 class="clr-blue mb-2">{{ __('links.latest_News') }}</h2>
                    <hr />
                    @foreach ($latestPlogs as $latest)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img ml-4" style="background-image: url({{ asset('uploads/blogs') }}/{{ $latest->image ?? '' }});"></a>
                        <div class="text text-right">
                            <h3 class="heading">
                                <a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$latest->id.'/'.$latest->slug) }}" class="clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {!! $latest->title_en ?? '' !!}
                                @else
                                    {!! $latest->title_ar ?? '' !!}
                                @endif</a>
                            </h3>
                            <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                {!! str_limit($latest->text_en ?? '', $limit = 50, $end = '...') !!}
                            @else
                                {!! str_limit($latest->text_ar ?? '', $limit = 50, $end = '...') !!}
                            @endif</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>


  @endsection

  @section('scripts')
    <script>
        $(document).ready(function() {

            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];

                fetch_data(page);
            });

            function fetch_data(page) {
                $.ajax({
                    url: "/blog/fetch_data?page=" + page,
                    success: function(data) {
                        $('#table_data').html(data);
                    }
                });
            }

        });
    </script>
@endsection

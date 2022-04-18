@extends('web.layout.web')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center dir" >
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.blogs') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.blogs') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row dir text-dir" >
        <div class="col-lg-8 ftco-animate ">
            <p>
                <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="" class="img-fluid blog-img2 w-100">
            </p>
            <h3 class="mb-3 clr-blue mt-3"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                {!! $blog->title_en ?? '' !!}
            @else
                {!! $blog->title_ar ?? '' !!}
            @endif</h3>
            <p>
                @if (LaravelLocalization::getCurrentLocale() === 'en')
                {!! $blog->text_en ?? '' !!}
            @else
                {!! $blog->text_ar ?? '' !!}
            @endif</p>
        </div>
            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box ftco-animate">
                    <h2 class="clr-blue mb-2">نصائح زراعية</h2>
                    <hr />
                    @foreach ($products as $product)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mx-4" style="background-image: url('{{asset('uploads/services')}}/{{$product->image}}');"></a>
                        <div class="text">
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
                <div class="sidebar-box ftco-animate ">
                    <h2 class="clr-blue mb-2">{{ __('links.latest_News') }}</h2>
                    <hr />
                    @foreach ($latestPlogs as $latest)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mx-4" style="background-image: url({{ asset('uploads/blogs') }}/{{ $latest->image ?? '' }});"></a>
                        <div class="text ">
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

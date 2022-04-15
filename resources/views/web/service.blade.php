@extends('web.layout.web')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" dir="rtl">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.services') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.services') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
        <div class="row" dir="rtl">
            <div class="col-lg-12 ftco-animate">
                @foreach ($services as $service)
                <div class="about-author d-flex mb-4">
                    <div class="bio">
                        <img src="{{ asset('uploads/services') }}/{{ $service->image }}" alt="Image placeholder" class="img-blog2">
                    </div>
                    <div class="desc text-right pr-3 pl-3 block-blog">
                        <h3 class="clr-blue pb-2 pt-3"> @if (LaravelLocalization::getCurrentLocale() === 'en')
                            {{ $service->title_en }}
                        @else
                            {{ $service->title_ar }}
                        @endif </h3>
                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {{ $service->text_en }}
                        @else
                            {{ $service->text_ar }}
                        @endif </p>
                        <div class="text-left">
                            <p>
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                <a download
                                href="{{ asset('uploads/services') }}/{{ $service->pdf_en ?? '' }}"
                                >
                                <i class="fa-solid fa-file-pdf ml-3" style="font-size:30px;color:#00963f;"></i>
                            </a>
                            @else
                            <a download
                            href="{{ asset('uploads/services') }}/{{ $service->pdf_ar ?? '' }}"
                            >
                            <i class="fa-solid fa-file-pdf ml-3" style="font-size:30px;color:#00963f;"></i>
                        </a>
                            @endif



                                <a href="{{ LaravelLocalization::localizeUrl('/contact') }}" class="btn btn-outline mb-3 pt-1 pb-1"> {{ __('links.call_us') }}</a>
                            </p>
                        </div>
                    </div>

                </div>
                @endforeach


            </div>
        </div>
    </div>
</section>


  @endsection

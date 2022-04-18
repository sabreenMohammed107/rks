@extends('web.layout.web')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center dir" >
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.partenters') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.partenters') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-12 heading-section ftco-animate pt-5">
                <div class="row dir text-dir" >
                    <div class="col-lg-4">
                        <h2 class="mb-4 clr-blue"> {{ __('links.feedback') }}</h2>
                    </div>
                    <div class="col-lg-8">
                        <p>
                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك لينتوك بروفيسور
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="tarkikComandSlider1 pb-5">
                @foreach($feedBacks as $feedback)
                <div class="comandSlider__item mb-2">
                    <div class="pr-3 pl-3">
                        <div class="mb-3 border-2">
                            <div class="dir text-dir" >
                                <div class="text pt-4 pr-5 pl-5 pb-2">
                                    <p> @if( LaravelLocalization::getCurrentLocale() === "en")
                                        {{$feedback->feedback_en}}
                                        @else
                                        {{$feedback->feedback_ar}}
                                        @endif</p>
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img user-img2" style="background-image: url({{asset('uploads/feedback')}}/{{$feedback->image ?? ''}});">
                                        </div>
                                        <div class="text mr-2">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                            <p class="name">@if( LaravelLocalization::getCurrentLocale() === "en")
                                                {{$feedback->name_en}}
                                                @else
                                                {{$feedback->name_ar}}
                                                @endif </p>
                                            <span class="position">@if( LaravelLocalization::getCurrentLocale() === "en")
                                                {{$feedback->position_en}}
                                                @else
                                                {{$feedback->position_ar}}
                                                @endif</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4 clr-blue"> {{ __('links.partenters') }}</h2>
                <p>
                    خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك
                </p>
            </div>
        </div>

        <div id="table_data">

            @include('web.partnersList')



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
                    url: "/partners/fetch_data?page=" + page,
                    success: function(data) {
                        $('#table_data').html(data);
                    }
                });
            }

        });
    </script>
@endsection

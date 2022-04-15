@extends('web.layout.web')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" dir="rtl">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.products') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.products') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
        <div class="Container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3 class="HeadPro"><span class="ArrowsPro"></span></h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-right">
                        <h2 class="mb-4 clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $productsTypeOne->product_type_en ?? '' !!}
                        @else
                            {!! $productsTypeOne->product_type_ar ?? '' !!}
                        @endif</h2>
                        <p>
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $productsTypeOne->text_en ?? '' !!}
                        @else
                            {!! $productsTypeOne->text_ar ?? '' !!}
                        @endif
                        </p>
                    </div>
                </div>
            </div>
            <!-- Carousel Container -->
            <div class="SlickCarouselPro">
                @foreach ($productsTypeOne->products as $product)
                     <!-- Item -->
                <div class="ProductBlock proItem">
                    <div class="Content" style="background-image:url({{ asset('uploads/products') }}/{{ $product->image }});box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.1);">
                        <a href="#" class="img-fill">
                            <div class="overlay-text pt-5 pr-2 pl-2 text-white">
                                <h2 class="text-white">
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->name_en }}
                                            @else
                                                {{ $product->name_ar }}
                                            @endif
                                </h2>
                                <p> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $product->desc_en }}
                                @else
                                    {{ $product->desc_ar }}
                                @endif</p>
                            </div>
                        </a>
                        <h3>@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {{ $product->name_en }}
                        @else
                            {{ $product->name_ar }}
                        @endif</h3>
                    </div>
                </div>
                <!-- Item -->
                @endforeach


            </div>
            <!-- Carousel Container -->
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="Container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3 class="HeadPro2"><span class="ArrowsPro2"></span></h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-right">
                        <h2 class="mb-4 clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $productsTypeTwo->product_type_en ?? '' !!}
                        @else
                            {!! $productsTypeTwo->product_type_ar ?? '' !!}
                        @endif</h2>
                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $productsTypeTwo->text_en ?? '' !!}
                        @else
                            {!! $productsTypeTwo->text_ar ?? '' !!}
                        @endif</p>
                    </div>
                </div>
            </div>
            <!-- Carousel Container -->
            <div class="SlickCarouselPro2">
                @foreach ($productsTypeTwo->products as $product)
                <!-- Item -->
                <div class="ProductBlock proItem">
                    <div class="Content" style="background-image:url({{ asset('uploads/products') }}/{{ $product->image }});box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.1);">
                        <a href="#" class="img-fill">
                            <div class="overlay-text pt-5 pr-2 pl-2 text-white">
                                <h2 class="text-white">
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $product->name_en }}
                                @else
                                    {{ $product->name_ar }}
                                @endif
                                </h2>
                                <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $product->desc_en }}
                                @else
                                    {{ $product->desc_ar }}
                                @endif</p>
                            </div>
                        </a>
                        <h3> @if (LaravelLocalization::getCurrentLocale() === 'en')
                            {{ $product->name_en }}
                        @else
                            {{ $product->name_ar }}
                        @endif</h3>
                    </div>
                </div>
                <!-- Item -->
                @endforeach

            </div>
            <!-- Carousel Container -->
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="Container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3 class="HeadPro3"><span class="ArrowsPro3"></span></h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="text-right">
                        <h2 class="mb-4 clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $productsTypeThree->product_type_en ?? '' !!}
                        @else
                            {!! $productsTypeThree->product_type_ar ?? '' !!}
                        @endif</h2>
                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $productsTypeThree->text_en ?? '' !!}
                        @else
                            {!! $productsTypeThree->text_ar ?? '' !!}
                        @endif </p>
                    </div>
                </div>
            </div>
            <!-- Carousel Container -->
            <div class="SlickCarouselPro3">
                @foreach ($productsTypeThree->products as $product)
                <!-- Item -->
                <div class="ProductBlock proItem">
                    <div class="Content" style="background-image:url({{ asset('uploads/products') }}/{{ $product->image }});box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.1);">
                        <a href="#" class="img-fill">
                            <div class="overlay-text pt-5 pr-2 pl-2 text-white">
                                <h2 class="text-white">
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $product->name_en }}
                                @else
                                    {{ $product->name_ar }}
                                @endif
                                </h2>
                                <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $product->desc_en }}
                                @else
                                    {{ $product->desc_ar }}
                                @endif</p>
                            </div>
                        </a>
                        <h3> @if (LaravelLocalization::getCurrentLocale() === 'en')
                            {{ $product->name_en }}
                        @else
                            {{ $product->name_ar }}
                        @endif</h3>
                    </div>
                </div>
                <!-- Item -->
                @endforeach

            </div>
            <!-- Carousel Container -->
        </div>
    </div>
</section>



  @endsection
  @section('scripts')
  <script src="https://kenwheeler.github.io/slick/slick/slick.js" type="text/javascript"></script>


  <script>
      $(document).ready(function () {
          $(".SlickCarouselPro").slick({
              rtl: false, // If RTL Make it true & .slick-slide{float:right;}
              autoplay: true,
              autoplaySpeed: 5000, //  Slide Delay
              speed: 800, // Transition Speed
              slidesToShow: 4, // Number Of Carousel
              slidesToScroll: 1, // Slide To Move
              pauseOnHover: false,
              appendArrows: $(".Container .HeadPro .ArrowsPro"), // Class For Arrows Buttons
              prevArrow: '<span class="Slick-PrevPro"></span>',
              nextArrow: '<span class="Slick-NextPro"></span>',
              easing: "linear",
              responsive: [
              {
                  breakpoint: 1000, settings: {
                      slidesToShow: 3,
                  }
              },
              {
                  breakpoint: 801, settings: {
                      slidesToShow: 2,
                  }
              },
              {
                  breakpoint: 641, settings: {
                      slidesToShow: 2,
                  }
              },
              {
                  breakpoint: 481, settings: {
                      slidesToShow: 1,
                  }
              },
              ],
          })
      })
  </script>
  <script>
      $(document).ready(function () {
          $(".SlickCarouselPro2").slick({
              rtl: false, // If RTL Make it true & .slick-slide{float:right;}
              autoplay: true,
              autoplaySpeed: 5000, //  Slide Delay
              speed: 800, // Transition Speed
              slidesToShow: 4, // Number Of Carousel
              slidesToScroll: 1, // Slide To Move
              pauseOnHover: false,
              appendArrows: $(".Container .HeadPro2 .ArrowsPro2"), // Class For Arrows Buttons
              prevArrow: '<span class="Slick-PrevPro2"></span>',
              nextArrow: '<span class="Slick-NextPro2"></span>',
              easing: "linear",
              responsive: [
              {
                  breakpoint: 1000, settings: {
                      slidesToShow: 3,
                  }
              },
              {
                  breakpoint: 801, settings: {
                      slidesToShow: 2,
                  }
              },
              {
                  breakpoint: 641, settings: {
                      slidesToShow: 2,
                  }
              },
              {
                  breakpoint: 481, settings: {
                      slidesToShow: 1,
                  }
              },
              ],
          })
      })
  </script>
  <script>
      $(document).ready(function () {
          $(".SlickCarouselPro3").slick({
              rtl: false, // If RTL Make it true & .slick-slide{float:right;}
              autoplay: true,
              autoplaySpeed: 5000, //  Slide Delay
              speed: 800, // Transition Speed
              slidesToShow: 4, // Number Of Carousel
              slidesToScroll: 1, // Slide To Move
              pauseOnHover: false,
              appendArrows: $(".Container .HeadPro3 .ArrowsPro3"), // Class For Arrows Buttons
              prevArrow: '<span class="Slick-PrevPro3"></span>',
              nextArrow: '<span class="Slick-NextPro3"></span>',
              easing: "linear",
              responsive: [
              {
                  breakpoint: 1000, settings: {
                      slidesToShow: 3,
                  }
              },
              {
                  breakpoint: 801, settings: {
                      slidesToShow: 2,
                  }
              },
              {
                  breakpoint: 641, settings: {
                      slidesToShow: 2,
                  }
              },
              {
                  breakpoint: 481, settings: {
                      slidesToShow: 1,
                  }
              },
              ],
          })
      })
  </script>
  @endsection

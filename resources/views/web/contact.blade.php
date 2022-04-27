@extends('web.layout.web')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center dir" >
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.contact_us') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.contact_us') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  @if(Session::has('flash_success'))
     <div class="col-lg-12">
         <div class="alert alert-success alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
         <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
         <strong ><i class="fa fa-check-circle"></i> {{session('flash_success') }}</strong>
         </div>
     </div>
 @endif
 @if(Session::has('flash_danger'))
     <div class="col-lg-12">
         <div class="alert alert-danger alert-block {{ LaravelLocalization::getCurrentLocale() === "ar" ? 'text-right' : ''}}">
         <button type="button" id="alertClose" class="close" data-dismiss="alert">×</button>
         <strong ><i class="fa fa-info-circle"></i> {{session('flash_danger')}}</strong>
         </div>
     </div>
 @endif
  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex contact-info dir" >
        <div class="col-md-4 d-flex p-4">
            <div class="align-self-stretch box p-4 text-center">
                <img src="{{ asset('webssets/imgs/2.svg')}}" class="pb-3 h-80" />
                <h3 class="mb-4 clr-blue">{{ __('links.email') }}</h3>
                <p><a href="">{{ $companyContact->email }}</a></p>
            </div>
        </div>
        <div class="col-md-4 d-flex p-4">
            <div class="bg-roz align-self-stretch box p-4 text-center">
                <img src="{{ asset('webssets/imgs/1.svg')}}" class="pb-3 h-80" />
                <h3 class="mb-4 clr-blue">{{ __('links.phone') }}</h3>
              <p><a href="">{!! $companyContact->phones !!}</a></p>
            </div>
        </div>
        <div class="col-md-4 d-flex p-4">
            <div class="align-self-stretch box p-4 text-center">
                <img src="{{ asset('webssets/imgs/3.svg')}}" class="pb-3 h-80" />
                <h3 class="mb-4 clr-blue">{{ __('links.address') }}</h3>
                <p><a href="#">@if (LaravelLocalization::getCurrentLocale() === 'en')
                    {{ $companyContact->address_en }}
                @else
                    {{ $companyContact->address_ar }}
                @endif</a></p>
            </div>
        </div>
      </div>
    </div>
  </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container">
            <div class="row mb-4 dir text-dir" >
                <div class="col-lg-8">
                    <div class="">
                        <h2 class="mb-4 clr-blue">يسعدنا تواصلك معنا</h2>
                        <p> @if (LaravelLocalization::getCurrentLocale() === 'en')
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                 @else
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                        @endif </p>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-stretch no-gutters mb-5 dir text-dir">
                <div class="col-md-6">
                <form action="{{ LaravelLocalization::localizeUrl('/contact-message') }}"
                method="post" >
                @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control " name="name"  type="text"

                                        placeholder="{{ __('links.name') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control " name="email"  type="email"

                                        placeholder=" {{ __('links.email') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="subject"  type="text"

                                placeholder="{{ __('links.subject') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control" name="mobile" id="mobile" type="text"

                                placeholder=" {{ __('links.phone') }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message"  cols="30"
                                rows="6"
                                placeholder="{{ __('links.message') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="{{ __('links.send_msg') }}" class="btn btn-outline mr-3">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch pl-2">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="450" id="gmap_canvas" src="{{$companyContact->google_map }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org">123movies</a><br>
                        <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 450px;
                            width: 100%;
                        }
                        </style><a href="https://www.embedgooglemap.net">google maps iframe code</a>
                        <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 450px;
                            width: 100%;
                        }
                        </style>
                    </div>
                </div>
            </div>

            </div>

        </div>
    </section>


@endsection

@extends('web.layout.web')

@section('content')
    <section class="home-slider owl-carousel"
        style="background-image:url({{ asset('webssets/imgs/3.png') }});box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.1);">
        @foreach ($homeSliders as $slider)
            <div class="slider-item">
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-start"
                        data-scrollax-parent="true">
                        <div class="col-md-7 ftco-animate offset-2">
                            <h2 class="mb-4 text-center clr-yellow">
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {!! $slider->title_en !!}
                                @else
                                    {!! $slider->title_ar !!}
                                @endif
                            </h2>
                            <p class="text-center">
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {!! $slider->text_en !!}
                                @else
                                    {!! $slider->text_ar !!}
                                @endif
                            </p>
                            <!--<p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>-->
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row text-dir dir text-dir" >
                <div class="col-md-6 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="pt-3">
                                <img class="img-about" src="{{ asset('webssets/imgs/1.png') }}" />
                            </div>
                            <div class="pt-3">
                                <img class="img-about" src="{{ asset('webssets/imgs/4.png') }}" />
                            </div>
                        </div>
                        <div class="col-lg-6 pt-4">
                            <div class="pt-3">
                                <img class="img-about" src="{{ asset('webssets/imgs/2.png') }}" />
                            </div>
                            <div class="pt-3">
                                <img class="img-about" src="{{ asset('webssets/imgs/5.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wrap-about py-5 pr-md-4 ftco-animate">
                    <h4>{{ __('links.about_us') }}</h4>
                    <h2 class="mb-4">
                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $company->slog_en ?? '' !!}
                        @else
                            {!! $company->slog_ar ?? '' !!}
                        @endif
                    </h2>
                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                        <p class="text-justify">
                            {!! $company->overview_en !!}
                        </p>
                    @else
                        <p>
                            {!! $company->overview_ar !!}
                        </p>
                    @endif
                    <p><a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="btn btn-more">{{ __('links.show_more') }}</a> <a href="{{ LaravelLocalization::localizeUrl('/contact') }}"
                            class="btn btn-outline mr-3"> {{ __('links.contact_us') }}</a> </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter img" id="section-counter"
        style="background-image: url({{ asset('webssets/imgs/6.png') }});background-position:top left"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-12 heading-section ftco-animate pl-lg-5 pt-5">
                    <div class="row dir text-dir" >
                        <div class="col-lg-3">
                            <h2 class="mb-4 clr-blue">{{ __('links.why_us') }}</h2>
                        </div>
                        <div class="col-lg-7">
                            <p>
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                     @else
                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                            الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                            @endif </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-4 align-items-stretch d-flex">
					<div class="row mt-5 dir text-dir">
                        @isset($whyRows[0])
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                            class="fa-solid fa-truck-ramp-box"></span></div>
                                    <div class="text pr-3">
                                        <h3>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[0]->name_en !!}
                                            @else
                                                {!! $whyRows[0]->name_ar !!}
                                            @endif
                                        </h3>
                                        <p>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[0]->text_en !!}
                                            @else
                                                {!! $whyRows[0]->text_ar !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        @isset($whyRows[1])
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                            class="fa-solid fa-bullhorn"></span></div>
                                    <div class="text pr-3">
                                        <h3>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[1]->name_en !!}
                                            @else
                                                {!! $whyRows[1]->name_ar !!}
                                            @endif
                                        </h3>
                                        <p>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[1]->text_en !!}
                                            @else
                                                {!! $whyRows[1]->text_ar !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        @isset($whyRows[2])
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                            class="fa-solid fa-credit-card"></span></div>
                                    <div class="text pr-3">
                                        <h3>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[2]->name_en !!}
                                            @else
                                                {!! $whyRows[2]->name_ar !!}
                                            @endif
                                        </h3>
                                        <p>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[2]->text_en !!}
                                            @else
                                                {!! $whyRows[2]->text_ar !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        @isset($whyRows[3])
                            <div class="col-lg-6">
                                <div class="services-2 d-flex">
                                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                            class="fa-brands fa-cc-mastercard"></span></div>
                                    <div class="text pr-3">
                                        <h3>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[3]->name_en !!}
                                            @else
                                                {!! $whyRows[3]->name_ar !!}
                                            @endif
                                        </h3>
                                        <p>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {!! $whyRows[3]->text_en !!}
                                            @else
                                                {!! $whyRows[3]->text_ar !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endisset


                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row text-dir" >
                <div class="col-md-4 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img box-shadow2" style="background-image: url({{ asset('uploads/services') }}/{{ $service_one->image ?? '' }});"></div>
                </div>
                <div class="col-md-8 wrap-about py-5 pr-md-4 ftco-animate">
                    <h4>{{ __('links.services') }}</h4>
                    <h2 class="mb-4">@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $service_one->title_en ?? '' !!}
                    @else
                        {!! $service_one->title_ar ?? '' !!}
                    @endif</h2>
                    <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $service_one->text_en ?? '' !!}
                    @else
                        {!! $service_one->text_ar ?? '' !!}
                    @endif</p>
                    <p><a href="{{ LaravelLocalization::localizeUrl('/service') }}" class="btn btn-more">{{ __('links.show_more') }}</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="Container">
                <div class="row dir text-dir">
					<div class="col-lg-6">
						<div class="">
							<h2 class="mb-4 clr-blue">{{ __('links.products') }}</h2>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
							</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4 float-dir">
							<h3 class="Head"><span class="Arrows"></span></h3>
						</div>
					</div>
				</div>
                <!-- Carousel Container -->
                <div class="SlickCarousel">
                    @foreach ($products as $product)
                        <!-- Item -->
                        <div class="ProductBlock proItem">
                            <div class="Content"
                                style="background-image:url({{ asset('uploads/products') }}/{{ $product->image }});box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.1);">
                                <a href="#" class="img-fill">
                                    <div class="overlay-text pt-5 pr-2 pl-2 text-white">
                                        <h2 class="text-white">
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->name_en }}
                                            @else
                                                {{ $product->name_ar }}
                                            @endif
                                        </h2>
                                        <p>
                                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                {{ $product->desc_en }}
                                            @else
                                                {{ $product->desc_ar }}
                                            @endif
                                        </p>
                                    </div>
                                </a>
                                <h3>
                                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                                        {{ $product->name_en }}
                                    @else
                                        {{ $product->name_ar }}
                                    @endif
                                </h3>
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
            <div class="row text-dir" >
                <div class="col-md-4 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img box-shadow2" style="background-image: url({{ asset('uploads/services') }}/{{ $service_two->image ?? '' }});"></div>
                </div>
                <div class="col-md-8 wrap-about py-5 pr-md-4 ftco-animate">
                    <h4>{{ __('links.services') }}</h4>
                    <h2 class="mb-4">@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $service_two->title_en ?? '' !!}
                    @else
                        {!! $service_two->title_ar ?? '' !!}
                    @endif</h2>
                    <p>
                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                            {!! $service_two->text_en ?? '' !!}
                        @else
                            {!! $service_two->text_ar ?? '' !!}
                        @endif</p>
                    <p><a href="{{ LaravelLocalization::localizeUrl('/service') }}" class="btn btn-more">{{ __('links.show_more') }}</a></p>
                </div>
            </div>
        </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4 clr-blue">{{ __('links.partenters') }}</h2>
                        <p>
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                 @else
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                        @endif
                         </p>
                    </div>
                </div>
                <div class="tarkikComandSlider pb-5">
                    @foreach ($partners as $partner)
                    <div class="comandSlider__item mb-5">
                        <div class="pr-3 pl-3">
                            <div class="box-shadow1">
                                <div class="text-center">
                                    <img src="{{ asset('uploads/partners') }}/{{ $partner->logo ?? '' }}" style="width:100%;height:200px" />
                                    <div class="text pt-4 pr-2 pl-2 pb-2 box-hover">
                                        <h3>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $partner->name_en ?? '' !!}
                                        @else
                                            {!! $partner->name_ar ?? '' !!}
                                        @endif</h3>
                                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $partner->description_en ?? '' !!}
                                        @else
                                            {!! $partner->description_ar ?? '' !!}
                                        @endif</p>
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

    <section class="ftco-section bg-1">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-12 heading-section ftco-animate pt-4">
					<div class="row dir text-dir">
						<div class="col-lg-4">
							<h2 class="mb-4 clr-blue">{{__('links.feedback') }}</h2>
						</div>
						<div class="col-lg-8">
							<p>
								Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old
							</p>
						</div>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="tarkikComandSlider1 pb-5">
                    @foreach ($feedBacks as $feedBack)
                    <div class="comandSlider__item mb-2">
                        <div class="pr-3 pl-3">
                            <div class="item-client">
                                <div class="text-right" >
                                    <div class="text pt-4 pr-5 pl-5 pb-2">
                                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {!! $feedBack->feedback_en ?? '' !!}
                                        @else
                                            {!! $feedBack->feedback_ar ?? '' !!}
                                        @endif </p>
                                        <div class="testimony-wrap d-flex">
                                            <div class="user-img"
                                                style="background-image: url({{asset('uploads/feedback')}}/{{$feedBack->image ?? ''}});width:80px;height:80px;border-radius:50%">
                                            </div>
                                            <div class="text mr-2">
                                                <span class="quote d-flex align-items-center justify-content-center">
                                                    <i class="icon-quote-left"></i>
                                                </span>
                                                <p class="name">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {!! $feedBack->name_en ?? '' !!}
                                                @else
                                                    {!! $feedBack->name_ar ?? '' !!}
                                                @endif </p>
                                                <span class="position">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {!! $feedBack->position_en ?? '' !!}
                                                @else
                                                    {!! $feedBack->position_ar ?? '' !!}
                                                @endif </span>
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

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row text-dir" >
                <div class="col-md-4 order-md-last wrap-about wrap-about d-flex align-items-stretch">
                    <div class="img box-shadow2" style="background-image: url({{ asset('uploads/services') }}/{{ $service_three->image ?? '' }});"></div>
                </div>
                <div class="col-md-8 wrap-about py-5 pr-md-4 ftco-animate">
                    <h4>{{ __('links.services') }}</h4>
                    <h2 class="mb-4">@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $service_three->title_en ?? '' !!}
                    @else
                        {!! $service_three->title_ar ?? '' !!}
                    @endif</h2>
                    <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                        {!! $service_three->text_en ?? '' !!}
                    @else
                        {!! $service_three->text_ar ?? '' !!}
                    @endif</p>
                    <p><a href="{{ LaravelLocalization::localizeUrl('/service') }}" class="btn btn-more">{{ __('links.show_more') }}</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row dir text-dir">
				<div class="col-md-4 course ftco-animate">
					<div class="text pt-4 text-justify">
                        <h1><a href="#" class="clr-blue">{{ __('links.blogs') }}</a></h1>
                        <p>
                            @if (LaravelLocalization::getCurrentLocale() === 'en')
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                 @else
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                        @endif </p>
                    </div>
                </div>
                @foreach ($blogs as $blog)
                <div class="col-md-4 course ftco-animate">
                    <div class="box-shadow1">
                        <div class="img" style="background-image: url({{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }});"></div>
                        <div class="text pt-4 box-hover">
                            <h3><a href="#" class="clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                {!! $blog->title_en ?? '' !!}
                            @else
                                {!! $blog->title_ar ?? '' !!}
                            @endif</a></h3>
                            <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                {!! str_limit($blog->text_en ?? '', $limit = 100, $end = '...') !!}
                            @else
                                {!! str_limit($blog->text_ar ?? '', $limit = 100, $end = '...') !!}
                            @endif</p>
                            <!--<p><a href="#" class="btn btn-primary">Apply now</a></p>-->
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>



@endsection

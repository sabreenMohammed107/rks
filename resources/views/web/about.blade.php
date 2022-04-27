@extends('web.layout.web')

@section('content')

    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('webssets/imgs/25.png') }}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center dir">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ __('links.about_us') }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a
                                href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span>
                        <span>{{ __('links.about_us') }} <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex dir">
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
                <div class="col-md-6 wrap-about py-5 pr-md-4 ftco-animate text-dir">
                    <h4> {{ __('links.about_us') }}</h4>
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
                                        <div class="row dir text-dir">
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

                            @endif</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 offset-4 align-items-stretch d-flex">
                    <div class="row mt-5 text-dir">
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

    <section class="ftco-section">
        <div class="container">
            <div class="Container">
                <div class="row dir text-dir">
                    <div class="col-lg-6">
                        <div class="">
                            <h2 class="mb-4 clr-blue">{{ __('links.partenters') }}</h2>
                            <p> @if (LaravelLocalization::getCurrentLocale() === 'en')
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                     @else
                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                            الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                            @endif </p>
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
                    @foreach ($partners as $partner)
                        <!-- Item -->
                        <div class="ProductBlock proItem">
                            <div class="pr-3 pl-3">
                                <div class="border-roz">
                                    <div class="text-center">
                                        <img src="{{ asset('uploads/partners') }}/{{ $partner->logo ?? '' }}"
                                            style="width:100%;height:200px" />
                                        <div class="text pt-4 pr-2 pl-2 pb-2 bg-roz">
                                            <h4>
                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {!! $partner->name_en ?? '' !!}
                                                @else
                                                    {!! $partner->name_ar ?? '' !!}
                                                @endif
                                            </h4>
                                            <p>
                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {!! $partner->description_en ?? '' !!}
                                                @else
                                                    {!! $partner->description_ar ?? '' !!}
                                                @endif
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item -->
                    @endforeach
                </div>
                <!-- Carousel Container -->
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row dir text-dir">
                <div class="col-lg-6">
                    <div class="">
                        <h2 class="mb-4 clr-blue">{{ __('links.our_team') }}</h2>
                        <p> @if (LaravelLocalization::getCurrentLocale() === 'en')
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                 @else
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                        الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                        @endif</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mt-4">
                        <h3 class="Head"><span class="Arrows"></span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="tarkikComandSlider pb-5">
                    @foreach ($teams as $team)
                        <div class="comandSlider__item mb-5">
                            <div class="pr-3 pl-3">
                                <div class="staff">
                                    <div class="img-wrap d-flex align-items-stretch">
                                        <div class="img align-self-stretch"
                                            style="background-image: url({{ asset('uploads/teams') }}/{{ $team->image ?? '' }});">
                                        </div>
                                    </div>
                                    <div class="text pt-3 dir dir-text">
                                        <div class="staff-data">
                                            <h3 class="clr-blue">
                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {{ $team->name_en }}
                                                @else
                                                    {{ $team->name_ar }}
                                                @endif
                                            </h3>
                                            <p class="pl-3"></p>
                                            <p class="title-about">
                                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                                    {{ $team->position_en }}
                                                @else
                                                    {{ $team->position_ar }}
                                                @endif
                                            </p>
                                            <div class="faded">
                                                <ul class="ftco-social text-center">
                                                    <li class="ftco-animate"><a target="_blank"
                                                            href="{{ $team->twitter }}"><span
                                                                class="fa-brands fa-twitter"></span></a></li>
                                                    <li class="ftco-animate"><a target="_blank"
                                                            href="{{ $team->facebook }}"><span
                                                                class="fa-brands fa-facebook-f"></span></a></li>
                                                    <li class="ftco-animate"><a target="_blank"
                                                            href="{{ $team->instagram }}"><span
                                                                class="fa-brands fa-instagram"></span></a></li>
                                                </ul>
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
    <section class="ftco-section bg-1">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-12 heading-section ftco-animate pt-4">
					<div class="row dir text-dir">
						<div class="col-lg-4">
							<h2 class="mb-4 clr-blue">{{__('links.feedback') }}</h2>
						</div>
						<div class="col-lg-8">
							<p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                                     @else
                            خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني
                            الكلاسيكي منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك

                            @endif
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
            <div class="row text-dir">
                <div class="col-lg-6">
                    <div class="">
                <h2 class="mb-4 clr-blue mt-3">{{ __('links.certificate') }}</h2>
                <p> @if (LaravelLocalization::getCurrentLocale() === 'en')

                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical

                @else
                نهتم في مؤسسة RKS بتوثيق شهاداتنا في مختلف المجالات مع الجهات الحكومية

                والزراعية واصحاب الأراضى للحصول على توثيقات كاملة على عملنا في اطار قانونى

                @endif</p>
            </div>
        </div>
                <div class="col-lg-6">
                    <div class="Container">
                        <h3 class="Head2" style="display:none"><span class="Arrows"></span></h3>
                        <!-- Carousel Container -->
                        <div class="SlickCarousel1">
                            @foreach ($contracts as $contract)
                                <!-- Item -->
                                <div class="ProductBlock serItem">
                                    <div class="Content"
                                        style="background-image:url({{ asset('uploads/contracts') }}/{{ $contract->image ?? '' }});">
                                        <div class="img-fill">
                                        </div>
                                    </div>
                                    <h3>
                                        @if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {{ $contract->title_en }}
                                        @else
                                            {{ $contract->title_ar }}
                                        @endif
                                    </h3>
                                </div>
                                <!-- Item -->
                            @endforeach


                        </div>
                        <!-- Carousel Container -->
                    </div>
                </div>
            </div>

        </div>
    </section>




@endsection

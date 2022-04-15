@extends('web.layout.web')

@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ asset('webssets/imgs/25.png') }}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" dir="rtl">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">{{ __('links.experance') }}</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a
                                href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span>
                        <span>{{ __('links.experance') }}<i class="ion-ios-arrow-forward"></i></span></p>
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
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4 clr-blue">نصائح عامة</h2>
                    <p>
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي
                        منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك
                    </p>
                </div>
            </div>
            <div class="row" dir="rtl">
                <div class="col-lg-12 ftco-animate">
                    <div class="row" id="loadData">
                        <?php
                        $last_id = 0;
                        ?>
                        @foreach ($services as $row)
                            <div class="col-lg-6">
                                <div class="about-author d-flex mb-4">
                                    <div class="bio">
                                        <div class="img img-video d-flex align-items-center pro-img"
                                            style="background-image: url({{asset('uploads/services')}}/{{$row->image}});">
                                            <div class="video justify-content-center">
                                                <a href="{{$row->vedio}}"
                                                    class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                                    <span class="fa-solid fa-play"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="desc text-right pr-2 pl-2 block-blog">
                                        <h3 class="clr-blue pb-2 pt-3">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {{ $row->title_en }}
                                        @else
                                            {{ $row->title_ar }}
                                        @endif</h3>
                                        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                            {{ $row->text_en }}
                                        @else
                                            {{ $row->text_ar }}
                                        @endif </p>
                                    </div>
                                </div>
                            </div>
                            <?php $last_id = $row->id ;
                            ?>
                            @endforeach
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5" style="margin-left: 10rem;" dir="rtl">
                <input type="text" style="opacity: 0;" id="last" value="{{$last_id}}">
                    @if(count($services) >= 1 && count($allRows) > count($services))
                    <button id="loadBtn" onclick="loadMoreData(document.getElementById('last').value);" class="btn btn-more">  المـزيد</button>
             @endif
            </div>
        </div>
    </section>

    <section class="ftco-section contact-section bg-1">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4 clr-blue">استشير متخصص</h2>
                    <p>
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي
                        منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك
                    </p>
                </div>
            </div>
            <div class="row d-flex align-items-stretch no-gutters mb-5" dir="rtl">
                <div class="col-md-12 pl-5">
                    <form  class="advices-form" action="{{ LaravelLocalization::localizeUrl('/experience-message') }}"
                    method="post" >
                    @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name"  type="text"

                                            placeholder="{{ __('links.name') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email"

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
                                            <input type="tel" class="form-control" name="mobile" id="mobile"

                                            placeholder=" {{ __('links.phone') }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" id="" cols="30" rows="4" class="form-control" placeholder="{{ __('links.message') }}"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="submit" value="{{ __('links.send_msg') }}" class="btn btn-more">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4 clr-blue">نصائح زراعيه</h2>
                    <p>
                        خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب اللاتيني الكلاسيكي
                        منذ العام قبل الميلاد، مما يجعله أكثر من عام في القدم. قام البروفيسور ريتشارد ماك
                    </p>
                </div>
            </div>
            <div id="loadDataAdvices" class="row" dir="rtl">
                <?php
                $lastdevice_id =0 ;
               ?>

                @foreach ($advices as $row)
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="border-roz">
                        <div class="text-center">
                            <img src="{{asset('uploads/services')}}/{{$row->image}}" class="partner-img" />
                            <div class="text pt-4 pr-2 pl-2 pb-2  box-hover">
                                <h4><a href="#" class="clr-blue">@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $row->title_en }}
                                @else
                                    {{ $row->title_ar }}
                                @endif</a></h4>
                                <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
                                    {{ $row->text_en }}
                                @else
                                    {{ $row->text_ar }}
                                @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $lastdevice_id = $row->id ;
                ?>
                @endforeach
            </div>
                <div class="row justify-content-center mt-5" style="margin-left: 10rem;" dir="rtl">
                    <input type="text" style="opacity: 0;" id="lastdevice" value="{{$lastdevice_id}}">
                                @if(count($advices) >= 1 && count($allAdvices) > count($advices))
                        <button id="loadBtnAdvice" onclick="loadMoreAdvices(document.getElementById('lastdevice').value);" class="btn btn-more">  المـزيد</button>
                 @endif
            </div>
        </div>
    </section>
@endsection


@section('scripts')
<script>
    function loadMoreAdvices(id){
        $.ajax({
    url: '{{url("load-advices-experience")}}',
    data: {
        id:id,
    },

    type: "POST",
    headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
    success: function(data){
      $('#loadDataAdvices').append(data.output);
        document.getElementById('lastdevice').value=data.lastdevice_id;
        if(data.lastdevice_id <= 1){

            document.getElementById('loadBtnAdvice').style.display='none';
        }else{

            document.getElementById('loadBtnAdvice').style.display='block';
        }

    },
    error: function(){
          document.getElementById('loadBtnAdvice').style.display='none';
     }

    });
    }
    function loadMoreData(id){
$.ajax({
    url: '{{url("load-data-experience")}}',
    data: {
        id:id,
    },

    type: "POST",
    headers: {
        'X-CSRF-Token': '{{ csrf_token() }}',
    },
    success: function(data){

      $('#loadData').append(data.output);
        document.getElementById('last').value=data.last_id;
        if(data.last_id <= 1){

            document.getElementById('loadBtn').style.display='none';
        }else{

            document.getElementById('loadBtn').style.display='block';
        }

    },
    error: function(){

          document.getElementById('loadBtn').style.display='none';
     }

    });
}
</script>
@endsection

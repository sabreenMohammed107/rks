@extends('web.layout.web')
@section('style')
<link rel="stylesheet" href="{{ asset('webssets/css/magnific-popup.css')}}">

@endsection
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('webssets/imgs/25.png')}}');box-shadow:inset 0 0 0 2000px rgba(13, 27, 62, 0.5);">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center dir" >
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">{{ __('links.gallery') }}</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }} / </a></span> <span>{{ __('links.gallery') }} <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

<section class="pt-5 pb-5 portfolio section">
    <div class="container">
        <div class="row dir text-dir">
            <div class="col-lg-2">
                <div class="filters ">
                    <ul>
                        <li class="active" data-filter="*">كل الصور</li>
                        @foreach ($categories as $row)


                        <li class="list col bg-cat2" data-filter=".{{ $row->id }}" >{{ $row->category_ar ?? '' }}
                        </li>

                    @endforeach
                    <li data-filter=".video" class="bg-cat2"  >فيديو</li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-10">
          <div class="filters-content">
              <div class="row grid" dir="rtl">
                @foreach ($galleries as $row)

                <div
                    class="col-sm-3  all @if ($row->type == 1)
                    images
                @else
                video
                @endif {{ $row->cat->id ?? '' }}">
                      <div class="item">

                          @if ($row->type == 1)
                          <a href="{{ asset('uploads/categories') }}/{{ $row->path }}" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{asset('uploads/categories') }}/{{$row->path}}');">
                            <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="fa-solid fa-image"></span>
                            </div>
                          </a>
                          @else

                          <a class="gallery image-popup img d-flex align-items-center" href="{{ $row->path }}">


                                <iframe src="{{ $row->path }}" style=" width: 100%;
                                    height: 100%;
                                    position: absolute;
                                    object-fit: cover;
                                    z-index: 0;" frameborder="0"></iframe>
                                <div>
                                    <i class="fa fa-play text-white fz-18"></i>
                                </div>

                        </a>
                    @endif
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
            </div>
        </div>

    </div>

</section>

@endsection

@section('scripts')

<script src="{{ asset('webssets/js/google-map.js')}}"></script>
<script>

$(function(){

    // $('.bg-cat1').click(function(){
    //     $('iframe').attr('src', $('iframe').attr('src'));
    // });
    // $('.bg-cat2').click(function(){
    //     $('iframe').attr('src', $('iframe').attr('src'));
    // });
});
</script>

@endsection

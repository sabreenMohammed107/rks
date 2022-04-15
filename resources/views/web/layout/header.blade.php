<div class="bg-top navbar-light top-header">
    <div class="container">
        <div class="row no-gutters d-flex align-items-center align-items-stretch" dir="rtl">
            <div class="col-lg-3 col-md-6 d-flex align-items-center py-3">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('webssets/imgs/logo.png')}}" /></a>
            </div>
            <div class="col-lg-9 col-md-6 d-block pt-4 top-links">
                <div class="row d-flex pt-1">
                    <div class="col-md topper d-flex align-items-center justify-content-end">
                        <p class="mb-0 bl-1">
                            <a href="#">Active Group</a>
                        </p>
                        <p class="mb-0">
                            <a href="{{ LaravelLocalization::localizeUrl('/experience') }}">{{ __('links.experance') }}</a>
                        </p>
                        {{-- <p class="mb-0">
                            <a href="#">عربى</a>
                        </p> --}}
                        <i class="mb-0 pr-4 ">
                            <a href="{{ $companyContact->facebook }}"class="hvr-icon-spin"><span class="fa-brands fa-facebook-f hvr-icon"></span></a>
                        </i>
                        <i class="mb-0">
                            <a href="{{ $companyContact->twitter }}"class="hvr-icon-spin"><span class="fa-brands fa-twitter hvr-icon"></span></a>
                        </i>
                        <i class="mb-0">
                            <a href="{{ $companyContact->instagram }}"class="hvr-icon-spin"><span class="fa-brands fa-instagram hvr-icon"></span></a>
                        </i>
                    </div>
                </div>
            </div>
        </div>
      </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa-solid fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav" style="border-bottom:2px solid;">
        <ul class="navbar-nav" dir="rtl">
            <li class="nav-item active"><a href="{{ LaravelLocalization::localizeUrl('/') }}" class="nav-link">{{ __('links.home') }}</a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/about') }}" class="nav-link"> {{ __('links.about_us') }}</a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/service') }}" class="nav-link">{{ __('links.services') }}</a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/products') }}" class="nav-link">{{ __('links.products') }}</a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/partners') }}" class="nav-link"> {{ __('links.partenters') }} </a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/blog') }}" class="nav-link">{{ __('links.blogs') }}</a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/gallery') }}" class="nav-link"> {{ __('links.gallery') }}</a></li>
            <li class="nav-item"><a href="{{ LaravelLocalization::localizeUrl('/contact') }}" class="nav-link"> {{ __('links.contact_us') }}</a></li>
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->

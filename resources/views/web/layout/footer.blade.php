<footer class="ftco-footer footer-bg">
    <div class="container">
        <div class="row dir text-dir" >
            <div class="col-lg-5 col-md-6">
                <div class="ftco-footer-widget mb-5 pl-5">
                    <h2 class="ftco-heading-2 clr-yellow">RKS للاستيراد والتصدير</h2>
                    <p>
                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                    {!! str_limit( $company->overview_en ?? '', $limit = 220, $end = '..') !!}
                @else
                    {!! str_limit($company->overview_ar ?? '', $limit = 220, $end = '..') !!}
                @endif

                </p>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <ul class="ftco-footer-social list-unstyled float-x-dir mt-3 p-0-dir ml-5">
                        <li class="ftco-animate"><a target="_blank" href="{{ $companyContact->facebook }}"class="hvr-icon-spin"><span class="fa-brands fa-facebook-f clr-yellow hvr-icon"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="{{ $companyContact->twitter }}"class="hvr-icon-spin"><span class="fa-brands fa-twitter clr-yellow hvr-icon"></span></a></li>
                        <li class="ftco-animate"><a target="_blank" href="{{ $companyContact->instagram }}"class="hvr-icon-spin"><span class="fa-brands fa-instagram clr-yellow hvr-icon"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2 clr-yellow">لنكات تهمك</h2>
                    <ul class="list-unstyled pr-0">
                        <li><a href="{{ LaravelLocalization::localizeUrl('/') }}">{{ __('links.home') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/about') }}"> {{ __('links.about_us') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/products') }}">{{ __('links.products') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/service') }}">{{ __('links.services') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }}">{{ __('links.contact_us') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2 o-0">.</h2>
                    <ul class="list-unstyled pr-0">
                        <li><a href="{{ LaravelLocalization::localizeUrl('/blog') }}">{{ __('links.blogs') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/partners') }}">{{ __('links.partenters') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/gallery') }}">{{ __('links.gallery') }}</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/experience') }}">{{ __('links.experance') }}</a></li>
                        <li><a href="#">Active Group</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 clr-yellow">تواصل معنا</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="#"><span class="fa-solid fa-phone-flip pl-3 clr-yellow"></span><span class="text"> {!! $companyContact->phones !!} </span></a></li>
                            <li><a href="#"><span class="fa-solid fa-envelope pl-3 clr-yellow"></span><span class="text">{{ $companyContact->email }}</span></a></li>
                            <li><a href="#"><span class="fa-solid fa-location-dot pl-3 clr-yellow"></span><span class="text">
                                @if (LaravelLocalization::getCurrentLocale() === 'en')
                                {{ $companyContact->address_en }}
                            @else
                                {{ $companyContact->address_ar }}
                            @endif</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved to <a href="#">RKS</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<footer class="ftco-footer footer-bg">
    <div class="container">
        <div class="row text-right" dir="rtl">
            <div class="col-lg-5 col-md-6">
                <div class="ftco-footer-widget mb-5 pl-5">
                    <h2 class="ftco-heading-2 clr-yellow">RKS للاستيراد والتصدير</h2>
                    <p>
                    @if (LaravelLocalization::getCurrentLocale() === 'en')
                    {!! str_limit( $company->overview_en ?? '', $limit = 200, $end = '') !!}
                @else
                    {!! str_limit($company->overview_ar ?? '', $limit = 200, $end = '') !!}
                @endif

                </p>
                </div>
                <div class="ftco-footer-widget mb-5">
                    <ul class="ftco-footer-social list-unstyled float-md-right mt-3 pr-0">
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
                        <li><a href="#">منتجات الاسمدة</a></li>
                        <li><a href="#">منتجات المبيدات</a></li>
                        <li><a href="#">منتجات منظمة النمو</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2 o-0">.</h2>
                    <ul class="list-unstyled pr-0">
                        <li><a href="#">شهادتنا</a></li>
                        <li><a href="#">العقود والشراكة</a></li>
                        <li><a href="#">سياسة المستخدم</a></li>
                        <li><a href="#">الاسئلة الشائعة</a></li>
                        <li><a href="{{ LaravelLocalization::localizeUrl('/contact') }}">{{ __('links.contact_us') }}</a></li>
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

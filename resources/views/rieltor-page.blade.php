@extends('layouts.master')
@section('content')
<section id="rieltors">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Rieltorlar</a>
        </div>
    </div>
    <div class="container rieltor-area">
        <div class="d-flex flex-column flex-lg-row">
            <div class="rieltor-page-img m-auto m-lg-0"><img src="{{asset('frontend/IMAGE/rieltor-1.png')}}" alt=""></div>
            <div class="rieltor-area-right">
                <div class="rieltor-name">Əli Abbasov</div>
                <div class="rieltor-place"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt=""><span class="ms-4">3-cu yer</span></div>
                <div>
                    <div class="rieltor-page-tablist tablist">
                        <div class="rieltor-page-tab tab tab-active" data-id="0">Məlumatlar</div>
                        <div class="rieltor-page-tab tab" data-id="1">Foto Qalareya</div>
                        <div class="rieltor-page-tab tab" data-id="2">Elanlar</div>
                    </div>
                    <div class="rieltor-page-tab-content tab-content content-active" id="0">
                        <div>
                            <div class="rieltor-page-info-title">Mobil 3</div>
                            <div class="rieltor-page-info-title-value">
                                <div>+994 50 888 18 23</div>
                                <div>+994 50 888 18 22</div>
                                <div>+994 50 888 18 21</div>
                            </div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">Çalışdığı şirkət</div>
                            <div class="rieltor-page-info-title-value">Premium Əmlak</div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">Doğum tarixi</div>
                            <div class="rieltor-page-info-title-value">16.01.1988</div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">Təhsil</div>
                            <div class="rieltor-page-info-title-value">Ali</div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">Dil bilikləri</div>
                            <div class="rieltor-page-info-title-value">Azərbaycan dili - əla, rus dili - orta</div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">İş stajı</div>
                            <div class="rieltor-page-info-title-value">3-5 il</div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">Çalışdığı ərazi</div>
                            <div class="rieltor-page-info-title-value">Səbail ray., Sahil m. | Binəqədi ray,. 7-ci mkr.</div>
                        </div>
                        <div>
                            <div class="rieltor-page-info-title">Elan sayı</div>
                            <div class="rieltor-page-info-title-value">243 (2016-2021)</div>
                        </div>
                    </div>
                    <div class="rieltor-page-tab-content tab-content" id="1">
                        <div class="grid-gallery">
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-1.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-2.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-3.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-4.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-5.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-6.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-7.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-8.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-9.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-10.png')}}" alt=""></div>
                            <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-11.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="rieltor-page-tab-content tab-content" id="2"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="serial-card">
            <div class="card-serial-title">Oxşar Rieltorlar</div>
            <div class="owl-carousel owl-rieltor-carousel">
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-1.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Ataxan Zəkiyev</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-2.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Hüseyn Əliyev</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-3.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Ceyhun Heydərov</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-4.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Mirağa Məmmədli</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-5.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Abdulla Hüseyn</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-4.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Orxan Sultanov</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-5.png')}}" alt=""></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Əli Abbasov6</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-2.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Əli Abbasov</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-3.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Əli Abbasov</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="grid-rieltor-item">
                        <div class="rieltor-grid-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-6.png')}}" alt=""></a></a></div>
                        <div class="rieltor-grid-info">
                            <a href="{{route("rieltorpage")}}" class="rieltor-grid-name">Əli Abbasov</a>
                            <div class="rieltor-grid-place">
                                3-cu yer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container position-relative">
                <div class="owl-rieltor-count">
                    <span class="current-owl-page">1</span>
                    <span class="total-owl-page"></span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

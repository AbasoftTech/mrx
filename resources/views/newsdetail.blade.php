@extends('layouts.master')
@section('content')
<section id="news">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Xəbərlər</a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between">
            {{-- news block starts --}}
            <div class="news-detail-block">
                <h1 class="news-detail-title">
                    “Çoxları müharibənin əyləncə olduğunu düşünürdü" - Jirayr Libaridyan, Ermənistanın məğlubiyyəti və Qarabağın gələcəyi barədə</h1>
                <div class="d-flex mt-4">
                    <div class="news-head-date">2 Dekabr 2020</div>
                    <div class="media-category media-c-3 ms-4"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
                </div>
                <div class="news-img">
                    <img src="{{asset('frontend/IMAGE/news-head.png')}}" alt="">
                </div>
                <h2 class="subtitle">
                    Türkiyənin Azərbaycanın tərəfində Qarabağ münaqişəsinə müdaxiləsi həm mütəxəssislər, həm də siyasətçilər üçün gözlənilməz oldu. Türkiyə pilotsuz təyyarələrindən istifadə Azərbaycana döyüş meydanında üstünlük verdi, müharibədə qalib gəlməyə kömək etdi.
                </h2>
                <p class="news-text">Ancaq hələ sentyabr ayının əvvəllərində belə bir perspektiv barədə xəbərdarlıq edən bir şəxs var idi. Bu, erməni diplomatiyasının veteranı, ilk Ermənistan prezidentinin müşaviri, 1991-1997-ci illərdə Qarabağ danışıqlarında iştirak etmiş Jirayr Libaridyan idi.</p>
                <p class="news-text">Jirayr Libaridyan yeni reallıqlarda Rusiyanın erməni tərəfindən güzəştlər tələb edəcəyini də proqnozlaşdırırdı. Rəsmi Yerevandan fərqli olaraq, o, Ermənistanın məğlubiyyətini erməni diplomatiyasının səhvləri, siyasətçilərin son 30 ildə yaydığı və cəmiyyətin qəbul etdiyi yanlış gözləntilərlə izah edir.</p>
            </div>
            {{-- news blcok ends --}}
            {{-- news sidebar starts --}}
            <div class="news-sidebar">
                <h3 class="news-sidebar-block-title">Ən Çox Oxunanlar</h3>
                <div class="news-sidebar-holder">
                    <div>
                        <p><a href="" class="news-sidebar-title">Füzuli sakini: "Yaddaşımda olanları xatırlayıb tapıram ki, hansı evdən sonra hara gəlir"</a></p>
                        <div class="news-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ms-3">02 Yanvar 2021</span>
                        </div>
                    </div>
                </div>
                <div class="news-sidebar-holder">
                    <div>
                        <p><a href="" class="news-sidebar-title">Füzuli sakini: "Yaddaşımda olanları xatırlayıb tapıram ki, hansı evdən sonra hara gəlir"</a></p>
                        <div class="news-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ms-3">02 Yanvar 2021</span>
                        </div>
                    </div>
                </div>
                <div class="news-sidebar-holder">
                    <div>
                        <p><a href="" class="news-sidebar-title">Füzuli sakini: "Yaddaşımda olanları xatırlayıb tapıram ki, hansı evdən sonra hara gəlir"</a></p>
                        <div class="news-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ms-3">02 Yanvar 2021</span>
                        </div>
                    </div>
                </div>
                <div class="news-sidebar-holder">
                    <div>
                        <p><a href="" class="news-sidebar-title">Füzuli sakini: "Yaddaşımda olanları xatırlayıb tapıram ki, hansı evdən sonra hara gəlir"</a></p>
                        <div class="news-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ms-3">02 Yanvar 2021</span>
                        </div>
                    </div>
                </div>
                <div class="news-sidebar-holder">
                    <div>
                        <p><a href="" class="news-sidebar-title">Füzuli sakini: "Yaddaşımda olanları xatırlayıb tapıram ki, hansı evdən sonra hara gəlir"</a></p>
                        <div class="news-date">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="ms-3">02 Yanvar 2021</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- news sidebar ends --}}
        </div>
    </div>
    {{-- news detail gallery starts --}}

    <div class="container">
        <div class="news-grid-gallery">
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
    {{-- news detail gallery ends --}}

    {{-- news detail slider starts --}}
    <div class="container news-detail-owl">
        <div class="serial-card">
            <div class="owl-carousel owl-news-detail-carousel">
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="owl-news-detail-box">
                        <div class="owl-news-detail-img"><a href="{{route("rieltorpage")}}"><img src="{{asset('frontend/IMAGE/similar-news.png')}}" alt=""></a></a></div>
                        <div class="owl-news-detail-info">
                            <a href="{{route("rieltorpage")}}" class="news-sidebar-title">Azərbaycanda və Ermənistanda
                            Covid-19 niyə bu qədər yayıldı?</a>
                            <div class="owl-news-detail-intro">
                                Çindən dünyaya yayılmış Covid-19 pandemiyasının səbəbləri barədə məlumatlar indiyədək bir mənalı dəyərləndirilmir.
                            </div>
                            <div class="news-date">
                                <i class="fas fa-calendar-alt"></i>
                                <span class="ms-3">02 Yanvar 2021</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="container position-relative">
                <div class="owl-rieltor-count">
                    <span class="current-owl-page">1</span>
                    <span class="total-owl-page"></span>
                </div>
            </div>
        </div>
    </div>
    {{-- news detail slider ends--}}
</section>
@endsection

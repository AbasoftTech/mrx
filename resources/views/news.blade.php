@extends('layouts.master')
@section('content')
<section id="news">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Haqqımızda</a>
        </div>
    </div>
    <div class="container">
        <h2 class="block--title">Media</h2>
        <div class="grid-card">
            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            <img src="{{asset("frontend/IMAGE/media-img.png")}}" alt="media-img">
                            <div class="media-title"><a href="{{route("newsdetail")}}">Gələn il ünvanlı sosial yardım üçün 257 000 manat ayrılacaq</a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            <div class="fade-box"></div>
                        </p>
                        <div class="media-footer">
                            <div class="media-category media-c-1"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-1.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="{{route("newsdetail")}}">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            <img src="{{asset("frontend/IMAGE/media-img-2.png")}}" alt="media-img">
                            <div class="media-title"><a href="{{route("newsdetail")}}">Gələn il ünvanlı sosial yardım üçün 257 000 manat ayrılacaq</a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        <div class="media-footer">
                            <div class="media-category media-c-2"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-2.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="{{route("newsdetail")}}">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            <img src="{{asset("frontend/IMAGE/media-img-3.png")}}" alt="media-img">
                            <div class="media-title"><a href="{{route("newsdetail")}}">Gələn il ünvanlı sosial yardım üçün 257 000 manat ayrılacaq</a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        <div class="media-footer">
                            <div class="media-category media-c-3"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="{{route("newsdetail")}}">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            <img src="{{asset("frontend/IMAGE/media-img-3.png")}}" alt="media-img">
                            <div class="media-title"><a href="{{route("newsdetail")}}">Gələn il ünvanlı sosial yardım üçün 257 000 manat ayrılacaq</a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        <div class="media-footer">
                            <div class="media-category media-c-3"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="{{route("newsdetail")}}">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            <img src="{{asset("frontend/IMAGE/media-img-3.png")}}" alt="media-img">
                            <div class="media-title"><a href="{{route("newsdetail")}}">Gələn il ünvanlı sosial yardım üçün 257 000 manat ayrılacaq</a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        <div class="media-footer">
                            <div class="media-category media-c-3"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="{{route("newsdetail")}}">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            <img src="{{asset("frontend/IMAGE/media-img-3.png")}}" alt="media-img">
                            <div class="media-title"><a href="{{route("newsdetail")}}">Gələn il ünvanlı sosial yardım üçün 257 000 manat ayrılacaq</a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
                        <div class="media-footer">
                            <div class="media-category media-c-3"><a href="{{route("newsdetail")}}"><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-pagination">
            <span>
                <a href="">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
            </span>
            <a href="" class="next-page">Növbəti</a>
        </div>
    </div>
</section>
@endsection

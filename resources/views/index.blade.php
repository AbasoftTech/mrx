@extends('layouts.master')
@section('content')
{{-- slider section --}}
{{-- @php
$arr = ['fddf', 'ed', 'ds', 'ds'];
@endphp
@for($i=0;$i < count($arr); $i++)
<div>{{$arr[$i]}}</div>
@endfor --}}


<section id="indexSlider">
    {{-- owl-carousel-index --}}
    <div class="position-relative">
        <div class="owl-carousel owl-index-carousel">
            <div class="item">
                <div class="item-bg" style="background-image:url('{{asset("frontend/IMAGE/slider.png")}}')">
                    <div class="container">
                        <div class="owl-index-text-box">
                            <h1 class="owl-index-title">Lorem ipsum dolor sit amet cons one!</h1>
                            <p class="owl-index-subtitle">Consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua. <br> Ut enim ad minim veniam, quis <br> nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-bg" style="background-image:url('{{asset("frontend/IMAGE/slider-2.jpg")}}')">
                    <div class="container">
                        <div class="owl-index-text-box">
                            <h1 class="owl-index-title">Lorem ipsum dolor sit amet cons two!</h1>
                            <p class="owl-index-subtitle">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-bg" style="background-image:url('{{asset("frontend/IMAGE/slider-3.jpeg")}}')">
                    <div class="container">
                        <div class="owl-index-text-box">
                            <h1 class="owl-index-title">Lorem ipsum dolor sit amet cons three!</h1>
                            <p class="owl-index-subtitle">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pe-3 pe-sm-0 d-flex justify-content-end d-sm-block">
            <div class="count">
                <div class="total-count">/ 03</div>
                <div class="per-count">01</div>
            </div>
        </div>
    </div>
    {{-- owl-carousel-index --}}
</section>
{{-- slider section --}}

{{-- index content section --}}
<section id="indexContent">
    {{-- about us --}}
    <div class="about--us">
        <div class="container">
            <div class="about--us-container">
                <div class="about--us-container-left-child">
                    <h2 class="block--title d-none d-lg-block">Haqqımızda</h2>
                    <p class="about--us--subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.</p>
                    <div class="about--us--more--details"><a href="{{route("about")}}">— Daha Ətraflı</a></div>
                </div>
                <div class="about--us-container-right-child">
                    <div class="play-now">
                        <img src="{{asset("frontend/IMAGE/icons/play.svg")}}" alt="">
                    </div>
                    <img src="{{asset("frontend/IMAGE/about-us-img.png")}}" alt="">
                </div>
                <h2 class="block--title block--title-mobile">Haqqımızda</h2>
            </div>
        </div>
    </div>
    {{-- about us --}}
    {{-- media --}}
    <div class="media">
        <div class="container">
            <h2 class="block--title text-center">Media</h2>
            <div class="owl-carousel owl-media-carousel" dots="true">
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
                                <div class="media-category media-c-1"><a href=""><img src="{{asset("frontend/IMAGE/icons/media-dot-1.svg")}}" alt="">Kateqoriya 1</a></div>
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
                                <div class="media-category media-c-2"><a href=""><img src="{{asset("frontend/IMAGE/icons/media-dot-2.svg")}}" alt="">Kateqoriya 1</a></div>
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
                                <div class="media-category media-c-3"><a href=""><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
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
                                <div class="media-category media-c-3"><a href=""><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
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
                                <div class="media-category media-c-3"><a href=""><img src="{{asset("frontend/IMAGE/icons/media-dot-3.svg")}}" alt="">Kateqoriya 1</a></div>
                                <div class="media-more-details"><a href="{{route("newsdetail")}}">Ətraflı</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- media --}}
</section>
{{-- index content section --}}

@endsection

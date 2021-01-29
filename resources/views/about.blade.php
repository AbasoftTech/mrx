@extends('layouts.master')
@section('content')
<section id="about">
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
        <h1 class="block--title">Haqqımızda</h1>
        <div class="about-page-block">
            <div class="about-page-left">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est.
                </p>
            </div>
            <div class="about-page-right">
                <div><img src="{{asset('frontend/IMAGE/about-right-block.png')}}" alt=""></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex about-gallery">
            <div class="about-gallery-left">
                <div><img src="{{asset('frontend/IMAGE/about-gallery.png')}}" alt=""></div>
                <div><img src="{{asset('frontend/IMAGE/about-gallery-2.png')}}" alt=""></div>
            </div>
            <div class="about-gallery-right">
                <div><img src="{{asset('frontend/IMAGE/about-gallery-3.png')}}" alt="" ></div>
                <div><img src="{{asset('frontend/IMAGE/about-gallery-4.png')}}" alt=""></div>
            </div>
        </div>
    </div>
</section>
@endsection

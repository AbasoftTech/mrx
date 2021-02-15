@extends('layouts.master')
@section('content')
<section id="contact">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Əlaqə</a>
        </div>
    </div>
    <div class="container">
        <div class="d-flex">
            <div class="contact-left">
                <div class="contact-text">
                    <div class="block--title">Biz Haradayıq</div>
                    <div class="mt-4 contact-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
                </div>
                <div class="mt-5 color41">
                    <div class="desktop--phone">
                        <i class="fas fa-phone-alt"></i>
                        <span class="ms-4">*8555 —  (+994 50) 322 85 55</span>
                    </div>
                    <div class="mobile--phone mt-4">
                        <i class="fas fa-phone-alt"></i>
                        <span class="ms-4"><a href="tel:*8555" class="color7A">*8555</a>—  <a href="tel:(+994 50) 322 85 55" class="color7A">(+994 50) 322 85 55</a></span>
                    </div>
                    <div class="mt-4">
                        <i class="fas fa-envelope"></i>
                        <span class="ms-4"><a href="mailto:info@muqavile.az" class="mailto">info@muqavile.az</a></span>
                    </div>
                    <div class="mt-4">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <span class="ms-4">Badamdar, 305-ci döngə</span>
                    </div>
                </div>
            </div>
            <div class="contact-right">
                <div class="contact-right-title">
                    Sizinlə əlaqə saxlayaq?
                </div>
                <form action="">
                    <div class="d-flex flex-column">
                        <label for="" >
                            <input type="text" class="system-input-2" placeholder="name&lastname">
                        </label>
                        <label for="" >
                            <input type="text" class="system-input-2" placeholder="email">
                        </label>
                        <label for="" >
                            <textarea name="" id="" class="system-input-2" placeholder="subject"></textarea>
                        </label>
                        <label for="" >
                            <textarea name="" id="" class="system-input-2"  placeholder="message"></textarea>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

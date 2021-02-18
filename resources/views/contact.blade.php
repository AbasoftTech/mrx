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
                        <span class="ms-4">Bakı şəh. Heydər Əliyev pros. 48</span>
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
                            <input type="text" class="system-input-2" placeholder="Ad və soyad">
                        </label>
                        <label for="" >
                            <input type="text" class="system-input-2" placeholder="Email">
                        </label>
                        <label for="" >
                            <textarea name="" id="" class="system-input-2" placeholder="Mövzu"></textarea>
                        </label>
                        <label for="" >
                            <textarea name="" id="" class="system-input-2"  placeholder="Mesaj"></textarea>
                        </label>
                        <div class="mt-5">
                            <button class="system-clickable  system-clickable-color-2">Göndər!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <iframe class="mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.518949640912!2d49.870330614804566!3d40.39735306474268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d389acbf375%3A0x7e90b890fa499c63!2s48%20Heydar%20Aliyev%20Ave%2C%20Baku%2C%20Azerbaijan!5e0!3m2!1sen!2s!4v1613556699544!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</section>
@endsection

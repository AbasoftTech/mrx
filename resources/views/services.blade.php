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
        <div class="container">
            <div class="grid-card-services">
                <div class="item">
                    Birinci Xidmət
                </div>
                <div class="item">
                    İkinci Xidmət
                </div>
                <div class="item">
                    Üçüncü Xidmət
                </div>
                <div class="item">
                    Dördüncü Xidmət
                </div>
                <div class="item">
                    Beşinci Xidmət
                </div>
                <div class="item">
                    Altıncı Xidmət
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
    </div>
</section>
@endsection

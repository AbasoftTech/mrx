@extends('layouts.master')
@section('content')
<section id="myinfo">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Xidmətlər</a>
        </div>
    </div>
    <div class="container">
        <div class="grid-profile-tablist">
            <div class="grid-profile-tab grid-profile-tab-active">Profil Məlumatları</div>
            <div class="grid-profile-tab">Müqavilələrim</div>
            <div class="grid-profile-tab">Foto Qalareya</div>
            <div class="grid-profile-tab">Hesab</div>
        </div>
    </div>
</section>
@endsection

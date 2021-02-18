@extends('layouts.master')
@section('content')
<section id="rieltors">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Müqavilə Əlavə Et</a>
        </div>
    </div>
    <div class="container">
        <h3 class="contract-title">Müqavilənin Surəti</h3>
        <form action="/file-upload"
            class="dropzone"
            id="my-awesome-dropzone">
        </form>
        <h3 class="contract-title">Əmlakın Surəti</h3>
        <form action="/file-upload"
            class="dropzone"
            id="my-awesome-dropzone">
        </form>
    </div>
</section>
@endsection

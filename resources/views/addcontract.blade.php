@extends('layouts.master')
@section('content')
<section id="addContract">
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
        <div class="contract-area">
            <div class="position-relative">
                <h3 class="contract-title">Müqavilənin Surəti</h3>
                <form action="/file-upload"
                    class="dropzone blued mt-4"
                    id="my-awesome-dropzone">
                    <div class="op">

                    </div>
                </form>
            </div>
            <h3 class="contract-title mt-5">Əmlakın Surəti</h3>
            <div class="mt-2">
                <ul class="dropzone-subtitle">
                    <li>• Müqavilədə göstərilən əmlakın hüquqi sənədinin surəti</li>
                    <li>• Müqavilə bağlanan şəxsin şəxsiyyət vəsiqəsinin sürəti</li>
                </ul>
            </div>
            <form action="/file-upload"
                class="dropzone mt-4"
                id="my-awesome-dropzone">
            </form>
            <div class="mt-5 w-25">
                <a href="{{route('addgoon')}}" class="system-clickable system-clickable-color-2">Davam Et!
                    <img src="{{asset('frontend/IMAGE/icons/arrow-long-right.svg')}}" class="hv-ms ms-2" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

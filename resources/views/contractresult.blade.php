@extends('layouts.master')
@section('content')
<section id="contractRes">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Axtarış Nəticəsi</a>
        </div>
    </div>
    <div class="container">
        <div class="contract-area d-flex justify-content-center text-center">
            <div class="d-flex align-items-center flex-column">
                <h1 class="block--title">Axtarış Nəticəsi</h1>
                <div class="contract-res-code-title">Müqavilənin Kodu</div>
                <code>#1544</code>
                <div class="contract-res-label isactive">
                    <i class="fas fa-check"></i>
                    Aktivdir
                </div>
                {{-- <div class="contract-res-label isremoved">
                    <i class="fas fa-times-circle"></i>
                    Ləğv Olunub
                </div>
                <div class="contract-res-label isexpired">
                    <i class="fas fa-clock"></i>
                    Vaxtı Bitib
                </div> --}}
                <div class="contract-res-message">
                    Bu kodda müqavilə mövcud deyil
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

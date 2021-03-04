@extends('layouts.master')
@section('content')
<section id="news">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Xəbərlər</a>
        </div>
    </div>
    <div class="container">
        <h2 class="block--title">Media</h2>
        <div class="grid-card">
          @foreach ($news as $n)

            <div class="item">
                <div class="media-card">
                    <div class="media-header">
                        <div class="media-img">
                            
                            <img src="{{asset("storage/" . $n->image)}}" alt="media-img">
                            <div class="media-title"><a href="">
                                {{$n->getTranslatedAttribute('title')}}
                            </a></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <p class="media-body-text">
                            {{$n->getTranslatedAttribute('excerpt')}}
                            <div class="fade-box"></div>
                        </p>
                        <div class="media-footer">
                            <div class="media-category media-c-1"><a href="">
                                <img src="{{asset("frontend/IMAGE/icons/media-dot-1.svg")}}" alt="">Kateqoriya 1</a></div>
                            <div class="media-more-details"><a href="">Ətraflı</a></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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

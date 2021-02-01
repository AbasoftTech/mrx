@extends('layouts.master')
@section('content')
<section id="rieltors">
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
        <label for="">
            <div class="label-text">Şəhər</div>
            <div class="custom-select-c custom-select-prefix" style="width:200px;">
                <select>
                    <option value="1">Bakı</option>
                    <option value="1">Naxçıvan</option>
                    <option value="2">Gəncə</option>
                </select>
            </div>
        </label>
        <label for="">
            <div class="label-text">Rayon və qəsəbə</div>
            <div class="custom-select-c custom-select-prefix" style="width:200px;">
                <select>
                    <option value="1">050</option>
                    <option value="1">051</option>
                    <option value="2">050</option>
                    <option value="3">055</option>
                </select>
            </div>
        </label>
        <label for="">
            <div class="label-text">Ad, soyad və ya nömrə ilə axtar</div>
            <div class="custom-select-c custom-select-prefix" style="width:200px;">
                <select>
                    <option value="1">050</option>
                    <option value="1">051</option>
                    <option value="2">050</option>
                    <option value="3">055</option>
                </select>
            </div>
        </label>
    </div>
    <div class="container">
        <div class="grid-rieltors">
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><img src="{{asset('frontend/IMAGE/')}}" alt=""></div>
                <div class="rieltor-grid-info">
                    <span class="rieltor-grid-name">Əli Abbasov</span>
                    <div class="rieltor-grid-place">
                        3-cu yer
                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><img src="" alt=""></div>
                <div class="rieltor-grid-info">
                    <span class="rieltor-grid-name"></span>
                    <div class="rieltor-grid-place">

                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><img src="" alt=""></div>
                <div class="rieltor-grid-info">
                    <span class="rieltor-grid-name"></span>
                    <div class="rieltor-grid-place">

                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><img src="" alt=""></div>
                <div class="rieltor-grid-info">
                    <span class="rieltor-grid-name"></span>
                    <div class="rieltor-grid-place">

                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><img src="" alt=""></div>
                <div class="rieltor-grid-info">
                    <span class="rieltor-grid-name"></span>
                    <div class="rieltor-grid-place">

                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><img src="" alt=""></div>
                <div class="rieltor-grid-info">
                    <span class="rieltor-grid-name"></span>
                    <div class="rieltor-grid-place">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

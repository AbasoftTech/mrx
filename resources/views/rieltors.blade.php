@extends('layouts.master')
@section('content')
<section id="rieltors">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Rieltorlar</a>
        </div>
    </div>
    <div class="container">
        <div class="block--title">Çalışdığı Ərazi Üzrə Rieltorun Seçilməsi</div>
        <div class="choose-rieltor-area">
            <div class="d-flex flex-column">
                <div class="label-text text-left  text-lg-start">Şəhər</div>
                <div class="mt-3 rieltor-loc">
                    {{-- <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                    <div class="my-select myselec-2 living">
                        <select name="" class="" id="">
                            <option value="Bakı" class="selected">Bakı</option>
                            <option value="Bakı">Bakı</option>
                            <option value="Gence">Gence</option>
                            <option value="Naxcivan">Naxcivan</option>
                            <option value="Lenkeran">Lenkeran</option>
                        </select>
                        <div class="clone-select"></div>
                        <div class="clone-option"></div>
                    </div> --}}
                    <select class="js-example-placeholder-single js-states form-control" lang="az">
                        {{-- <option>051</option>
                        <option>050</option>
                        <option>070</option> --}}
                        <option>Bakı</option>
                        <option>Naxçıvan</option>
                        <option>Gəncə</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-column ms-0 ms-md-3">
                <div class="label-text text-left mt-3 mt-sm-0">Rayon və qəsəbə</div>
                <div style="width: 183px; height: 47px; position: relative" class="mt-3 rieltor-loc">
                    <select class="js-example-placeholder-single js-states form-control">
                        <option class="optgroup-label">Abşeron Rayonu</option>
                        <option class="optgroup-item">— Ceyranbatan</option>
                        <option class="optgroup-item">— Çiçək</option>
                        <option class="optgroup-label">Binəqədi Rayonu</option>
                    </select>
                    {{-- <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                    <div class="my-select myselec-2 living">
                        <select name="" class="" id="">
                            <option value="Bileceri" class="selected">Bileceri</option>
                            <option value="Baki">Baki</option>
                            <option value="Gence">Gence</option>
                            <option value="Naxcivan">Naxcivan</option>
                            <option value="Lenkeran">Lenkeran</option>
                        </select>
                        <div class="clone-select"></div>
                        <div class="clone-option"></div>
                    </div> --}}
                </div>
            </div>
            <div class="d-flex flex-column ms-0 ms-md-3">
                <div class="label-text text-left mt-3 mt-sm-0 extra-color">Ad, soyad və ya nömrə ilə axtar</div>
                <div class="mt-3">
                    {{-- <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                    <div class="my-select myselec-2 living">
                        <select name="" class="" id="">
                            <option value="Bileceri" class="selected">Bileceri</option>
                            <option value="Baki">Baki</option>
                            <option value="Gence">Gence</option>
                            <option value="Naxcivan">Naxcivan</option>
                            <option value="Lenkeran">Lenkeran</option>
                        </select>
                        <div class="clone-select"></div>
                        <div class="clone-option"></div>
                    </div> --}}
                    {{-- <div class="system-search">
                        <input type="text" class="system-input">
                    </div> --}}
                    <form autocomplete="off" action="/action_page.php">
                        <div class="autocomplete" style="width:385px;">
                            <input id="myInput" class="system-input" type="text" name="myCountry" placeholder="axtar..">
                            <i class="fas fa-search"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid-rieltors">
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><a href=""><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-1.png')}}" alt=""></a></a></div>
                <div class="rieltor-grid-info">
                    <a href="" class="rieltor-grid-name">Əli Abbasov</a>
                    <div class="rieltor-grid-place">
                        3-cu yer
                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><a href=""><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-2.png')}}" alt=""></a></div>
                <div class="rieltor-grid-info">
                    <a href="" class="rieltor-grid-name">Əli Abbasov</a>
                    <div class="rieltor-grid-place">
                        7-ci yer
                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><a href=""><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-4.png')}}" alt=""></a></div>
                <div class="rieltor-grid-info">
                    <a href="" class="rieltor-grid-name">Cbbar Heydərov</a>
                    <div class="rieltor-grid-place">
                        5-cu yer
                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><a href=""><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-4.png')}}" alt=""></a></div>
                <div class="rieltor-grid-info">
                    <a href="" class="rieltor-grid-name">Ceyhun Heydərov</a>
                    <div class="rieltor-grid-place">
                        3-cu yer
                    </div>
                </div>
            </div>
            <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><a href=""><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="{{asset('frontend/IMAGE/rieltor-5.png')}}" alt=""></a></div>
                <div class="rieltor-grid-info">
                    <a href="" class="rieltor-grid-name">Jakob</a>
                    <div class="rieltor-grid-place">
                        3-cu yer
                    </div>
                </div>
            </div>
            {{-- <div class="grid-rieltor-item">
                <div class="rieltor-grid-img"><a href=""><img src="{{asset('frontend/IMAGE/icons/top-10.svg')}}" alt="" class="rieltor-grid-badge"><img src="" alt=""></div>
                <div class="rieltor-grid-info">
                    <a href="" class="rieltor-grid-name"></a>
                    <div class="rieltor-grid-place">

                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container text-center mt-5">
        <div class="custom-pagination">
            <span>
                <a href="" class="active">1</a>
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

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
        <div class="contract-area">
            <div class="add-goon">
                <form action="">
                    <label for="">
                        MuqVILENIN TIPI
                        <div style="width: 200px;height: 47px">
                            <div class="my-select myselec-1">
                                <select name="months" class="months" id="">
                                    <option value="Aylar" class="selected">Aylar</option>
                                    <option value="Yanvar">Yanvar</option>
                                    <option value="Fevral">Fevral</option>
                                    <option value="Mart">Mart</option>
                                    <option value="Aprel">Aprel</option>
                                    <option value="May">May</option>
                                    <option value="İyun">İyun</option>
                                    <option value="İyul">İyuL</option>
                                    <option value="Avqust">Avqust</option>
                                    <option value="Sentyabr">Sentyabr</option>
                                    <option value="Oktyabr">Oktyabr</option>
                                    <option value="Noyabr">Noyabr</option>
                                    <option value="Dekabr">Dekabr</option>
                                </select>
                                <div class="clone-select clone-select-border"></div>
                                <div class="clone-option"></div>
                            </div>
                        </div>
                    </label>
                    <label for="">
                        MuqVILENIN TIPI
                        <div style="width: 200px;height: 47px">
                            <div class="my-select myselec-1">
                                <select name="months" class="months" id="">
                                    <option value="Aylar" class="selected">Aylar</option>
                                    <option value="Yanvar">Yanvar</option>
                                    <option value="Fevral">Fevral</option>
                                    <option value="Mart">Mart</option>
                                    <option value="Aprel">Aprel</option>
                                    <option value="May">May</option>
                                    <option value="İyun">İyun</option>
                                    <option value="İyul">İyuL</option>
                                    <option value="Avqust">Avqust</option>
                                    <option value="Sentyabr">Sentyabr</option>
                                    <option value="Oktyabr">Oktyabr</option>
                                    <option value="Noyabr">Noyabr</option>
                                    <option value="Dekabr">Dekabr</option>
                                </select>
                                <div class="clone-select clone-select-border"></div>
                                <div class="clone-option"></div>
                            </div>
                        </div>
                    </label>
                    <label for="">
                        Tarix
                        <div id="calendar">
                        </div>
                    </label>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

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
                    <label for="" class="w-100">
                        <span class="required">*</span><span class="label-text">Müqavilənin tipi</span>
                        <div style="height: 48px" class="mt-2">
                            <div class="my-select myselec-1">
                                <select name="months" class="months" id="">
                                    <option value="Seçin" class="selected">Seçin</option>
                                    <option value="Uzun">Uzun müddətli</option>
                                    <option value="Uzun">Qisa müddətli</option>
                                    <option value="Uzun">Qisa müddətli</option>
                                </select>
                                <div class="clone-select"></div>
                                <div class="clone-option"></div>
                            </div>
                        </div>
                    </label>
                    <label for="" class="w-100 mt-4">
                        <span class="required">*</span><span class="label-text">Müqavilənin başlandığı tarix</span>
                        <div class="bd-calendar-holder system-input ps-0 mt-2">
                            <input class="bd-calendar" data-date-format="d.m.y"/>
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                    </label>
                    <label for="tm" class="w-100 mt-4">
                        <span class="required">*</span><span class="label-text">Müqavilənin müddəti</span>
                        <div class="ps-0 tim-period">
                            <input type="number" class="system-input mt-2" name="" id="tm">
                        </div>
                    </label>
                    <label for="nm" class="w-100 mt-4">
                        <span class="required">*</span><span class="label-text">Satıcının adı, soyadı, ata adı</span>
                        <input type="text" class="system-input mt-2" name="" id="nm">
                    </label>
                    <label for="tmn" class="w-100 mt-4">
                        <span class="required">*</span><span class="label-text">Təmsilçinin adı, soyadı, ata adı</span>
                        <input type="text" class="system-input mt-2" name="" id="tmn">
                    </label>
                    <div class="d-flex justify-content-between mt-4">
                        <div class="d-flex flex-column" style="width:48%;">
                            <div class="label-text text-center text-lg-start"><span class="required">*</span>Şəhər</div>
                            <div style="height: 48px; position: relative" class="mt-2">
                                <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
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
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column" style="width:48%;">
                            <div class="label-text text-center text-lg-start"><span class="required">*</span>Rayon və qəsəbə</div>
                            <div style="height: 48px; position: relative" class="mt-2">
                                <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="str" class="w-100 mt-4">
                        <span class="label-text">Küçə adı</span>
                        <input type="text" class="system-input mt-2" name="" id="str">
                    </label>
                    <div class="d-flex justify-content-between mt-4">
                        <label for="bld" style="width:48%;">
                            <span class="required">*</span><span class="label-text">Bina Nömrəsi</span>
                            <input type="number" class="system-input mt-2" name="" id="bld">
                        </label>
                        <label for="flt" style="width:48%;">
                            <span class="label-text">Mənzil Nömrəsi</span>
                            <input type="number" class="system-input mt-2" name="" id="flt">
                        </label>
                    </div>
                    <div class="mt-5">
                        <div class="label-text">Müqavilənin dəyəri</div>
                        <div class="contract-value mt-3">50 AZN</div>
                    </div>
                    <div class="mt-5">
                        <div class="account-subtitle mt-4">Ödəniş üsulunu seçin</div>
                        <div class="payment-way-holder">
                            <label class="checkbox-holder">Bank kartı
                                <input type="radio" name="payment-way">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-holder ms-5">Portmanat (Terminallarda ödəniş)
                                <input type="radio" name="payment-way">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-holder ms-5">Balansdan ödəniş (0 AZN)
                                <input type="radio" name="payment-way">
                                <span class="checkmark"></span>
                            </label>
                            <label class="checkbox-holder ms-5">Borca ödəniş
                                <input type="radio" name="payment-way">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-5 w-c-">
                        <button class="system-clickable system-clickable-color-2">Müqavilə Göndər!</button>
                    </div>
                    <div class="caution">
                        «Ödənişi Tamamla!» düyməsini sıxmaqla siz <a href="">Muqavile.az</a>-ın istifadəçi razılaşmasını
                            və <a href="">Ofertanı</a> qəbul etdiyinizi təsdiqləmiş olursunuz.
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

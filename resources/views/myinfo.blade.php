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
        <div class="grid-profile-linklist">
            <a href="" class="grid-profile-link grid-profile-link-active">Profil Məlumatları</a>
            <a href="" class="grid-profile-link">Müqavilələrim</a>
            <a href="" class="grid-profile-link">Foto Qalareya</a>
            <a href="" class="grid-profile-link">Hesab</a>
        </div>
        <div class="d-flex mt-5">
            <div class="profile-sidebar">
                <div class="profile-tablist tablist">
                    <div class="profile-tab tab tab-active" data-id="0">
                        <i class="fas fa-user-alt"></i>
                        Profil Məlumatları
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-key"></i>
                        Şifrəni Dəyiş
                    </div>
                </div>
            </div>
            <div class="profile-sidebar-sibling">
                <div class="profile-tab-content tab-content content-active" id="0">
                    <div class="profile-sidebar-sibling-child">
                        <form action="">
                            <div class="d-flex justify-content-between">
                                {{-- <div> --}}
                                    <div class="profile-avatar">
                                        <img src="{{asset('frontend/IMAGE/profile-avatar.png')}}" alt="">
                                    </div>
                                {{-- </div> --}}
                                <div class="profile-details">
                                    <div>
                                        <label class="checkbox-holder">Fiziki shexs
                                            <input type="radio" name="radio">
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="" class="text-center text-lg-start w-100 mt-1">
                                            <div class="mt-2">
                                                <input type="text" name="password" class="system-input" placeholder="VÖEN Nömrənizi Daxil Edin">
                                            </div>
                                        </label>
                                    </div>
                                    <div class="mt-3">
                                        <label class="checkbox-holder">Shirket
                                            <input type="radio" name="radio">
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="" class="text-center text-lg-start w-100 mt-1">
                                            <div class="mt-2">
                                                <input type="text" name="password" class="system-input" placeholder="Şirkətin Adını Daxil Edin">
                                            </div>
                                        </label>
                                    </div>
                                    <label for="" class="text-center text-lg-start w-100">
                                        <span class="label-text text-center- text-lg-left">Köhnə şifrə</span>
                                        <div class="mt-2">
                                            <input type="password" name="password" class="system-input">
                                        </div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100">
                                        <span class="label-text text-center- text-lg-left">Köhnə şifrə</span>
                                        <div class="mt-2">
                                            <input type="password" name="password" class="system-input">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="profile-sidebar-sibling-child">

                    </div>
                </div>
                <div class="profile-tab-content tab-content" id="1">
                    <div class="profile-sidebar-sibling-child">
                        <form action="">
                            <label for="" class="text-center text-lg-start w-100">
                                <span class="label-text text-center- text-lg-left">Köhnə şifrə</span>
                                <div class="mt-2">
                                    <input type="password" name="password" class="system-input">
                                </div>
                            </label>
                            <label for="" class="text-center text-lg-start w-100 mt-4">
                                <span class="label-text text-center- text-lg-left">Yeni şifrə</span>
                                <div class="mt-2">
                                    <input type="password" name="password" class="system-input">
                                </div>
                            </label>
                            <label for="" class="text-center text-lg-start w-100 mt-4">
                                <span class="label-text text-center- text-lg-left">Yeni şifrənin təkrarı</span>
                                <div class="mt-2">
                                    <input type="password" name="password" class="system-input">
                                </div>
                            </label>
                            <div class="mt-c-4">
                                <button class="system-clickable system-clickable-color-2">Yadda Saxla</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

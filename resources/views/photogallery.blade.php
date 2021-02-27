@extends('layouts.master')
@section('content')
<section id="myinfo">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Foto Qalareya</a>
        </div>
    </div>
    <div class="container">
        <div class="grid-profile-linklist">
            <a href="{{route("myinfo")}}" class="grid-profile-link">Profil Məlumatları</a>
            <a href="{{route("mycontracts")}}" class="grid-profile-link">Müqavilələrim</a>
            <a href="{{route("photogallery")}}" class="grid-profile-link grid-profile-link-active">Foto Qalareya</a>
            <a href="{{route("account")}}" class="grid-profile-link">Hesab</a>
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
                            <div class="profile-grid-gallery">
                                {{-- <div class="grid-gallery-item">
                                    <img src="{{asset('frontend/IMAGE/rieltor-gallery-1.png')}}" alt="">
                                    <div class="grid-gallery-item-control">
                                        <button type="button" class="remove--item" onclick="remove(this)"><i class="fas fa-trash mb-2"></i>Sil</button>
                                        <button type="button" class="rotate--item" onclick="rotate(this)"><i class="fas fa-redo-alt mb-2"></i>Çevir</button>
                                    </div>
                                </div> --}}
                                {{-- <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-2.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-3.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-4.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-5.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-6.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-7.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-8.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-9.png')}}" alt=""></div>
                                <div class="grid-gallery-item"><img src="{{asset('frontend/IMAGE/rieltor-gallery-10.png')}}" alt=""></div> --}}
                                <div class="grid-gallery-item add-new-gal-item">
                                    <div class="profile-avatar">
                                        <div class="profile-grid-holder">
                                            <div class="profile-grid-decore">
                                                {{-- <img src="{{asset('frontend/IMAGE/icons/add-photo.svg')}}" class="mb-2" alt=""> --}}
                                                <div>
                                                    <i class="fas fa-plus"></i>
                                                    <i class="fas fa-camera"></i>
                                                </div>
                                                Şəkil Əlavə Et
                                            </div>
                                            <div class="profile-grid-add">
                                                <input type="file" multiple onchange="uploadGal(this)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-50 mt-5">
                                <button class="system-clickable system-clickable-color-2">Yadda Saxla</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="profile-tab-content tab-content" id="1">
                    <form action="">
                        <div class="profile-sidebar-sibling-child">
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
                        </div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection

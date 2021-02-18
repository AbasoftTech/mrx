@extends('layouts.master')
@section('content')
<section id="myinfo">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Müqavilələrim</a>
        </div>
    </div>
    <div class="container">
        <div class="grid-profile-linklist">
            <a href="{{route("myinfo")}}" class="grid-profile-link">Profil Məlumatları</a>
            <a href="{{route("mycontracts")}}" class="grid-profile-link grid-profile-link-active">Müqavilələrim</a>
            <a href="{{route("photogallery")}}" class="grid-profile-link">Foto Qalareya</a>
            <a href="" class="grid-profile-link">Hesab</a>
        </div>
        <div class="d-flex mt-5">
            <div class="profile-sidebar">
                <div class="profile-tablist tablist">
                    <div class="profile-tab tab tab-active" data-id="0">
                        <i class="fas fa-user-alt"></i>
                        Bütün Müqavilələr (512)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-key"></i>
                        Aktiv Müqavilələr (102)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-key"></i>
                        Vaxtı Bitmiş Müqavilələr (100)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-key"></i>
                        Ləğv Edilmiş Müqavilələr (200)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-key"></i>
                        Həll Etdiyi Müqavilələr (110)
                    </div>
                </div>
            </div>
            <div class="profile-sidebar-sibling">
                <div class="profile-tab-content tab-content content-active" id="0">
                    <div class="profile-sidebar-sibling-child contract-space">
                        <div class="contract-grid-head">
                            <div width="125px">Kod</div>
                            <div width="490px">Unvan</div>
                            <div width="161px">Vəziyyəti</div>
                            <div width="120px">Əməliyyatlar</div>
                        </div>
                        <div class="contract-grid-body">
                            <div class="contract-grid" width="125px">35244</div>
                            <div class="contract-grid" width="490px">Bakı şəh. Nərimanov ray. Atatürk pros. ev 5 mənzil 15</div>
                            <div class="contract-grid" width="161px">Aktiv</div>
                            <div class="contract-grid" width="120px">
                                <button type="button" class="done"><i class="fas fa-check-circle"></i><div>Ləğv et</div></button>
                                <button type="button" class="remove-contract ms-3"><i class="fas fa-trash"><div>Həll Etdim</div></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-tab-content tab-content" id="1">

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

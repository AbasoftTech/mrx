@extends('layouts.master')
@section('content')
<section id="mycontracts">
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
        <div class="grid-profile-linklist-holder">
            <div class="grid-profile-linklist">
                <a href="{{route("myinfo")}}" class="grid-profile-link">Profil Məlumatları</a>
                <a href="{{route("mycontracts")}}" class="grid-profile-link grid-profile-link-active">Müqavilələrim</a>
                <a href="{{route("photogallery")}}" class="grid-profile-link">Foto Qalareya</a>
                <a href="{{route("account")}}" class="grid-profile-link">Hesab</a>
            </div>
        </div>
        <div class="d-flex flex-lgc-dir mt-3 mt-sm-5">
            <div class="profile-sidebar">
                <div class="profile-tablist tablist flex-column flex-lg-row">
                    <div class="profile-tab tab tab-active" data-id="0">
                        <i class="fas fa-reply-all"></i>
                        Bütün Müqavilələr (512)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-thumbtack"></i>
                        Aktiv Müqavilələr (102)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-clock"></i>
                        Vaxtı Bitmiş Müqavilələr (100)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-trash"></i>
                        Ləğv Edilmiş Müqavilələr (200)
                    </div>
                    <div class="profile-tab tab" data-id="1">
                        <i class="fas fa-calendar-check"></i>
                        Həll Etdiyi Müqavilələr (110)
                    </div>
                </div>
            </div>
            <div class="profile-sidebar-sibling">
                <div class="profile-tab-content tab-content content-active" id="0">
                    <div class="profile-sidebar-sibling-child contract-space">
                        <div>
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
                                    <button type="button" class="done"><i class="fas fa-check-circle"></i><div>Həll Etdim</div></button>
                                    <button type="button" class="remove-contract ms-3" data-bs-toggle="modal" data-bs-target="#remove"><i class="fas fa-trash"><div>Ləğv et</div></i></button>
                                </div>
                            </div>
                            <div class="contract-grid-body">
                                <div class="contract-grid" width="125px">35240</div>
                                <div class="contract-grid" width="490px">201 Nəriman Nərimanov prospekti</div>
                                <div class="contract-grid" width="161px">Passiv</div>
                                <div class="contract-grid" width="120px">
                                    <button type="button" class="done"><i class="fas fa-check-circle"></i><div>Həll Etdim</div></button>
                                    <button type="button" class="remove-contract ms-3" data-bs-toggle="modal" data-bs-target="#remove"><i class="fas fa-trash"><div>Ləğv et</div></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-pagination mt-4">
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
                <div class="profile-tab-content tab-content" id="1">

                </div>
            </div>
        </div>
    </div>
</section>


    {{-- <!-- Modal -->
    <div class="modal fade" id="done" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal--dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header justify-content-end">
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="search--contract--input--holder">
                    <img src="{{asset('frontend/IMAGE/icons/hashtag.svg')}}" class="code_contract" alt="">
                    <input type="text" placeholder="Müqavilə Axtar" class="search--contract--input-box">
                    <button class="go--for--contract"><i class="fas fa-search text-white"></i></button>
                </div>
            </div>
            </div>
        </div>
    </div> --}}
          <!-- Modal -->
          <div class="modal fade" id="remove" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-remove-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                    {{-- <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                      <i class="fas fa-times"></i>
                    </button> --}}
                    <h2 class="done-header">Müqavilənin Ləğvi</h2>
                </div>
                <div class="modal-body">
                    <span class="remove-text">Müqaviləni ləğv etməklə “Satıcı” ilə müqavilənin ləğv olunması barədə
                        razılığımız olduğunu bildirirəm və müqavilənin silinməsinə görə
                        məsuliyyəti öz üzərimə götürürəm.
                    </span>
                    {{-- <img src="{{asset('frontend/IMAGE/icons/hashtag.svg')}}" class="code_contract" alt="">
                    <input type="text" placeholder="Müqavilə Axtar" class="search--contract--input-box"> --}}
                    <div class="d-flex mt-5 w-75">
                        <button class="system-clickable-color-3 system-clickable">Ləğv Et</button>
                        <button class="system-clickable-color-4 system-clickable ms-4" data-bs-dismiss="modal" aria-bs-label="Close">İmtina Et</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
@endsection

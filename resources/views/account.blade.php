@extends('layouts.master')
@section('content')
<section id="contractRes">
    @include('includes.breadcrumbs')
    <div class="container">
        @include('includes.nav-info')
    </div>
    <div class="container mt-3 mt-sm-3">
        <div class="d-flex justify-content-between flex-column flex-lg-row">
            <div class="bg-decored account">
                <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row">
                    <h1 class="block--title">Balansı Artır</h1>
                    <div class="d-flex">
                        <div class="acchash">Hesab nömrəsi:</div>
                        <div class="acchash-2">#000025</div>
                    </div>
                </div>
                <form action="">
                    <div class="d-flex flex-column mt-4">
                        <div class="account-subtitle mt-3">Artırılacaq balansı seçin</div>
                        <div class="d-flex flex-column flex-md-row mt-3">
                            <div class="choose-balans">100 AZN</div>
                            <div class="choose-balans ms-0 mt-3 ms-md-3 mt-md-0">250 AZN</div>
                            <div class="choose-balans ms-0 mt-3 ms-md-3 mt-md-0">800 AZN</div>
                            <div class="choose-balans ms-0 mt-3 ms-md-3 mt-md-0">1000 AZN</div>
                        </div>
                        <div class="mt-4">
                            <input type="number" class="insert-money" placeholder="Məbləğ Daxil Et">
                        </div>
                    </div>
                    <div>
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
                        </div>
                    </div>
                    <div class="mt-4 complete-payment">
                        <button class="system-clickable system-clickable-color-2">Ödənişi Tamamla!</button>
                    </div>
                    <div class="caution">
                        «Ödənişi Tamamla!» düyməsini sıxmaqla siz <a href="">Muqavile.az</a>-ın istifadəçi razılaşmasını
                            və <a href="">Ofertanı</a> qəbul etdiyinizi təsdiqləmiş olursunuz.
                    </div>
                </form>
            </div>
            <div class="bg-decored account-sidebar">
                <h2 class="block--title">Pul Balansı</h2>
                <div class="user-count">100 azn</div>
                <div>
                    <h3 class="block--title mt-4">Statistika</h3>
                    <div class="account-sidebar-tab active ps-0">
                        <i class="fas fa-reply-all"></i>
                        Bütün Müqavilələr (512)
                    </div>
                    <div class="account-sidebar-tab ps-0">
                        <i class="fas fa-thumbtack"></i>
                        Aktiv Müqavilələr (102)
                    </div>
                    <div class="account-sidebar-tab ps-0">
                        <i class="fas fa-clock"></i>
                        Vaxtı Bitmiş Müqavilələr (100)
                    </div>
                    <div class="account-sidebar-tab ps-0">
                        <i class="fas fa-trash"></i>
                        Ləğv Edilmiş Müqavilələr (200)
                    </div>
                    <div class="account-sidebar-tab ps-0">
                        <i class="fas fa-calendar-check"></i>
                        Həll Etdiyi Müqavilələr (110)
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4 positioned-2">
        <div class="bg-decored contract-list">
            <div class="contract-grid-head">
                <div width="125px">Tarix / Saat</div>
                <div width="490px">Məbləğ</div>
                <div width="161px">Müqavilə KOD-u</div>
                <div width="120px">Əməliyyatın növü</div>
            </div>
            <div class="contract-grid-body">
                <div class="contract-grid">17.06.2020 / 17:58</div>
                <div class="contract-grid">-50 AZN</div>
                <div class="contract-grid">35285</div>
                <div class="contract-grid">Kartla ödənilib</div>
            </div>
            <div class="contract-grid-body">
                <div class="contract-grid">17.06.2020 / 17:58</div>
                <div class="contract-grid">-50 AZN</div>
                <div class="contract-grid">35285</div>
                <div class="contract-grid">Borc hesabına</div>
            </div>
        </div>
    </div>
    <div class="custom-pagination mt-4">
        <span>
            <a href="" class="active">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a href="">4</a>
            <a href="">5</a>
        </span>
        <a href="" class="next-page">Növbəti</a>
    </div>
</section>
@endsection

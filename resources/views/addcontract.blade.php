@extends('layouts.master')
@section('content')
<section id="addContract">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Müqavilə Əlavə Et</a>
        </div>
    </div>
    <div class="container">
        <div class="contract-area">
            <div class="position-relative">
                <h3 class="contract-title">Müqavilənin Surəti</h3>
                <form action="/file-upload" class="dropFileHolder mt-3">
                    <div class="dropFile">
                        <svg width="80" height="68" class="file-ico" viewBox="0 0 80 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.2 6.39779V3.49106C35.2 1.72379 33.7674 0.291016 32 0.291016H3.20005C1.43261 0.291016 0 1.72362 0 3.49106V22.3251H80V11.7312C80 9.96393 78.5674 8.53116 76.7999 8.53116H37.3334C36.1551 8.53116 35.2 7.57603 35.2 6.39779Z" fill="#A9A9A9"/>
                            <path d="M75.7333 67.7088H4.26673C1.91026 67.7088 0 65.7985 0 63.442V21.564H35.3194C36.2194 21.564 37.0778 21.1851 37.6841 20.52L41.6155 16.208C42.2218 15.543 43.0802 15.1641 43.9802 15.1641H80V63.442C80 65.7985 78.0897 67.7088 75.7333 67.7088Z" fill="#C4C4C4"/>
                        </svg>
                        <input type="file" multiple onchange="addContract(this)">
                        <span class="mt-3">Faylı seçmək üçün kliklə</span>
                    </div>
                    <div class="uploadedContract">
                    </div>
                    <div class="scroll-please muq"><i class="fas fa-angle-double-down"></i></div>
                </form>
            </div>
            <h3 class="contract-title mt-5">Əmlakın sənədlərinin sürəti</h3>
            <div class="mt-2">
                <ul class="dropzone-subtitle">
                    <li>• Müqavilədə göstərilən əmlakın hüquqi sənədinin surəti</li>
                    <li>• Müqavilə bağlanan şəxsin şəxsiyyət vəsiqəsinin sürəti</li>
                </ul>
            </div>
            <div class="position-relative mt-3">
                <form action="/file-upload" class="dropFileHolder">
                    <div class="dropFile">
                        <svg width="80" height="68" class="file-ico" viewBox="0 0 80 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.2 6.39779V3.49106C35.2 1.72379 33.7674 0.291016 32 0.291016H3.20005C1.43261 0.291016 0 1.72362 0 3.49106V22.3251H80V11.7312C80 9.96393 78.5674 8.53116 76.7999 8.53116H37.3334C36.1551 8.53116 35.2 7.57603 35.2 6.39779Z" fill="#A9A9A9"/>
                            <path d="M75.7333 67.7088H4.26673C1.91026 67.7088 0 65.7985 0 63.442V21.564H35.3194C36.2194 21.564 37.0778 21.1851 37.6841 20.52L41.6155 16.208C42.2218 15.543 43.0802 15.1641 43.9802 15.1641H80V63.442C80 65.7985 78.0897 67.7088 75.7333 67.7088Z" fill="#C4C4C4"/>
                        </svg>
                        <input type="file" multiple onchange="addContract(this)">
                        <span class="mt-3">Faylı seçmək üçün kliklə</span>
                    </div>
                    <div class="uploadedContract">
                    </div>
                    <div class="scroll-please eml"><i class="fas fa-angle-double-down"></i></div>
                </form>
            </div>
            <div class="mt-5 w-c-">
                @php
                                    $menu = $menu->where('widget','addgoon');
                                    $url = '';
                                    foreach ($menu as $m) {
                                        $url = $m->getTranslatedAttribute('slug');
                                    }
                                @endphp
                <a href="{{url($url)}}" class="system-clickable system-clickable-color-2">Davam Et!
                    <img src="{{asset('frontend/IMAGE/icons/arrow-long-right.svg')}}" class="hv-ms ms-2" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

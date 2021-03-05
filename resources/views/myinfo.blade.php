@extends('layouts.master')
@section('content')
<section id="myinfo">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Profil məlumatları</a>
        </div>
    </div>
    <div class="container">
        <div class="grid-profile-linklist-holder">
            <div class="grid-profile-linklist">
                <a href="" class="grid-profile-link grid-profile-link-active">Profil Məlumatları</a>
                <a href="" class="grid-profile-link">Müqavilələrim</a>
                <a href="" class="grid-profile-link">Foto Qalareya</a>
                <a href="" class="grid-profile-link">Hesab</a>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row mt-2 mt-sm-5">
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
                    <form action="">
                        <div class="profile-sidebar-sibling-child">
                            <div class="d-flex justify-content-between flex-column flex-lg-row">
                                <div class="profile-avatar">
                                    <div class="profile-avatar-holder">
                                        <img src="{{asset('frontend/IMAGE/profile-avatar.png')}}" alt="">
                                        <div class="upload-avatar">
                                            <input type="file">
                                            <div class="text-center position-absolute">Şəkili Dəyiş</div>
                                        </div>
                                    </div>
                                </div>
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
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center- text-lg-left">Ad, soyad və ata adı </span>
                                        <div class="mt-2">
                                            <input type="text" name="password" class="system-input">
                                        </div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center- text-lg-left">Doğum tarixi</span>
                                        <div class="mt-2">
                                            {{-- <div class="my-cal">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex">
                                                        <div style="width: 200px;height: 47px" class="calendar-select">
                                                            <div class="my-select myselect1 unbordered">
                                                                <select name="months" class="months" id="">
                                                                    <option value="Aylar" class="selected">Aylar</option>
                                                                    <option value="Yanvar" id="1">Yanvar</option>
                                                                    <option value="Fevral" id="2">Fevral</option>
                                                                    <option value="Mart" id="3">Mart</option>
                                                                    <option value="Aprel" id="4">Aprel</option>
                                                                    <option value="May" id="5">May</option>
                                                                    <option value="İyun" id="6">İyun</option>
                                                                    <option value="İyul" id="7">İyuL</option>
                                                                    <option value="Avqust" id="8">Avqust</option>
                                                                    <option value="Sentyabr" id="9">Sentyabr</option>
                                                                    <option value="Oktyabr" id=10"">Oktyabr</option>
                                                                    <option value="Noyabr" id="11">Noyabr</option>
                                                                    <option value="Dekabr" id="12">Dekabr</option>
                                                                </select>
                                                                <div class="clone-select clone-select-border"></div>
                                                                <div class="clone-option"></div>
                                                            </div>
                                                        </div>
                                                        <div style="width: 200px; height: 47px" class="calendar-select">
                                                            <div class="my-select myselect2 unbordered">
                                                                <select name="years" class="years" id="">
                                                                    <option value="İllər" class="selected">İllər</option>
                                                                </select>
                                                                <div class="clone-select clone-select-border"></div>
                                                                <div class="clone-option"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="cal-days">
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="bd-calendar-holder system-input ps-0">
                                                <input class="bd-calendar" data-date-format="d.m.y"/>
                                                <i class="fas fa-calendar-alt"></i>
                                            </div>
                                        </div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center text-lg-left">* Rieltor kimi iş stajı</span>
                                        <div class="mt-2"><input name="top" type="number" class="system-input" maxlength="3" pattern="[0-9]" name="" id="top"></div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center text-lg-left">Milliyəti</span>
                                        <div class="mt-2"><input type="text" name="password" class="system-input"></div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center text-lg-left">Təhsili</span>
                                            {{-- <div style="height: 47px" class="after-selected">
                                                <div class="my-select myselect2">
                                                    <select name="" class="" id="">
                                                        <option value="Ali" class="selected">Ali</option>
                                                        <option value="Ali">Ali</option>
                                                        <option value="Natamam">Natamam Ali</option>
                                                        <option value="Orta">Orta Texniki</option>
                                                    </select>
                                                    <div class="clone-select"></div>
                                                    <div class="clone-option"></div>
                                                </div>
                                            </div> --}}
                                            <div class="edu mt-3">
                                                <select class="js-example-placeholder-single js-states form-control" lang="az">
                                                    <option>Ali</option>
                                                    <option>Natamam</option>
                                                    <option>070</option>
                                                </select>
                                            </div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center text-lg-left">Ş/V surətini yüklə</span>
                                        <div class="mt-2">
                                            <div class="custom-fileinput">
                                                <input type="file" class="file system-input" multiple="multiple" onchange="uploadFile(this)" />
                                                <div class="fileinput-holder">
                                                    <input class="system-input" placeholder="Fayl seç"/>
                                                    <i class="fas fa-file"></i>
                                                    <div class="your-file mt-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <script>
                                        var fileNames = [];
                                        function uploadFile(target){
                                            let files = target.files;
                                            for(var file=0; file < files.length; file++) {
                                                fileNames.push(files[file].name)
                                                }
                                                document.getElementsByClassName('your-file')[0].innerHTML = fileNames
                                        }

                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="profile-sidebar-sibling-child">
                            <div class="block--title">Nömrə Əlavə Et</div>
                            <div class="segment-holder">
                                <div class="segment mt-4">
                                    <div class="prex">
                                        <select class="js-example-placeholder-single js-states form-control" lang="az">
                                            <option>051</option>
                                            <option>050</option>
                                            <option>070</option>
                                        </select>
                                    </div>
                                    {{-- <div style="width: 124px; height: 47px">
                                        <div class="my-select myselec-2 prefix">
                                            <select name="" class="" id="">
                                                <option value="Prefix" class="selected">Prefix</option>
                                                <option value="050">— 050</option>
                                                <option value="051">— 051</option>
                                                <option value="055">— 055</option>
                                                <option value="070">— 070</option>
                                            </select>
                                            <div class="clone-select"></div>
                                            <div class="clone-option"></div>
                                        </div>
                                    </div> --}}
                                    <label for="" class="num-label">
                                        <input name="top" type="number" class="insert-number ms-2" maxlength="3" pattern="[0-9]" name="">
                                        <input name="middle" type="number" class="insert-number index0 ms-2" maxlength="2" pattern="[0-9]" name="">
                                        <input name="below" type="number" class="insert-number index0 ms-2" maxlength="2" pattern="[0-9]" name="">
                                    </label>
                                </div>
                                <div class="add-column"><i class="fas fa-plus"></i></div>
                            </div>
                        </div>
                        <div class="profile-sidebar-sibling-child">
                            <div class="block--title">Dil Bilikləri</div>
                            <div class="segment-holder">
                                <div class="segment flex-column">
                                    <div class="label-text text-center text-lg-start mt-4">Xarici Dil</div>
                                    <label for="" class="mt-2">
                                        <input type="text" class="system-input">
                                    </label>
                                    <div class="d-flex mt-3">
                                        <label class="checkbox-holder">Zəif
                                            <input type="radio" name="level">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-holder ms-5">Yaxşı
                                            <input type="radio" name="level">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-holder ms-5">Əla
                                            <input type="radio" name="level">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="add-column"><i class="fas fa-plus"></i></div>
                            </div>
                        </div>
                        <div class="profile-sidebar-sibling-child">
                            <div class="block--title">Yaşadığı Ərazi</div>
                            <div class="segment-holder">
                                <div class="segment flex-column flex-sm-row mt-4">
                                    <div class="d-flex flex-column w-50">
                                        <div class="label-text text-center text-lg-start">Şəhər</div>
                                        <div class="mt-3">
                                            <select class="js-example-placeholder-single js-states form-control" lang="az">
                                                <option>Bakı</option>
                                                <option>Gence</option>
                                                <option>Naxcivan</option>
                                            </select>
                                        </div>
                                        {{-- <div style="width: 200px; height: 47px; position: relative" class="mt-3">
                                            <input type="text" class="hidden-search-input" autofocus placeholder="axtar">
                                            <div class="my-select myselec-2 living">
                                                <select name="" class="" id="">
                                                    <option value="Bakı" class="selected">Bakı</option>
                                                    <option value="Baki">Baki</option>
                                                    <option value="Gence">Gence</option>
                                                    <option value="Naxcivan">Naxcivan</option>
                                                    <option value="Lenkeran">Lenkeran</option>
                                                </select>
                                                <div class="clone-select chevron"></div>
                                                <div class="clone-option"></div>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="d-flex flex-column w-50 ms-0 ms-sm-3">
                                        <div class="label-text text-center text-lg-start">Şəhər</div>
                                        <div class="mt-3">
                                            <select class="js-example-placeholder-single js-states form-control" lang="az">
                                                <option>Bakı</option>
                                                <option>Gence</option>
                                                <option>Naxcivan</option>
                                            </select>
                                        </div>
                                        {{-- <div style="width: 200px; height: 47px; position: relative" class="mt-3">
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
                                        </div> --}}
                                    </div>
                                    {{-- <div class="d-flex flex-column">
                                        <div class="label-text text-center text-lg-start">Rayon və qəsəbə</div>
                                        <div style="width: 200px; height: 47px" class="mt-3">
                                            <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                                            <div class="my-select myselec-2 living">
                                                <select name="" class="" id="">
                                                    <option value="Baki" class="selected">Bakı</option>
                                                    <option value="050">Naxcivan</option>
                                                    <option value="051">— 051</option>
                                                    <option value="055">— 055</option>
                                                    <option value="070">— 070</option>
                                                </select>
                                                <div class="clone-select"></div>
                                                <div class="clone-option"></div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="add-column"><i class="fas fa-plus"></i></div>
                            </div>
                            <div class="segment-divider">
                                <div class="block--title">Çalışdığı Ərazilər</div>
                                <div class="segment-holder">
                                    <div class="segment flex-column flex-sm-row mt-4">
                                        <div class="d-flex flex-column w-50">
                                            <div class="label-text text-center text-lg-start">Şəhər</div>
                                            <div class="mt-3">
                                                <select class="js-example-placeholder-single js-states form-control" lang="az">
                                                    <option>Bakı</option>
                                                    <option>Gence</option>
                                                    <option>Naxcivan</option>
                                                </select>
                                            </div>
                                            {{-- <div style="width: 200px"><input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar"></div> --}}
                                            {{-- <div style="width: 200px; height: 47px; position: relative" class="mt-3">
                                                <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
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
                                                </div>
                                            </div> --}}
                                        </div>
                                        <div class="d-flex flex-column w-50 ms-0 ms-sm-3">
                                            <div class="label-text text-center text-lg-start">Şəhər</div>
                                            {{-- <div style="width: 200px; height: 47px; position: relative" class="mt-3">
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
                                            </div> --}}
                                            <div class="mt-3">
                                                <select class="js-example-placeholder-single js-states form-control" lang="az">
                                                    <option>Bakı</option>
                                                    <option>Gence</option>
                                                    <option>Naxcivan</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{-- <div class="d-flex flex-column">
                                            <div class="label-text text-center text-lg-start">Şəhər</div>
                                            <div style="width: 200px; height: 47px" class="mt-3">
                                                <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                                                <div class="my-select myselec-2 living">
                                                    <select name="" class="" id="">
                                                        <option value="Bileceri" class="selected">Bileceri</option>
                                                        <option value="050">BAaki</option>
                                                    </select>
                                                    <div class="clone-select clone-select-border"></div>
                                                    <div class="clone-option"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="label-text text-center text-lg-start">Rayon və qəsəbə</div>
                                            <div style="width: 200px; height: 47px" class="mt-3">
                                            <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                                                <div class="my-select myselec-2 living">
                                                    <select name="" class="" id="">
                                                        <option value="Baki" class="selected">Bakı</option>
                                                        <option value="050">Naxcivan</option>
                                                        <option value="051">— 051</option>
                                                        <option value="055">— 055</option>
                                                        <option value="070">— 070</option>
                                                    </select>
                                                    <div class="clone-select clone-select-border"></div>
                                                    <div class="clone-option"></div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="add-column living"><i class="fas fa-plus"></i></div>
                                </div>
                            </div>
                            <div class="mt-4 d-flex">
                                <div class="myinfo-btn-holder">
                                    <button class="system-clickable system-clickable-color-2">Hesabı Yenilə!</button>
                                </div>
                                <div class="myinfo-btn-holder ms-3">
                                    <button class="system-clickable system-clickable-color-3">Ləğv Et</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="profile-tab-content tab-content" id="1">
                    <form action="">
                        <div class="profile-sidebar-sibling-child">
                            {{-- <form action=""> --}}
                                <div class="change-pass">
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
                                    <div class="caution-sifre">Şifrə ən az 8 simvoldan ibarət olmalıdır</div>
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
                            {{-- </form> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <div class="custom-select" style="width:200px;">
    <input type="text" class="text-test">
    <select>
        <option value="0" class="select-selected"><input type="text"></option>
      <option value="0" >Select car:</option>
      <option value="1">Audi</option>
      <option value="2">BMW</option>
      <option value="3">Citroen</option>
      <option value="4">Ford</option>
      <option value="5">Honda</option>
      <option value="6">Jaguar</option>
      <option value="7">Land Rover</option>
      <option value="8">Mercedes</option>
      <option value="9">Mini</option>
      <option value="10">Nissan</option>
      <option value="11">Toyota</option>
      <option value="12">Volvo</option>
    </select>
  </div> --}}

  {{-- <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown button
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="" ><input type="text"></a>
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
    </div>
  </div> --}}
<style>
    .text-test {
        visibility: hidden;
    }
    .text-test.active {
        visibility: visible;
    }
    /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  var hid = document.getElementsByClassName("text-test")[0]
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
    //   hid.classList.add('active')
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
<script>
        var years = document.getElementsByClassName('years')[0];
        var calDays = document.getElementsByClassName('cal-days')[0];

        var days = new Date().getMonth() + 1;
        var year = new Date().getFullYear();
        var daysInMonth = new Date(year, days, 1);
        for(i=1; i< 32; i++) {
            if(i <10) {
            var btn = `<button type='button' class='day' name='${i}'> 0${i}</button>`;
             var parser = new DOMParser();
             parser.parseFromString(btn, 'text/html');
            }
            else {
            var btn = `<button type='button' class='day' name='${i}'> ${i}</button>`;
            }
                calDays.insertAdjacentHTML('beforeend',btn)
            }
        var selectedBtn = document.getElementsByClassName('day');
        [].forEach.call(selectedBtn, function(el, i, els) {
            el.addEventListener('click', function() {
                [].forEach.call(selectedBtn, function(el) {
                    if(el !== this) {
                        el.classList.remove('active')
                    }
                }, this);
            });
        });
        for(i=1;i<selectedBtn.length; i++) {
            selectedBtn[i].onclick = function() {
                if(!this.classList.contains('active')) {
                    this.classList.add('active');
                }
                else {
                    this.classList.remove('active')
                }
            }
        }
        var tStamp = new Date(1000).getFullYear();
        console.log(tStamp, 't');
        var now = new Date().getFullYear();
        var month = new Date('January')
        var diff = now - tStamp
        while ( tStamp <= now ) {
            years.innerHTML += `<option value=${tStamp} id=${tStamp}>${tStamp++}</option>`;
        }
  </script>
@endsection

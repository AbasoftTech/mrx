@extends('layouts.master')
@section('content')
<section id="myinfo">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Profil məlumatları</a>
        </div>
    </div>
    <div class="container">
        <div class="grid-profile-linklist">
            <a href="{{route("myinfo")}}" class="grid-profile-link grid-profile-link-active">Profil Məlumatları</a>
            <a href="{{route("mycontracts")}}" class="grid-profile-link">Müqavilələrim</a>
            <a href="{{route("photogallery")}}" class="grid-profile-link">Foto Qalareya</a>
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
                    <form action="">
                        <div class="profile-sidebar-sibling-child">
                            <div class="d-flex justify-content-between">
                                <div class="profile-avatar">
                                    <div class="profile-avatar-holder">
                                        <img src="{{asset('frontend/IMAGE/profile-avatar.png')}}" alt="">
                                        <div class="upload-avatar">
                                            <input type="file">
                                            <div class="text-center position-absolute">Sekli deyis</div>
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
                                        <div class="mt-2"><input name="top" type="number" class="system-input" maxlength="3" pattern="[0-9]" name="" id="1"></div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center text-lg-left">Milliyəti</span>
                                        <div class="mt-2"><input type="text" name="password" class="system-input"></div>
                                    </label>
                                    <label for="" class="text-center text-lg-start w-100 mt-3">
                                        <span class="label-text text-center text-lg-left">Təhsili</span>
                                            <div style="height: 47px" class="after-selected">
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
                                    <div style="width: 124px; height: 47px">
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
                                    </div>
                                    <label for="" class="num-label">
                                        <input name="top" type="number" class="insert-number ms-2" maxlength="3" pattern="[0-9]" name="" id="1">
                                        <input name="middle" type="number" class="insert-number index0 ms-2" maxlength="2" pattern="[0-9]" name="" id="2">
                                        <input name="below" type="number" class="insert-number index0 ms-2" maxlength="2" pattern="[0-9]" name="" id="3">
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
                                    <div class="mt-3">
                                        <label for="">
                                            <input type="radio" name="level" id="">
                                            Zəif
                                        </label>
                                        <label for="">
                                            <input type="radio" name="level" id="">
                                        </label>Yaxşı
                                        <label for="">
                                            <input type="radio" name="level" id="">
                                        </label>Əla
                                    </div>
                                </div>
                                <div class="add-column"><i class="fas fa-plus"></i></div>
                            </div>
                        </div>
                        <div class="profile-sidebar-sibling-child">
                            <div class="block--title">Yaşadığı Ərazi</div>
                            <div class="segment-holder">
                                <div class="segment mt-4">
                                    <div class="d-flex flex-column">
                                        <div class="label-text text-center text-lg-start">Şəhər</div>
                                        <div style="width: 200px; height: 47px; position: relative" class="mt-3">
                                            <input type="text" class="hidden-search-input" autofocus="true" placeholder="axtar">
                                            <div class="my-select myselec-2 living">
                                                <select name="" class="" id="">
                                                    <option value="Bakı" class="selected">Bakı</option>
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
                                    <div class="d-flex flex-column">
                                        <div class="label-text text-center text-lg-start">Şəhər</div>
                                        <div style="width: 200px; height: 47px; position: relative" class="mt-3">
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
                                    <div class="segment mt-4">
                                        <div class="d-flex flex-column">
                                            <div class="label-text text-center text-lg-start">Şəhər</div>
                                            <div style="width: 200px; height: 47px; position: relative" class="mt-3">
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
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <div class="label-text text-center text-lg-start">Şəhər</div>
                                            <div style="width: 200px; height: 47px; position: relative" class="mt-3">
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
                                    <div class="add-column"><i class="fas fa-plus"></i></div>
                                </div>
                            </div>
                            <div class="mt-4 d-flex">
                                <div style="width: 29%">
                                    <button class="system-clickable system-clickable-color-2">Hesabı Yenilə!</button>
                                </div>
                                <div style="width: 29%;margin-left: 20px">
                                    <button class="system-clickable system-clickable-color-3">Ləğv Et</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="profile-tab-content tab-content" id="1">
                    <form action="">
                        <div class="profile-sidebar-sibling-child">
                            {{-- <form action=""> --}}dskmd skd skd
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
                            {{-- </form> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
//     var allOption = document.querySelectorAll('.my-select select option');
//     var mySelect = document.querySelectorAll('.my-select')[0];
//     var cloneSelect = document.querySelectorAll('.clone-select')[0];
//     var cloneOption = document.querySelectorAll('.clone-option')[0];
//     for(let i=0; i< allOption.length; i++) {
//             var div = document.createElement('div');
//             if(!allOption[i].classList.contains('selected')) {
//                 div.innerHTML = allOption[i].value;
//                 cloneOption.append(div);
//             } else {
//                 cloneSelect.innerHTML = allOption[i].value;
//             }
//         }
//     cloneSelect.addEventListener("click", () => {
//         if(!cloneOption.classList.contains('active')) {
//             cloneOption.classList.add('active')
//             cloneSelect.style.border = '1px solid transparent'
//             mySelect.style.border = '1px solid #0074E1'
//             mySelect.style.backgroundColor = "#F2F7FF"
//         }
//         else {
//             cloneOption.classList.remove('active')
//             cloneSelect.style.border = '1px solid #C7C7C7'
//             mySelect.style.border = '1px solid transparent';
//             mySelect.style.backgroundColor = "transparent"
//         }
//     })
//     var option = document.querySelectorAll('.clone-option div');
//     for (let index = 0; index < option.length; index++) {
//         option[index].addEventListener('click', function() {
//             var old = cloneSelect.innerText;
//             cloneSelect.innerHTML = this.innerHTML;
//             this.innerHTML = old;
//             cloneOption.classList.remove('active')
//             cloneOption.classList.remove('active')
//             cloneSelect.style.border = '1px solid #C7C7C7'
//             mySelect.style.border = '1px solid transparent';
//             mySelect.style.backgroundColor = "transparent"
//         })
//     }

//     var now = new Date().getFullYear();
//     var stamp = new Date(1000);

//     // var distance = now - stamp;
//     console.log(Number(Date.now()));
// </script>
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

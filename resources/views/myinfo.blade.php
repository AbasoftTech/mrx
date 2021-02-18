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
            <a href="{{route("myinfo")}}" class="grid-profile-link grid-profile-link-active">Profil Məlumatları</a>
            <a href="{{route("mycontracts")}}" class="grid-profile-link">Müqavilələrim</a>
            <a href="{{route("photogallery")}}" class="grid-profile-link">Foto Qalareya</a>
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
                                            {{-- <input type="date" name="password" class="system-input"> --}}
                                            {{-- <div id='calendar'></div> --}}
                                            <div class="arrive-calendar" data-toggle='datepicker'>
                                            </div>
                                            <div class="my-calendar">
                                            </div>
                                                <div class="d-flex">
                                                    {{-- <div class="selector"></div> --}}
                                                    {{-- <div class="custom-select-c custom-select-prefix" style="width:200px;">
                                                        <select name="months" class="months">
                                                            <option value="">Yanvar</option>
                                                            <option value="">Fevral</option>
                                                            <option value="">Mart</option>
                                                            <option value="">Aprel</option>
                                                            <option value="">May</option>
                                                        </select>
                                                    </div>
                                                    <div class="custom-select-c custom-select-prefix" style="width:200px;">
                                                        <select name="years" class="years" style="height:100px;">
                                                        </select>
                                                    </div> --}}
                                                    {{-- <div class="custom-select" style="width:200px;">
                                                        <select>
                                                            <option value="Aylar">Aylar</option>
                                                            <option value="Years">Years</option>
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
                                                    </div>
                                                    <div class="custom-select" style="width:200px;">
                                                        <select class="years">
                                                            <option value="İllər">Years</option>
                                                        </select>
                                                    </div> --}}
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
                                                    <div style="width: 200px; height: 47px">
                                                        <div class="my-select myselec-2">
                                                            <select name="years" class="years" id="">
                                                                <option value="İllər" class="selected">İllər</option>
                                                            </select>
                                                            <div class="clone-select clone-select-border"></div>
                                                            <div class="clone-option"></div>
                                                        </div>
                                                    </div>
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
                                        <div class="custom-select-c custom-select-prefix" style="width:200px;">
                                            {{-- <select name="prefix">
                                                <option value="050">050</option>
                                                <option value="051">051</option>
                                                <option value="055">055</option>
                                                <option value="070">070</option>
                                                <option value="077">077</option>
                                            </select> --}}
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
                                    <div style="width: 200px; height: 47px">
                                        <div class="my-select myselec-2">
                                            <select name="" class="" id="">
                                                <option value="Prefix" class="selected">Prefix</option>
                                                <option value="050">— 050</option>
                                                <option value="051">— 051</option>
                                                <option value="055">— 055</option>
                                                <option value="070">— 070</option>
                                            </select>
                                            <div class="clone-select clone-select-border"></div>
                                            <div class="clone-option"></div>
                                        </div>
                                    </div>
                                    <label for="" class="num-label">
                                        <input name="top" type="number" class="insert-number" maxlength="3" pattern="[0-9]" name="" id="1">
                                        <input name="middle" type="number" class="insert-number index0" maxlength="2" pattern="[0-9]" name="" id="2">
                                        <input name="below" type="number" class="insert-number index0" maxlength="2" pattern="[0-9]" name="" id="3">
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
                                        <div style="width: 200px; height: 47px" class="mt-3">
                                            <div class="my-select myselec-2">
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
                                            <div class="my-select myselec-2">
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
                                    </div>
                                </div>
                                <div class="add-column"><i class="fas fa-plus"></i></div>
                            </div>
                            <div class="segment-divider">
                                <div class="block--title">Çalışdığı Ərazilər</div>
                                <div class="segment-holder">
                                    <div class="segment mt-4">
                                        <div class="d-flex flex-column">
                                            <div class="label-text text-center text-lg-start">Şəhər</div>
                                            <div style="width: 200px; height: 47px" class="mt-3">
                                                <div class="my-select myselec-2">
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
                                                <div class="my-select myselec-2">
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
                                        </div>
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
    {{-- <div class="container">
        <div style="width: 200px">
            <div class="my-select">
                <select name="" id="">
                    <option value="İngilis dili">İngilis dili</option>
                    <option value="Alman Dili">Alman Dili</option>
                    <option value="Rus Dili" class="selected">Rus Dili</option>
                    <option value="Türk Dili">Türk Dili</option>
                </select>
                <div class="clone-select"></div>
                <div class="clone-option"></div>
            </div>
        </div>
    </div> --}}
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

<style>
    .custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element: */
}

.select-selected {
  background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
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

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}

/* Style items (options): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
<script>
    // $(document).ready(function() {
    //     $('.arrive-calendar').datepicker({
    //         inline: true,
    //     });
    // })
        var years = document.getElementsByClassName('years')[0];
        var tStamp = new Date(1000).getFullYear();
        // console.log(tStamp +  1);
        var now = new Date().getFullYear();
        var month = new Date('January')
        console.log(month);
        var diff = now - tStamp
        while ( tStamp <= now ) {
            years.innerHTML += `<option value=${tStamp++}>${tStamp}</option>`;
        }
  </script>
<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
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
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
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

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script>
@endsection

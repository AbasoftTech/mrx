
// index slider
var indexOwl = $('.owl-carousel.owl-index-carousel');
$('.owl-carousel.owl-index-carousel').owlCarousel({
    loop: true,
    // autoplay: true,
    items: 1,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1,
            dots: true,
        },
    },
    smartSpeed: 10,
    animateOut: 'fadeOut',
    // animateIn: 'flipInX',
})
indexOwl.on('changed.owl.carousel', function (e) {
    // console.log("currentRelated: ", e.relatedTarget.current())
    // console.log("current: ", e.item.index - 1) //same
    // console.log("total: ", e.item.count) //total
    if (!e.namespace) {
        return;
    }
    var slides = e.relatedTarget;
    // $('.count').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
    document.getElementsByClassName('total-count')[0].innerText = `/ 0${e.item.count}`
    document.getElementsByClassName('per-count')[0].innerText = `0${slides.relative(slides.current())+1}`
    // document.getElementsByClassName('total-count')[0].innerText = `/ 0${e.item.count}`
    // document.getElementsByClassName('per-count')[0].innerText = `0${e.relatedTarget.current() -1}`
})
// index slider
// media slider
$('.owl-carousel.owl-media-carousel').owlCarousel({
    loop: true,
    margin: 19,
    responsive: {
        0: {
            items: 1,
            dotsEach: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 3,
            dots: true,
            dotsEach: 2,
            nav: true,
            navText: ["<img src='frontend/IMAGE/icons/arrow.svg'>", "<img src='frontend/IMAGE/icons/arrow.svg'>"]
        }
    }
})
// media slider
var owlRieltor = $('.owl-carousel.owl-rieltor-carousel');

$('.owl-carousel.owl-rieltor-carousel').owlCarousel({
    loop: true,
    margin: 19,
    responsive: {
        0: {
            items: 1,
            // dotsEach: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 6,
            dots: true,
            dotsEach: 3,
            nav: true,
            navText: ["<img src='frontend/IMAGE/icons/arrow-rieltor.svg'>", "<img src='frontend/IMAGE/icons/arrow-rieltor.svg'>"]
        }
    }
})

owlRieltor.on('changed.owl.carousel', function (e) {
    // console.log("currentRelated: ", e.relatedTarget.current())
    // console.log("current: ", e.item.index - 1) //same
    // console.log("total: ", e.item.count) //total
    if (!e.namespace) {
        return;
    }
    var slides = e.relatedTarget;
    // $('.count').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
    document.getElementsByClassName('total-owl-page')[0].innerText = `${e.item.count}`
    document.getElementsByClassName('current-owl-page')[0].innerText = `${slides.relative(slides.current())+1}`
    // document.getElementsByClassName('total-count')[0].innerText = `/ 0${e.item.count}`
    // document.getElementsByClassName('per-count')[0].innerText = `0${e.relatedTarget.current() -1}`
})

if (typeof owlRieltor[0] != 'undefined') {
    var at = owlRieltor[0].children[0].children[0].children.length - 12;
    document.getElementsByClassName('total-owl-page')[0].innerText = at
}


var owlNewsDetails = $('.owl-carousel.owl-news-detail-carousel');

$('.owl-carousel.owl-news-detail-carousel').owlCarousel({
    loop: true,
    margin: 19,
    responsive: {
        0: {
            items: 1,
            // dotsEach: 2
        },
        600: {
            items: 2
        },
        1000: {
            items: 4,
            dots: true,
            dotsEach: 3,
            nav: true,
            navText: ["<img src='frontend/IMAGE/icons/arrow-rieltor.svg'>", "<img src='frontend/IMAGE/icons/arrow-rieltor.svg'>"]
        }
    }
})
owlNewsDetails.on('changed.owl.carousel', function (e) {
    // console.log("currentRelated: ", e.relatedTarget.current())
    // console.log("current: ", e.item.index - 1) //same
    // console.log("total: ", e.item.count) //total
    if (!e.namespace) {
        return;
    }
    var slides = e.relatedTarget;
    // $('.count').text(slides.relative(slides.current()) + 1 + '/' + slides.items().length);
    document.getElementsByClassName('total-owl-page')[0].innerText = `${e.item.count}`
    document.getElementsByClassName('current-owl-page')[0].innerText = `${slides.relative(slides.current())+1}`
    // document.getElementsByClassName('total-count')[0].innerText = `/ 0${e.item.count}`
    // document.getElementsByClassName('per-count')[0].innerText = `0${e.relatedTarget.current() -1}`
})

if (typeof owlNewsDetails[0] != 'undefined') {
    var at = owlNewsDetails[0].children[0].children[0].children.length - 12;
    document.getElementsByClassName('total-owl-page')[0].innerText = at
}

// search contract input focus script
document.getElementsByClassName('search--contract--input-box')[0].addEventListener('focus', focusOn);

function focusOn() {
    document.getElementsByClassName('code_contract')[0].classList.add('code_visible');
    document.getElementsByClassName('search--contract--input-box')[0].style.paddingLeft = '70px';
}
// search contract input focus script

// ===custom select===
var allOption = document.querySelectorAll('.my-select select option');
var mySelect = document.querySelectorAll('.my-select');
var months31 = ['Yanvar',"Mart", "May", "İyul", "Avqust", "Oktyabr","Dekabr"];
var months30 = ['Aprel',"İyun", "May","Sentyabr",'Noyabr'];
var $day = document.querySelectorAll(".day");
var $calDays = document.querySelectorAll(".cal-days")[0];


// var cloneSelect = document.querySelectorAll('.clone-select')[0];
// var cloneOption = document.querySelectorAll('.clone-option')[0];
var cloneSelect, cloneOption;
for (var i = 0; i < mySelect.length; i++) {
    var mySelectI = mySelect[i];
    var select = mySelect[i].getElementsByTagName('select')[0];
    cloneSelect = mySelect[i].getElementsByClassName("clone-select")[0];
    cloneOption = mySelect[i].getElementsByClassName("clone-option")[0];
    var dateArr = [];

    for (let i = 0; i < select.options.length; i++) {
        var div = document.createElement('div');
        var span = document.createElement('span');
        var line = document.createElement('span');
        line.className = "pre-line"
        if (!select.options[i].classList.contains('selected')) {

            span.innerHTML = select.options[i].value;
            div.append(span)
            if(select.parentElement.classList.contains('prefix')) {
                div.className = "preline-exs"
                div.append(line);
            }
        } else {
            cloneSelect.innerHTML = select.options[i].value;
        }
        cloneOption.append(div);

        if(mySelectI.parentElement.classList.contains("calendar-select")) {
            div.setAttribute("id", select.options[i].getAttribute("id"))
        }
        div.addEventListener('click', function () {
            this.parentElement.parentElement.getElementsByClassName('clone-select')[0].innerHTML = this.innerHTML;
            this.parentElement.classList.remove('active');
            this.parentElement.parentElement.classList.remove('active');
            this.parentElement.previousElementSibling.classList.remove('active');
            if(this.parentElement.parentElement.classList.contains('living')) {
                this.parentElement.parentElement.previousElementSibling.classList.remove("active")
            }
            for(i=0; i< months31.length; i++) {
                if(this.innerHTML == months30[i]) {
                //    $day[$day.length - 1].style.display = 'none';
                [...$day].splice($day.length-0,30)
                // console.log($day.length)
                }
                if(this.innerHTML == months31[i]) {
                    $day[$day.length - 1].style.display = 'inline-block'
                }

                var $dayFebruary =  [...$day].splice($day.length-3,3);
                for(var j = 0; j < $dayFebruary.length; j++) {
                    if(this.innerHTML === "Fevral") {
                        $dayFebruary[j].style.display = 'none'
                    }
                    // else {
                    //     $dayFebruary[j].style.display = 'inline-block'
                    // }
                }
            }
            // if(this.parentElement.parentElement.classList.contains('myselect1')) {

            //     var month = this.innerHTML
            // }
            // else {
            //     var year = this.innerHTML
            // }
            if(dateArr.length >= 2) {
                dateArr = []
            }
            if(!dateArr.includes(this.getAttribute("id"))) {
                dateArr.push(this.getAttribute("id"))
            }
            // console.log(dateArr)
            // if(typeof dateArr[dateArr.length] != "undefined") {

            // }
            // else {console.log('has undefined')}
            if(dateArr.length >= 2) {
                userDate(dateArr);
            }
            // console.log(dateArr, 'ids');
        })

        function userDate(array) {
            // var t = array.sort(function(a, b){return a - b})
            // console.log(t)
            // for(var i =0; i < array.length; i++) {
            //     if(typeof parseInt(array[i]) ===  'number') {
            //         console.log(date)
            //         // var fullDate = new Date(date);
            //         // console.log(fullDate, 'full')
            //     }
            // }
            array.map(datam => {
                if(typeof parseInt(datam) ===  'number') {
                    var fullDate = new Date(datam);
                }
            })
            // console.log(array)
        }
    }

    function clickHandler(e) {
        // console.log(this.getElementsByClassName('clone-select')[0])
        if (e.target.matches(`.${cloneSelect.className.slice(0, 13)}`)) {
            // console.log(`.${cloneSelect.className.slice(0, 13)}`);
            // this.getElementsByClassName('clone-select')[0].addEventListener("click", function () {

            //     if (!this.nextSibling.nextSibling.classList.contains('active')) {
            //         this.nextSibling.nextSibling.classList.add('active')
            //         this.parentElement.getElementsByClassName('clone-select')[0].style.border = '1px solid transparent'
            //         this.parentElement.getElementsByClassName('clone-select')[0].style.backgroundColor = '#F2F7FF'
            //         this.parentElement.style.border = '1px solid #0074E1'
            //         this.parentElement.style.backgroundColor = "#F2F7FF"
            //     } else {
            //         this.nextSibling.nextSibling.classList.remove('active');
            //         // console.log(this.parentElement.getElementsByClassName('clone-select')[0], 'this')
            //         this.parentElement.getElementsByClassName('clone-select')[0].style.border = '1px solid #C7C7C7';
            //         this.parentElement.getElementsByClassName('clone-select')[0].style.backgroundColor = '#fff'
            //         this.parentElement.style.border = '1px solid transparent';
            //         this.parentElement.style.backgroundColor = "transparent"
            //     }
            // })
        }
        // console.log(e.target);
        // e.stopPropagation();
    }
    cloneSelect.addEventListener("click", function () {
        if(this.parentElement.classList.contains('living')) {
            this.parentElement.previousElementSibling.classList.toggle("active");
            this.parentElement.previousElementSibling.autofocus
        }
        // document.getElementsByClassName("hidden-search-input")[0].classList.toggle("visible")
        console.log(this.nextSibling.nextSibling)
        this.nextSibling.nextSibling.classList.toggle('active')
        this.parentElement.classList.toggle('active')
        this.classList.toggle('active')
        // if (!this.nextSibling.nextSibling.classList.contains('active')) {
        //     this.nextSibling.nextSibling.classList.add('active');
        //     calDays.style.zIndex = '1'
        //     this.parentElement.getElementsByClassName('clone-select')[0].style.border = '1px solid transparent'
        //     this.parentElement.getElementsByClassName('clone-select')[0].style.backgroundColor = '#F2F7FF'
        //     this.parentElement.style.border = '1px solid #0074E1'
        //     this.parentElement.style.backgroundColor = "#F2F7FF"
        // } else {
        //     this.nextSibling.nextSibling.classList.remove('active');
        //     calDays.style.zIndex = '111'
        //     // console.log(this.parentElement.getElementsByClassName('clone-select')[0], 'this')
        //     this.parentElement.getElementsByClassName('clone-select')[0].style.border = '1px solid #C7C7C7';
        //     this.parentElement.getElementsByClassName('clone-select')[0].style.backgroundColor = '#fff'
        //     this.parentElement.style.border = '1px solid transparent';
        //     this.parentElement.style.backgroundColor = "transparent"
        // }
    })
    // var option = document.querySelectorAll('.clone-option div');
    // var l = cloneOption.getElementsByTagName("div").length
    // // console.log(cloneOption.getElementsByTagName("div").length, 'un');
    // for (let index = 0; index < l; index++) {
    //     cloneOption.getElementsByTagName('div')[i].addEventListener('click', function() {
    //         console.log(this)
    //         var old = cloneSelect.innerText;
    //         cloneSelect.innerHTML = this.innerHTML;
    //         this.innerHTML = old;
    //         cloneOption.classList.remove('active');
    //         cloneOption.classList.remove('active')
    //         cloneSelect.style.border = '1px solid #C7C7C7'
    //         mySelectI.style.border = '1px solid transparent';
    //         mySelectI.style.backgroundColor = "transparent"
    //     })
    // }

    // for (let index = 0; index < option.length; index++) {
    //     option[index].addEventListener('click', function() {
    //         var old = cloneSelect.innerText;
    //         cloneSelect.innerHTML = this.innerHTML;
    //         this.innerHTML = old;
    //         cloneOption.classList.remove('active')
    //         cloneOption.classList.remove('active')
    //         cloneSelect.style.border = '1px solid #C7C7C7'
    //         mySelectI.style.border = '1px solid transparent';
    //         mySelectI.style.backgroundColor = "transparent"
    //     })
    // }
}
// document.addEventListener('click', function() {
//     for (var index = 0; index < cloneOption.length; index++) {
//         cloneOption[index].classList.remove('active')
//     }
// })
// for(let i=0; i< allOption.length; i++) {
//     var div = document.createElement('div');
//     if(!allOption[i].classList.contains('selected')) {
//         div.innerHTML = allOption[i].value;
//         cloneOption.append(div);
//     } else {
//         cloneSelect.innerHTML = allOption[i].value;
//     }
// }


// ===custom select===

$(function () {
    $(".insert-number").keyup(function () {
        if (this.value.length > 3) {
            this.value = this.value.slice(0, 2);
        }
        // if (insert[0].value.length > 3) {
        //     insert[0].value.length = insert[0].value.slice(0, 4);
        // }

        if (this.value.length == this.maxLength) {
            var $next = $(this).next('.insert-number');
            $next.keydown(function (e) {
                var key = e.key
                if (key == 'Backspace' && this.value.length == 0) {
                    $(this).prev('.insert-number').focus();
                }
            })
            if ($next.length)
                $(this).next('.insert-number').focus();
            else
                $(this).blur();
        }
    });
})
$('body').click(function () {
    var insert = $(".index0");
    insert.focusout(function () {
        console.log(this.value.length);
        if (this.value.length == 3) {
            this.value = this.value.slice(0, 2);
        }
    })
})


var burger = document.getElementsByClassName('burger-menu-holder')[0];
var burgerLine = document.getElementsByClassName('burger-menu-line');
var burgerCollapse = document.getElementsByClassName('burger-collapse')[0];


// ===burger collapse===
document.body.addEventListener("click", () => {
    burgerLine[1].classList.remove('burger-menu-line1-after')
    burgerLine[2].classList.remove('burger-menu-line2-after')
    burgerCollapse.classList.remove('burger-collapsed')
}, false);

burger.addEventListener("click", (e) => {
    if (!burgerLine[1].classList.contains("burger-menu-line1-after") && !burgerLine[1].classList.contains("burger-menu-line1-after")) {
        burgerLine[1].classList.add('burger-menu-line1-after')
        burgerLine[2].classList.add('burger-menu-line2-after');
        burgerCollapse.classList.add('burger-collapsed')
    } else {
        burgerLine[1].classList.remove('burger-menu-line1-after')
        burgerLine[2].classList.remove('burger-menu-line2-after')
        burgerCollapse.classList.remove('burger-collapsed')
    }
    e.stopPropagation();
}, false)
// ===burger collapse===


// === tab ===
var tab = document.querySelectorAll(".tablist > .tab");

if (tab) {
    for (i = 0; i < tab.length; i++) {
        tab[i].addEventListener('click', function (e) {
            e.preventDefault();
            var active_tab = document.getElementsByClassName("tab-active");
            active_tab[0].className = active_tab[0].className.replace("tab-active", " ");
            this.classList.add("tab-active");
            var tabContent = document.getElementsByClassName("tab-content");
            for (j = 0; j < tabContent.length; j++) {
                var tabId = e.target.getAttribute('data-id')
                tabContent[j].classList.remove("content-active")
                var new_content = document.getElementById(tabId);
                new_content.classList.add("content-active");
            }
        })
    }
}
// === tab ===
// === balans tab ===
var balansTab = document.querySelectorAll(".choose-balans");
var insertMoney = document.querySelectorAll(".insert-money")[0];

if (balansTab) {
    for (i = 0; i < balansTab.length; i++) {
        balansTab[i].addEventListener('click', function (e) {
            e.preventDefault();
            // var active_tab = document.getElementsByClassName("active");
            // console.log(active_tab);
            // if(active_tab) {
                // active_tab[0].className = active_tab[0].className.replace("active", " ");
            // }

            this.classList.toggle("active");
        })
    }
}
if(insertMoney) {
    insertMoney.addEventListener('focusin',function(){
        for (let i = 0; i < balansTab.length; i++) {
            if(balansTab[i].classList.contains('active')) {
                balansTab[i].classList.remove('active')
            }
        }
    })
}
// insertMoney.addEventListener('focusout',function(){
//     for (let i = 0; i < balansTab.length; i++) {
//         if(!balansTab[i].classList.contains('active')) {
//             balansTab[i].classList.add('active')
//         }
//     }
// })
// === balans tab ===




// ===check rieltor img ===
var rieltorImg = document.querySelectorAll(".rieltor-grid-img img");
for (i = 0; i < rieltorImg.length; i++) {
    if (rieltorImg[i].src == "http://127.0.0.1:8000/rieltors") {
        rieltorImg[i].src = 'http://127.0.0.1:8000/frontend/IMAGE/icons/loader.svg';
        rieltorImg[i].classList.add('loader')
    }
}
// ===check rieltor img ===

// ===date ===
var date = document.querySelectorAll('.copyright span')[0];

date.innerText = new Date().getFullYear();
// ==date ===

// ==add column ===
var addColumn = document.getElementsByClassName('add-column');
var segmentHolder = document.getElementsByClassName('segment-holder')[0];
// var segment = document.getElementsByClassName('segment')[0];

var segment;
for (let index = 0; index < addColumn.length; index++) {
    var count = 1
    addColumn[index].addEventListener('click', function () {
        // segment1 = this.previousSibling.previousSibling;
    //     var segment2 = `
    //     <div class="segment mt-4">
    //     <div style="width: 200px; height: 47px">
    //         <div class="my-select myselec-2">
    //             <select name="" class="" id="">
    //                 <option value="Prefix" class="selected">Prefix</option>
    //                 <option value="050">— 050</option>
    //                 <option value="051">— 051</option>
    //                 <option value="055">— 055</option>
    //                 <option value="070">— 070</option>
    //             </select>
    //             <div class="clone-select clone-select-border"></div>
    //             <div class="clone-option"></div>
    //         </div>
    //     </div>
    //     <label for="" class="num-label">
    //         <input name="top" type="number" class="insert-number" maxlength="3" pattern="[0-9]" name="" id="1">
    //         <input name="middle" type="number" class="insert-number index0" maxlength="2" pattern="[0-9]" name="" id="2">
    //         <input name="below" type="number" class="insert-number index0" maxlength="2" pattern="[0-9]" name="" id="3">
    //     </label>
    // </div>
    //     `;
        segment1 = this.parentElement.getElementsByClassName('segment')[0]
        // console.log(segment1, segment2)
        // console.log(typeof segment)
        if (count < 4) {
            var segmentClone = segment1.cloneNode(true);
            // this.parentElement.append(segmentClone);
            var parser = new DOMParser();
            parser.parseFromString(segmentClone, 'text/html');
            this.parentElement.insertBefore(segmentClone,this.parentElement.childNodes[0])
            // this.parentElement.insertAdjacentHTML("afterbegin", segmentClone)
            console.log(segmentClone, 'after')


            var g = segmentClone.getElementsByClassName('clone-select');
            for(i=0;i<g.length; i++) {
                g[i].onclick = function() {
                    // if(!this.nextSibling.nextSibling.classList.contains('active')){
                        this.nextSibling.nextSibling.classList.toggle('active');
                        this.nextSibling.parentElement.classList.toggle('active');
                        this.classList.toggle('active');
                    // }
                    // else {
                        // this.nextSibling.nextSibling.classList.remove('active');
                    // }
                }
                // g[i].onclick = function() {
                // }
            }
            // this.parentElement.insertAdjacentHTML('beforebegin', segmentClone)
        }
        count++
    })
}
// $('.add-column').click(function (e) {
//     var count = 1;
//     var seg = $(this).prev().eq(0);
//     var emp = seg;
//     if (count < 4) {

//         $(this).insertAfter(emp)

//     }
//     count++
//     // ==add column ===


// })


// reference to a list
const list = document.querySelectorAll('.segment');
for (let index = 0; index < list.length; index++) {
    list[index].addEventListener('mouseover', clickHandler);
}
// add a single listener on list item



// === rotate & remove control btns ===



var profGridGal = document.getElementsByClassName('profile-grid-gallery')[0];
var addNewGalItem = document.getElementsByClassName('add-new-gal-item')[0];
// var control = document.getElementsByClassName('grid-gallery-item-control')[0];
// var controller = "<div class='grid-gallery-item-control'></div>";
var remove = function removeNow(e) {
    e.currentTarget.parentElement.parentElement.remove()
}
var deg = 45
var rotate = function rotateNow(e) {
    e.currentTarget.parentElement.previousElementSibling.style.transform = `rotate(${deg}deg)`
    deg += 45
}
function uploadGal(input) {
    if (input.files && input.files[0]) {
        for(i=0;i<input.files.length; i++) {
        var reader = new FileReader();
        reader.onload = function(e) {

        console.log(e)
        var gal = document.createElement('div')
        gal.className = "grid-gallery-item";
        var img = document.createElement('img');
        console.log(input.files)
        img.src = e.target.result;
        gal.append(img);
        var removeBtn = document.createElement("button");
        var rotateBtn = document.createElement("button");
        removeBtn.className = "remove--item";
        rotateBtn.className = "rotate--item";
        removeBtn.innerHTML = '<i class="fas fa-trash mb-2"></i><span>Sil</span>';
        rotateBtn.innerHTML = '<i class="fas fa-redo-alt mb-2"></i><span>Çevir</span>';
        removeBtn.onclick = remove;
        rotateBtn.onclick = rotate;
        removeBtn.setAttribute('type', 'button');
        rotateBtn.setAttribute('type', 'button');
        var controller = document.createElement('div');
        controller.className = "grid-gallery-item-control";
        controller.append(removeBtn);
        controller.append(rotateBtn);
        gal.append(controller);
        // control.classList.add('active')
        profGridGal.insertBefore(gal,addNewGalItem)
    }
        reader.readAsDataURL(input.files[i]);
    }
  }
}
var uploadedContract = document.getElementsByClassName('uploadedContract');
function addContract(input) {
    console.log(input.parentElement.nextSibling, 'in[put')
    if (input.files && input.files[0]) {
        for(i=0;i<input.files.length; i++) {
        var reader = new FileReader();
        reader.onload = function(e) {
        var gal = document.createElement('div')
        gal.className = "contract-item";
        var img = document.createElement('img');
        console.log(input.files)
        img.src = e.target.result;
        gal.append(img);
        var removeBtn = document.createElement("button");
        var rotateBtn = document.createElement("button");
        removeBtn.className = "remove--item";
        rotateBtn.className = "rotate--item";
        removeBtn.innerHTML = '<i class="fas fa-trash mb-2"></i><span>Sil</span>';
        rotateBtn.innerHTML = '<i class="fas fa-redo-alt mb-2"></i><span>Çevir</span>';
        removeBtn.onclick = remove;
        rotateBtn.onclick = rotate;
        removeBtn.setAttribute('type', 'button');
        rotateBtn.setAttribute('type', 'button');
        var controller = document.createElement('div');
        controller.className = "contract-item-control";
        controller.append(removeBtn);
        controller.append(rotateBtn);
        gal.append(controller);
        // control.classList.add('active')
        // for(var j=0; j <uploadedContract.length; j++) {
        //     uploadedContract[j].append(gal);
        //     if(uploadedContract[j].childNodes.length != 0) {
        //         uploadedContract[j].style.overflowY = 'scroll'
        //         uploadedContract[j].style.display = 'grid'
        //     }
        // }
        input.parentElement.nextSibling.nextSibling.append(gal)
        if(input.parentElement.nextSibling.nextSibling.childNodes.length != 0) {
            input.parentElement.nextSibling.nextSibling.style.overflowY = 'scroll'
            input.parentElement.nextSibling.nextSibling.style.display = 'grid'
        }
        // dropFile.insertBefore(gal,addNewGalItem)
    }
        reader.readAsDataURL(input.files[i]);
    }
  }
}
// === rotate & remove control btns ===

$('.bd-calendar').click(function() {
    $(this).addClass('active')
})


// index slider
var indexOwl = $('.owl-carousel.owl-index-carousel');
$('.owl-carousel.owl-index-carousel').owlCarousel({
    loop: true,
    autoplay: true,

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
    smartSpeed: 100,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
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
            dotsEach: 4
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
    // items:1,
    // dotsEach: 2,
    margin: 19,
    responsive: {
        0: {
            items: 1,
            dotsEach: 3,
        },
        // 476: {
        //     items: 2
        // },
        376: {
            items: 2
        },
        876: {
            items: 3
        },
        1200: {
            items: 4,
            dots: true,
            dotsEach: 3,
            nav: true,
            navText: ["<img src='frontend/IMAGE/icons/arrow-rieltor.svg'>", "<img src='frontend/IMAGE/icons/arrow-rieltor.svg'>"]
        },
        responsiveBaseElement: 'body',
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
        if (!select.options[i].selected)  {
            span.innerHTML = select.options[i].value;
            div.append(span)
            if(select.parentElement.classList.contains('prefix')) {
                div.className = "preline-exs"
                div.append(line);
            }
        } else {
            cloneSelect.innerHTML = select.options[i].value;
            //  setAttribute('selected', 'selected')
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
                this.parentElement.parentElement.previousElementSibling.classList.remove("active");
            }
            if(this.innerHTML.slice(6,9) == this.parentElement.parentElement.getElementsByTagName('select')[0].options[i].value) {
                this.parentElement.parentElement.getElementsByTagName('select')[0].options[select.selectedIndex].removeAttribute('selected')
                this.parentElement.parentElement.getElementsByTagName('select')[0].options[i].setAttribute('selected','selected')
            }
            // console.log(this.parentElement.parentElement.getElementsByTagName('select')[0].options[i].value, this.innerHTML.slice(6,9))
            // selectedOptions[0].removeAttribute("selected", "selected")
            // if(this.innerHTML == select.options[i].value) {
            //     // select.options[select.selectedIndex].innerHTML =
            // }
            // else {
            //     console.log('no');
            // }
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
            if(dateArr.length >= 2) {
                dateArr = []
            }
            if(!dateArr.includes(this.getAttribute("id"))) {
                dateArr.push(this.getAttribute("id"))
            }
            if(dateArr.length >= 2) {
                userDate(dateArr);
            }
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
    var clicked = false;
    // document.body.addEventListener("click", () => {
    //     var allSelect = document.getElementsByClassName('my-select');
    //     var allSelectOption = document.getElementsByClassName('clone-option');
    //     var allSelectSelect = document.getElementsByClassName('clone-select');
    //     var hidInput = document.getElementsByClassName('hidden-search-input');
    //     // function checkClick(e) {
    //     //     clicked = true;
    //     //     console.log('true');
    //     // }
    //     for (let index = 0; index < hidInput.length; index++) {
    //         hidInput[index].addEventListener('click', function () {
    //             console.log(this, 'yeahs')
    //             this.classList.add('active')
    //         })
    //     }

    //     // for (var index = 0; index < hidInput.length; index++) {
    //     //     hidInput[index].addEventListener('click',checkClick )
    //     //     // hidInput[index].classList.add('active');
    //     //     // allSelectSelect[index].classList.remove('active');
    //     //     // console.log(hidInput[index], 'caaan')
    //     // }
    //     for (var index = 0; index < allSelect.length; index++) {
    //         // if(clicked == true) {
    //         //     console.log('true', 'trudud buuu')
    //         //     return
    //         // }
    //         allSelect[index].classList.remove('active');
    //         allSelectOption[index].classList.remove('active');
    //         allSelectSelect[index].classList.remove('active');
    //         // hidInput[index].classList.remove('active');

    //     }
    // });
    document.onclick= function(event) {
        // Compensate for IE<9's non-standard event model
        //
        var allSelect = document.getElementsByClassName('my-select');
        var allSelectOption = document.getElementsByClassName('clone-option');
        var allSelectSelect = document.getElementsByClassName('clone-select');
        var hidInput = document.getElementsByClassName('hidden-search-input');

        if (event===undefined) event= window.event;
        var target= 'target' in event? event.target : event.srcElement;
        if(!target.classList.contains('living')) {
            for (var index = 0; index < allSelect.length; index++) {
                if(hidInput == true) {
                    hidInput[index].classList.remove('active');
                }
                allSelect[index].classList.remove('active');
                allSelectOption[index].classList.remove('active');
                allSelectSelect[index].classList.remove('active');
            }
        }
        // else {
        //     console.log('this is not living')
        // }
        // alert('clicked on '+target.className);
    };
    cloneSelect.addEventListener("click", function (e) {
        if(this.parentElement.classList.contains('living')) {
            this.parentElement.previousElementSibling.classList.add("active");
            this.parentElement.previousElementSibling.autofocus
        }
        this.nextSibling.nextSibling.classList.add('active')
        this.parentElement.classList.add('active')
        this.classList.add('active')
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
        e.stopPropagation();
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
    if(burgerLine[1].classList.contains("burger-menu-line1-after")) {
        burgerLine[1].classList.remove('burger-menu-line1-after')
        burgerLine[2].classList.remove('burger-menu-line2-after')
        burgerCollapse.classList.remove('burger-collapsed')
    }
}, false);

burger.addEventListener("click", (e) => {
    burgerLine[1].classList.toggle('burger-menu-line1-after')
    burgerLine[2].classList.toggle('burger-menu-line2-after');
    burgerCollapse.classList.toggle('burger-collapsed');
    // if (!burgerLine[1].classList.contains("burger-menu-line1-after")) {
    //     burgerLine[1].classList.add('burger-menu-line1-after')
    //     burgerLine[2].classList.add('burger-menu-line2-after');
    //     burgerCollapse.classList.add('burger-collapsed');
    // } else {
    //     burgerLine[1].classList.remove('burger-menu-line1-after')
    //     burgerLine[2].classList.remove('burger-menu-line2-after')
    //     burgerCollapse.classList.remove('burger-collapsed')
    // }
    e.stopPropagation();
})
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
                var tabId = e.target.getAttribute('data-id');
                console.log(tabId)
                tabContent[j].classList.remove("content-active")
                var new_content = document.getElementById(tabId);
                console.log(new_content)
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
    addColumn[index].addEventListener('click', function () {
        var count = 1
        segment1 = this.parentElement.getElementsByClassName('segment')[0];
        if (count < 4) {
            var segmentClone = segment1.cloneNode(true);
            // this.parentElement.append(segmentClone);
            var parser = new DOMParser();
            parser.parseFromString(segmentClone, 'text/html');
            this.parentElement.insertBefore(segmentClone,this.parentElement.childNodes[0])
            var g = segmentClone.getElementsByClassName('clone-select');
            for(i=0;i<g.length; i++) {
                g[i].onclick = function() {
                    // if(!this.nextSibling.nextSibling.classList.contains('active')){
                        this.nextSibling.nextSibling.classList.toggle('active');
                        this.nextSibling.parentElement.classList.toggle('active');
                        this.classList.toggle('active');
                }
            }
        }
        count++
    })
}

// reference to a list
const list = document.querySelectorAll('.segment');
for (let index = 0; index < list.length; index++) {
    list[index].addEventListener('mouseover', clickHandler);
}
// add a single listener on list item



// === rotate & remove control btns ===



var profGridGal = document.getElementsByClassName('profile-grid-gallery')[0];
var addNewGalItem = document.getElementsByClassName('add-new-gal-item')[0];
var uploadedContract = document.getElementsByClassName('uploadedContract');
var uploadedContract = document.getElementsByClassName('dropFileHolder');

// var control = document.getElementsByClassName('grid-gallery-item-control')[0];
// var controller = "<div class='grid-gallery-item-control'></div>";
var remove = function removeNow(e) {
    e.currentTarget.parentElement.parentElement.remove();
    // for (let index = 0; index < uploadedContract.length; index++) {
    //     if(uploadedContract[index].childElementCount == 0) {
    //         console.log(uploadedContract[index].childElementCount)
    //         // e.currentTarget.parentElement.parentElement.parentElement.remove();
    //         uploadedContract[index].remove()
    //         console.log(e.currentTarget.parentElement.parentElement.parentElement)
    //     }
    //     return
    //     // console.log(e.currentTarget.parentElement.parentElement.parentElement)
    // }
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


// document.body.addEventListener('click', function() {

//     // console.log(this.getElementsByClassName("living")[0])
//     // if(!this.classList.contains('living')) {
//     //     console.log('not living div')
//     // }
//     // else {
//     //     console.log('this is living div')
//     // }
//     for(var i =0 ; i < this.children.length; i++) {
//         console.log(this.children[i])
//         // if(this.childNodes[i].classList.contains("living")) {
//         // }
//     }
// })

// document.onclick= function(event) {
//     // Compensate for IE<9's non-standard event model
//     //
//     if (event===undefined) event= window.event;
//     var target= 'target' in event? event.target : event.srcElement;
//     if(target.classList.contains('living')) {
//         console.log('this is living')
//     }
//     else {
//         console.log('this is not living')
//     }
//     // alert('clicked on '+target.className);
// };

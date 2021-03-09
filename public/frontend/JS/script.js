
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
            navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
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
            this.parentElement.previousElementSibling.classList.toggle("active");
            this.parentElement.previousElementSibling.autofocus
        }
        this.nextSibling.nextSibling.classList.toggle('active');
        this.parentElement.classList.toggle('active');
        this.classList.toggle('active');

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
    var count = 1
    addColumn[index].addEventListener('click', function () {
        // console.log(addColumn[index], index);
        segment1 = this.parentElement.getElementsByClassName('segment')[0];
        // var clonedInput = segmentClone.querySelectorAll('input[type="text"]')[0].value;
        if(segment1.querySelectorAll('input[type="text"]')[0]) {
            segment1.querySelectorAll('input[type="text"]')[0].value = "";
        }
        console.log(this.parentElement);
        // if (count < 5 && this.parentElement.childNodes.length > 3) {
            var segmentClone = segment1.cloneNode(true);
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
        // }
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
// var uploadedContract = document.getElementsByClassName('dropFileHolder');

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
var deg = 90
var rotate = function rotateNow(e) {
    e.currentTarget.parentElement.previousElementSibling.style.transform = `rotate(${deg}deg)`
    deg += 90
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
var scrl = document.getElementsByClassName('scroll-please')
function addContract(input) {
    if (input.files && input.files[0]) {
        for(i=0;i<input.files.length; i++) {

        var reader = new FileReader();
        reader.onload = function(e) {
        var gal = document.createElement('div')
        gal.className = "contract-item";
        var img = document.createElement('img');
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

        input.parentElement.nextSibling.nextSibling.append(gal)
        if(input.parentElement.nextSibling.nextSibling.childNodes.length != 0) {
            input.parentElement.nextSibling.nextSibling.style.display = 'grid'
        }
        if(input.parentElement.nextSibling.nextSibling.childNodes.length > 5) {
            input.parentElement.nextSibling.nextSibling.style.overflowY = 'scroll';
            for (let index = 0; index < scrl.length; index++) {
                input.parentElement.parentElement.parentElement.getElementsByClassName('scroll-please')[0].style.display = 'block';
            }
            setTimeout(() => {
                input.parentElement.nextSibling.nextSibling.scrollTop = 60;
            }, 800);
            // console.log(scrl, 'poxam')
            // console.log(input.parentElement.nextSibling.nextSibling.childNodes.length, 'ipl')
        }
        // else {
        //     scrl.style.display = 'block'
        // }
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



// auto complete
function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    if(inp) {
        inp.addEventListener("input", function(e) {
            var a, b, i, val = this.value;
            /*close any already open lists of autocompleted values*/
            closeAllLists();
            if (!val) { return false;}
            currentFocus = -1;
            /*create a DIV element that will contain the items (values):*/
            a = document.createElement("DIV");
            a.setAttribute("id", this.id + "autocomplete-list");
            a.setAttribute("class", "autocomplete-items");

            /*append the DIV element as a child of the autocomplete container:*/
            this.parentNode.appendChild(a);
            /*for each item in the array...*/
            for (i = 0; i < arr.length; i++) {
              /*check if the item starts with the same letters as the text field value:*/
              if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                //   console.log(arr[i].substr(0, val.length).toUpperCase());
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";

                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
                // a.style.height = "120px";
                // if(!a.childNodes.length) {
                //     console.log(a.childNodes.length);
                //     a.style.height = '0'
                // }
              }
            //   else {
            //       a.style.visibility = 'hidden'
            //   }
            }
            if(a) {
                document.getElementById("myInput").classList.add('active');
                document.getElementsByClassName("autocomplete-items")[0].classList.toggle('active');
            }
            // else {
            //     document.getElementsByClassName("autocomplete-items")[0].classList.toggle('active');
            // }
            // if(!a) {
            //     a.style.height = "0"
            // }
        });
        /*execute a function presses a key on the keyboard:*/
        inp.addEventListener("keydown", function(e) {
            console.log('ha');
            var x = document.getElementById(this.id + "autocomplete-list");
            // if(x.childElementCount == 0) {
            // }
            if (x) x = x.getElementsByTagName("div");
            if (e.keyCode == 40) {
              /*If the arrow DOWN key is pressed,
              increase the currentFocus variable:*/
              currentFocus++;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 38) { //up
              /*If the arrow UP key is pressed,
              decrease the currentFocus variable:*/
              currentFocus--;
              /*and and make the current item more visible:*/
              addActive(x);
            } else if (e.keyCode == 13) {
              /*If the ENTER key is pressed, prevent the form from being submitted,*/
              e.preventDefault();
              if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
              }
            }
        });
        function addActive(x) {
          /*a function to classify an item as "active":*/
          if (!x) return false;
          /*start by removing the "active" class on all items:*/
          removeActive(x);
          if (currentFocus >= x.length) currentFocus = 0;
          if (currentFocus < 0) currentFocus = (x.length - 1);
          /*add class "autocomplete-active":*/
          x[currentFocus].classList.add("autocomplete-active");
        }
        function removeActive(x) {
          /*a function to remove the "active" class from all autocomplete items:*/
          for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
          }
        }
        function closeAllLists(elmnt) {
          /*close all autocomplete lists in the document,
          except the one passed as an argument:*/
          var x = document.getElementsByClassName("autocomplete-items");
          for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
              x[i].parentNode.removeChild(x[i]);
            }
          }
        }
    }
    /*execute a function when someone clicks in the document:*/
    // document.addEventListener("click", function (e) {
    //     closeAllLists(e.target);
    // });
  }
  var rieltors = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
  autocomplete(document.getElementById("myInput"), rieltors);
// auto complete


let mediaImg = document.getElementsByClassName('media-img');
for (let index = 0; index < mediaImg.length; index++) {
    var cardImg = mediaImg[index].getElementsByTagName('img')[0];
    if(cardImg.src != "" || cardImg.src != "undefined") {
        mediaImg[index].classList.add('active');
    }
}

// auto resize while tpying in textarea
    var observe;
    if (window.attachEvent) {
        observe = function (element, event, handler) {
            element.attachEvent('on'+event, handler);
        };
    }
    else {
        observe = function (element, event, handler) {
            element.addEventListener(event, handler, false);
        };
    }
    function init () {
        var text = document.getElementById('text');
        function resize () {
            if(text.value.length == 0) {
                text.style.height = 'auto';
            }
            text.style.height = text.scrollHeight+'px';
        }
        /* 0-timeout to get the already changed text */
        function delayedResize () {
            window.setTimeout(resize, 3);
        }
        observe(text, 'change',  resize);
        observe(text, 'cut',     delayedResize);
        observe(text, 'paste',   delayedResize);
        observe(text, 'drop',    delayedResize);
        observe(text, 'keydown', delayedResize);

        // text.focus();
        text.select();
        resize();
    }
// auto resize while tpying in textarea

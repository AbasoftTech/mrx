// index slider
var indexOwl = $('.owl-carousel.owl-index-carousel');
$('.owl-carousel.owl-index-carousel').owlCarousel({
    loop: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
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
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3,
            dots: true,
            nav: true,
            navText: ["<img src='frontend/IMAGE/icons/arrow.svg'>", "<img src='frontend/IMAGE/icons/arrow.svg'>"]
        }
    }
})
// media slider

// search contract input focus script
document.getElementsByClassName('search--contract--input-box')[0].addEventListener('focus', focusOn);

function focusOn() {
    document.getElementsByClassName('code_contract')[0].classList.add('code_visible');
    document.getElementsByClassName('search--contract--input-box')[0].style.paddingLeft = '70px';
}
// search contract input focus script
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select-c");
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
        c.addEventListener("click", function (e) {
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
    a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
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

document.addEventListener("click", closeAllSelect);

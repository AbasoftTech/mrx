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


document.getElementsByClassName('search--contract--input-box')[0].addEventListener('focus', focusOn);

function focusOn() {
    document.getElementsByClassName('code_contract')[0].style.display = 'inline-block';
    document.getElementsByClassName('search--contract--input-box')[0].style.paddingLeft = '70px';
}

import 'bootstrap';
require('./bootstrap')
    //menu header
$(document).ready(function() {
    if (screen.width <= 991)
        $('.nav-item .dropdown-toggle').click(function(e) {
            e.preventDefault()
            const element = $(this).parent().children('.sm-menu')
            if (!element) return

            if (element.hasClass('is-show')) {
                element.toggleClass('is-show')
                element.css('display', 'none')
            } else {
                element.toggleClass('is-show')
                element.css('display', 'block')
            }
        })
})

$('#nav-bar-dropdown , .menu-pc-dropdown').hover(function(e) {
    const element = $('#nav-bar-dropdown');
    if (!element) return
    if (element.hasClass('is-show')) {
        element.toggleClass('is-show')
    } else {
        element.toggleClass('is-show')
    }

    const elementOverLay = $('.overlay_background')
    if (!elementOverLay) return
    element.hasClass('is-show') ? elementOverLay.addClass('overlay_background_active') : elementOverLay.removeClass('overlay_background_active')
});





//end menu  

// const helloWorld = require("./hello-world").helloWorld();
// console.log(helloWorld);
var swiper = new Swiper(".mySwiper-home", {
    speed: 800,
    // parallax: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var swiper2 = new Swiper(".mySwiper1", {
    spaceBetween: 30,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
var swiper_gallery = new Swiper(".Swiper-Gallery", {
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",

    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // observer: true,
    // observeParents: true,
});
var swiper_gallery = new Swiper(".mySwiper-left", {
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // observer: true,
    // observeParents: true,
});
var swiper_gallery = new Swiper(".mySwiper-right", {
    // autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false,
    // },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    // observer: true,
    // observeParents: true,
});


function clickToScroll(elButtom, elContent, minusPixel, timeScroll) {
    $(elButtom).click(function() {
        $(this).data('clicked', true)
        $([document.documentElement, document.body]).animate({
            scrollTop: $(elContent).offset().top - minusPixel
        }, timeScroll);
    });
}
$(document).ready(function() {
    clickToScroll('#click1', '.whatwedo', 80, 1000)
    clickToScroll('#click2', '.bot1', 100, 1200)
});
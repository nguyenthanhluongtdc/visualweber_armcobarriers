import 'bootstrap';
require('./bootstrap')

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
var swiper_gallery = new Swiper(".mySwiper-left", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
var swiper_gallery = new Swiper(".mySwiper-right", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
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
})
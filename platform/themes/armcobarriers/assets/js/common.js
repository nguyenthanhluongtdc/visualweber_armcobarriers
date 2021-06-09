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
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    observer: true,
    observeParents: true,
});
var swiper_gallery = new Swiper(".mySwiper-right", {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    observer: true,
    observeParents: true,
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

$("#tile-1 .nav-tabs a").click(function() {
    var position = $(this).parent().position();
    var width = $(this).parent().width() * 0.3;
    $("#tile-1 .slider").css({ "left": +position.left, "width": width });
});
var actWidth = $("#tile-1 .nav-tabs").find(".active").parent("li").width() * 0.3;
var actPosition = $("#tile-1 .nav-tabs .active").position();
$("#tile-1 .slider").css({ "left": +actPosition.left, "width": actWidth });
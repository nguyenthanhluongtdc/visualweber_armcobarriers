import 'bootstrap';
require('./bootstrap')

// const helloWorld = require("./hello-world").helloWorld();
// console.log(helloWorld);
var swiper = new Swiper(".mySwiper", {
    speed: 600,
    // parallax: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
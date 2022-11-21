jQuery(document).ready(function ($) {
    var swiperVisas = new Swiper(".visas__slider", {
        slidesPerView: "auto",
        spaceBetween: 16,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiperHow = new Swiper(".how__slider", {
        slidesPerView: "auto",
        spaceBetween: 16,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
    var swiperBlog = new Swiper(".blog__slider", {
        slidesPerView: "auto",
        spaceBetween: 16,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
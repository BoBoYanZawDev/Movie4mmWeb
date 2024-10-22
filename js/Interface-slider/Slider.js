function Slider_carouselInit(name, responsiveValues) {
    $(`.owl-carousel.slider_carousel.${name}`).owlCarousel({
        dots: false,
        loop: true,
        margin: 30,
        stagePadding: 2,
        autoplay: true,
        nav: true,
        navText: ["<i class='fa-solid fa-chevron-left'></i>", "<i class='fa-solid fa-chevron-right'></i>"],
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: responsiveValues
    });
}
Slider_carouselInit('Phonebanner', {
    0: {
        items: 2
    },
    768: {
        items: 3
    },
    992: {
        items: 1
    }
})
Slider_carouselInit('TVbanner', {
    0: {
        items: 1
    }
})
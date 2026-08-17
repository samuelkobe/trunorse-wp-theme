// SERVICE SWIPER Initialized
document.addEventListener('DOMContentLoaded', function() {
  if (typeof Swiper !== 'undefined' && document.getElementById("post-type-gallery")) {
    const flatdeckSwiper = new Swiper(".swiper-post-type", {
      slidesPerView: 1.25,
      spaceBetween: 16,
      centeredSlides: true,
      centeredSlidesBounds: false,
      loop: false,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          spaceBetween: 32,
        },
        1024: {
          slidesPerView: 1.5,
          spaceBetween: 48,
        },
        1680: {
          slidesPerView: 2.5,
          spaceBetween: 64,
        },
      },
    });
  }
});

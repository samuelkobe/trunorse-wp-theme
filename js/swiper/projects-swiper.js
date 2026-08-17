// Projects page Swiper initializations
document.addEventListener('DOMContentLoaded', function() {
  if (typeof Swiper !== 'undefined') {
    const customRenovationsSwiper = new Swiper(".swiper-custom-renovations", {
      slidesPerView: 1.5,
      spaceBetween: 20,
      centeredSlides: true,
      centeredSlidesBounds: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1680: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },
    });

    const restorationsSwiper = new Swiper(".swiper-restorations", {
      slidesPerView: 1.5,
      spaceBetween: 20,
      centeredSlides: true,
      centeredSlidesBounds: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1680: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },
    });

    const newConstructionSwiper = new Swiper(".swiper-new-construction", {
      slidesPerView: 1.5,
      spaceBetween: 20,
      centeredSlides: true,
      centeredSlidesBounds: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1680: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },
    });

    const commercialSwiper = new Swiper(".swiper-commercial", {
      slidesPerView: 1.5,
      spaceBetween: 20,
      centeredSlides: true,
      centeredSlidesBounds: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1280: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        1680: {
          slidesPerView: 6,
          spaceBetween: 20,
        },
      },
    });
  }
});

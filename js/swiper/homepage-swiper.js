const heroSwiper = new Swiper('.swiper-hero', {
  slidesPerView: 1.25,
  spaceBetween: 20,
  centeredSlides: true,
  centeredSlidesBounds: true,
  breakpoints: {
    768: {
      slidesPerView: 2.25,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3.25,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  }
});

const sliderSwiper = new Swiper('.swiper-slider', {
  slidesPerView: 1,
  autoplay: {
    delay: 10000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  pagination: {
    el: '.swiper-pagination'
  }
});

const testimonialSwiper = new Swiper('.swiper-testimonial', {
  slidesPerView: 1,
  autoplay: {
    delay: 5000,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

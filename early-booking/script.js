window.addEventListener('load', () => {
  const swiper = new Swiper('.swiper', {
    slidesPerView: 1.1,
    spaceBetween: 30,
    mousewheel: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1400: {
        spaceBetween: 30,
        slidesPerView: 3,
      },
      1200: {
        spaceBetween: 30,
        slidesPerView: 3,
      },
      992: {
        spaceBetween: 30,
        slidesPerView: 2.2,
      },
      768: {
        spaceBetween: 30,
        slidesPerView: 1.8,
      },
      576: {
        spaceBetween: 30,
        slidesPerView: 1.5,
      },
    },
  });
});

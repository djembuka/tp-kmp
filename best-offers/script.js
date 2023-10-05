window.addEventListener('load', () => {
  
  document.querySelectorAll('.early-booking .swiper').forEach(swiperElement => {
    
    swiperElement.querySelectorAll('.early-booking__price').forEach(priceBlock => {
      let text = priceBlock.textContent.trim();
      
      if (text.length > 20) {
        priceBlock.classList.add('early-booking__price--small');
      }
    });
    
    swiperElement.querySelectorAll('.early-booking__btn').forEach(btnBlock => {
      btnBlock.querySelector('.early-booking__button').addEventListener('click', (e) => {
        e.preventDefault();
        btnBlock.closest('.swiper-slide').classList.add('swiper-slide--hover');
      });
    });
    
    const swiper = new Swiper( swiperElement, {
      slidesPerView: 1.1,
      freeMode: true,
      spaceBetween: 30,
      navigation: {
        nextEl: swiperElement.parentNode.querySelector('.swiper-button-next'),
        prevEl: swiperElement.parentNode.querySelector('.swiper-button-prev'),
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
});

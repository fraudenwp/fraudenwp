

//Content Slider
var swiper = new Swiper(".content-swiper", {
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  loop: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  navigation: {
    nextEl: ".content-swiper .swiper-button-next",
    prevEl: ".content-swiper .swiper-button-prev",
  },
});

//Carousel
var swiper = new Swiper(".carousel-swiper", {
  slidesPerView: 2,
  spaceBetween: 40,
  // navigation: {
  //   nextEl: ".swiper-button-next",
  //   prevEl: ".swiper-button-prev",
  // },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 20
    },

    768: {
      slidesPerView: 1.2,
      spaceBetween: 20
    },

    1024: {
      slidesPerView: 2,
      spaceBetween: 20
    }
  },
});


var swiper = new Swiper(".news-carousel-swiper", {
  slidesPerView: 3.2,
  spaceBetween: 40,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    init: function () {
      // Swiper başlatıldığında kontrol düğmelerini gizle
      if (this.slides.length <= 1) {
        document.querySelector('.swiper-button-prev').style.display = 'none';
        document.querySelector('.swiper-button-next').style.display = 'none';
      }
    },
  },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 20
    },

    768: {
      slidesPerView: 1.2,
      spaceBetween: 20
    },

    1024: {
      slidesPerView: 2.2,
      spaceBetween: 20
    },

    1280: {
      slidesPerView: 3.2,
      spaceBetween: 20
    }
  }
});

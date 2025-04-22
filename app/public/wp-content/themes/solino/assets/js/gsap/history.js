const listWrapperEl = document.querySelector('.side-scroll-list-wrapper');
const listEl = document.querySelector('.side-scroll-list');


gsap.to(listEl, {
  x: () => -(listEl.clientWidth - listWrapperEl.clientWidth),
  ease: 'none',
  scrollTrigger: {
    trigger: '.side-scroll',
    start: 'top top',
    end: () => `+=${listEl.clientWidth - listWrapperEl.clientWidth}`,
    scrub: true,
    pin: true,
    anticipatePin: 1,
    invalidateOnRefresh: true,
  },
});


// const cardImages = document.querySelectorAll('.card-image img');

// cardImages.forEach((img) => {
//   const cardImage = img.parentElement;

//   gsap.to(img, {
//     x: -200, // Başlangıçta -200px sola kaydır
//     ease: 'none',
//     scrollTrigger: {
//       trigger: cardImage, // Her bir .card-image tetikleyici olarak kullanılır
//       start: 'top center', // İtem merkezi görünürlükte olduğunda başlat
//       end: 'bottom center', // İtem merkezi görünürlükten çıktığında sonlandır
//       scrub: true,
//       onEnter: () => cardImage.classList.add('active'), // Görünür olduğunda "active" sınıfı ekle
//       onLeaveBack: () => cardImage.classList.remove('active'), // Görünürlükten çıkıldığında "active" sınıfını kaldır
//       invalidateOnRefresh: true,
//     },
//   });
// });
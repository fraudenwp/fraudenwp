

gsap.registerPlugin(ScrollTrigger, ScrollSmoother);


const mm = gsap.matchMedia();

let smoother;

mm.add("(min-width: 1024px)", () => {
  ScrollSmoother.create({
    smooth: 2,
    effects: true,
    normalizeScroll: false,
    ignoreMobileResize: true
  });

  gsap.registerPlugin("ScrollTrigger");

  //gsap.set(".all-fill", { position: "absolute" });

  // gsap.from(".start-transparent",  {
  //   scrollTrigger: {
  //     trigger: ".start-content",
  //     // markers: true,
  //     scrub: true,
  //     pin: true,
  //     start: "top top",
  //     end: "+=100%",
  //     pinSpacing: true,
  //   },
  //   duration: 2,
  //   scaleY: 0,
  //   autoAlpha: 0,
  //   stagger: 0.5,
  // });

  window.bricksSmoothScroll = () => false
  return () => smoother.kill();
  

});

// ScrollTrigger.create({
//   trigger: ".footer",
//   pin: true,
//   start: "bottom bottom",
//   end: "+=95%"
// });

gsap.registerPlugin(ScrollTrigger);

// let masks = document.querySelectorAll('.mask');

// masks.forEach( mask => {
//     let image = mask.querySelector('.photo');

//     let tl = gsap.timeline({
//         scrollTrigger: {
//             trigger: mask,
//           // markers: true,
//             // toggleActions: "restart none none reset",
//             toggleActions: "play none none none"
//         }
//     });

//     tl.set(mask, {autoAlpha: 1});

//     tl.from(mask, 1.5, {
//         xPercent: -100,
//         ease: Power2.out
//     });
//     tl.from(image, 1.5, {
//         xPercent: 50,
//         scale: 1.3,
//         delay: -1.5,
//         ease: Power2.out
//     });
// })


//Fade In
fadein = document.querySelectorAll(".fadein");
fadein.forEach((content) => {
  let tl = gsap.timeline({
    scrollTrigger: {
      trigger: content,
      start: "top 80%"
    }
  });
  tl.from(content.querySelector(".fadein-inner"), {
    // opacity: 0,
    // duration: 0.1
  }).to(
    content,
    {
      onEnter: () => content.classList.add("active")
    },
    "<"
  );
});


// slideup = document.querySelectorAll(".slideup");
// slideup.forEach((content) => {
//   let tl = gsap.timeline({
//     scrollTrigger: {
//       trigger: content,
//       start: "top 80%"
//     }
//   });
//   tl.from(content.querySelector(".slideup-inner"), {
//     // opacity: 0,
//     // duration: 0.1
//   }).to(
//     content,
//     {
//       onEnter: () => content.classList.add("active")
//     },
//     "<"
//   );
// });

// Detect if a link's href goes to the current page
// function getSamePageAnchor(link) {
//   if (
//     link.protocol !== window.location.protocol ||
//     link.host !== window.location.host ||
//     link.pathname !== window.location.pathname ||
//     link.search !== window.location.search
//   ) {
//     return false;
//   }

//   return link.hash;
// }

// // Anchor
// function scrollToHash(hash, e) {
//   const elem = hash ? document.querySelector(hash) : false;
//   if (elem) {
//     if (e) e.preventDefault();
//     gsap.to(window, { scrollTo: elem });
//   }
// }

// document.querySelectorAll('.anchor').forEach(a => {
//   a.addEventListener('click', e => {
//     scrollToHash(getSamePageAnchor(a), e);
//   });
// });

// scrollToHash(window.location.hash);


function getSamePageAnchor(link) {
  if (
    link.protocol !== window.location.protocol ||
    link.host !== window.location.host ||
    link.pathname !== window.location.pathname ||
    link.search !== window.location.search
  ) {
    return false;
  }

  return link.hash;
}

// Anchor
function scrollToHash(hash, e) {
  const elem = hash ? document.querySelector(hash) : false;
  if (elem) {
    if (e) e.preventDefault();
    gsap.to(window, { scrollTo: elem });
  }
}

// Click event listener for anchor tags
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const samePageAnchor = getSamePageAnchor(a);

    if (samePageAnchor) {
      scrollToHash(samePageAnchor, e);
    }
  });
});

// Check if there's a hash in the URL and scroll to it on page load
if (window.location.hash) {
  scrollToHash(window.location.hash);
}




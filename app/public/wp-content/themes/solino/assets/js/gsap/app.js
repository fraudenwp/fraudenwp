
//Slide text
gsap.registerPlugin(ScrollTrigger);


document.addEventListener("DOMContentLoaded", function (event) {
  window.onload = function () {
    window.requestAnimationFrame(function () {

      const text = document.querySelectorAll(".split-text");
      text.forEach(element => {
        const splittedText = new SplitType(element, { types: 'word' });
      });


      // Animacja
      let splitAnim = text.forEach((element) => {

        const splittedChars = element.querySelectorAll(".word");

        gsap.from(splittedChars, {
          y: "-20%",
          duration: 4,
          stagger: .16,
          autoAlpha: 0,
          ease: Expo.easeOut,
          willChange: "transform",
          scrollTrigger: {
            trigger: element,
            start: "top 90%",
          }
        });
      });
    });
  };
});

$(".number").each(function (index, element) {

  var count = $(this),
    zero = { val: 0 },
    num = count.data("number"),
    split = (num + "").split("."),
    decimals = split.length > 1 ? split[1].length : 0;

  // console.log(num)
  // console.log(typeof num)

  if (typeof num == 'string') {
    num = parseInt(num.split(',').join(''))
  }

  // console.log(num)
  // console.log(typeof num)

  function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }

  gsap.to(zero, {
    val: num,
    duration: 2,
    scrollTrigger: element,
    onUpdate: function () {
      count.text(numberWithCommas(zero.val.toFixed(decimals)));
    }
  });
});


gsap.registerPlugin(ScrollTrigger);
gsap.set('.numbers .item', {
  autoAlpha: 0, y: 150,
});

ScrollTrigger.batch('.numbers', {
  onEnter: batch => {
    batch.forEach((card, index) => gsap.to(card.children, { autoAlpha: 1, y: 0, stagger: .2, delay: index * 0.3, duration: 1, }))
  },
  once: true,
});



ScrollTrigger.matchMedia({

  // desktop
  "(min-width: 1024px)": function () {

    //Horizontal Slider
    gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
    const horizontalSections = gsap.utils.toArray('section.horizontal')

    horizontalSections.forEach(function (sec, i) {

      var thisPinWrap = sec.querySelector('.pin-wrap');
      var thisAnimWrap = thisPinWrap.querySelector('.animation-wrap');

      var getToValue = () => -(thisAnimWrap.scrollWidth - window.innerWidth);

      gsap.fromTo(thisAnimWrap, {
        x: () => thisAnimWrap.classList.contains('to-right') ? 0 : getToValue()
      }, {
        x: () => thisAnimWrap.classList.contains('to-right') ? getToValue() : 0,
        ease: "none",
        scrollTrigger: {
          trigger: sec,
          start: "top top",
          end: () => "+=" + (thisAnimWrap.scrollWidth - window.innerWidth),
          pin: thisPinWrap,
          invalidateOnRefresh: true,
          //anticipatePin: 1,
          scrub: true,
          //markers: true,
        }
      });

    });

    //Head Text Animated
    gsap.registerPlugin(ScrollTrigger);
    const listItems = Array.from(document.getElementsByClassName("headAnimated"));
    listItems.forEach((item, index) => {
      gsap.set(item, { color: "", autoAlpha: 0, y: index % 2 ? 100 : -500 });

      gsap.to(item, {
        y: 0,
        autoAlpha: 1,
        // color:"#FF5400",
        scrollTrigger: {
          trigger: item,
          start: "top 90%",
          end: "bottom",
          scrub: true,
          // markers: true,
          toggleActions: "play reverse play reverse"
        }
      });
    });


  //Fadeup
  gsap.registerPlugin(ScrollTrigger);

  gsap.utils.toArray('.fadeup').forEach(boxInner => {
    gsap.set(boxInner, {
      transformOrigin: 'bottom',
      autoAlpha: 0,
      y: 200,
      willChange: 'transform'
    });
  
    gsap.to(boxInner, {
      scrollTrigger: {
        trigger: boxInner.parentElement,
        start: 'top 85%',
        toggleActions: 'play none none none',
        // markers: true,
      },
      duration: 1,
      autoAlpha: 1,
      y: 0,
      willChange: 'transform'
    });
  });
  

    //Image Scale
    const imageScale = gsap.utils.toArray('.imageScale');
    imageScale.forEach((box, i) => {
      const anim = gsap.fromTo(box, { scale: 1.4, }, { duration: 1.4, scale: 1, });
      ScrollTrigger.create({
        trigger: box,
        animation: anim,
        toggleActions: 'play none none none',
        once: true
      });
    });

    //Start Scale
    var images = gsap.utils.toArray(".start-scale .image");
    images.forEach((image, i) => {
      gsap.fromTo(
        image,
        { scale: .7, transformOrigin: "center center", willChange: "transform" },
        // { scale: .5,  willChange: "transform" },
        {
          scale: 1,
          ease: "none",
          force3D: true,
          willChange: "transform",
          borderRadius: "0",
          scrollTrigger: {
            pin: jQuery(image).parent(),
            trigger: jQuery(image).parent(),
            // start: "10% top",
            start: "top top",
            end: '+=150%',
            //pinType: isTouch ? "fixed" : "transform",
            scrub: true,
            // markers: true
          }
        }
      );
    });
  }
});


var tl = new TimelineMax({ repeat: -1, yoyo: true });
tl.fromTo(".scroll-dowm", 1, { y: -10 }, { ease: Power0.easeNone, y: 10 });


//Menu
const ham = document.querySelector(".ham");
const menu = document.querySelector('.main-menu');
const links = menu.querySelectorAll('li');
const social = menu.querySelectorAll('.social a');

var mainmenu = gsap.timeline({ paused: true });

mainmenu.to(menu, {
  // duration: 1,
  duration: .75,
  opacity: 1,
  scale: 1,
  // y:0,
  height: 'auto', // change this to 100vh for full-height menu
  ease: 'expo.inOut',
})

mainmenu.from(links, {
  duration: 1,
  opacity: 0,
  y: 20,
  stagger: 0.1,
  ease: 'expo.inOut',
}, "-=0.5");

mainmenu.from(social, {
  // duration: 1,
  duration: .9,
  opacity: 0,
  y: 30,
  ease: 'expo.inOut',
});

mainmenu.reverse();

ham.addEventListener('click', () => {
  mainmenu.reversed(!mainmenu.reversed());
});



//Sticky Menu
// gsap.registerPlugin(ScrollTrigger);

// gsap.from("#sticky-nav-menu", {
//   autoAlpha: 1,
//   y: 100,
//   scrollTrigger: {
//     trigger: "#sticky-nav-menu",
//     scrub: true,
//     start: "bottom bottom",
//     end: "center center",
//     // markers: true
//   },
//   ease: "none"
// });

// const stickymenu = document.getElementById('sticky-nav-menu');
// const hideDiv = document.querySelector('.sticky-menu-hide');

// gsap.to(stickymenu, {
//   autoAlpha: 0,
//   duration: 0.3,
//   ease: 'power1.out',
//   scrollTrigger: {
//     trigger: hideDiv,
//     start: 'top center',
//     end: 'bottom center',
//     toggleClass: 'sticky-menu-hide',
//     onEnter: () => gsap.to(stickymenu, { autoAlpha: 0, y: 100, }),
//     onLeaveBack: () => gsap.to(stickymenu, { autoAlpha: 1, y: 0, })
//   }
// });

// gsap.registerPlugin(ScrollTrigger);

// const navLinks = document.querySelectorAll('#sticky-nav-menu ul li a');
// const sections = document.querySelectorAll('.section');

// sections.forEach((section) => {
//   ScrollTrigger.create({
//     trigger: section,
//     start: 'top center',
//     end: 'bottom center',

//     onEnter: () => {
//       navLinks.forEach((link) => {
//         link.classList.remove('menuactive');
//       });

//       const matchingLink = document.querySelector(`#sticky-nav-menu ul li a[href="#${section.id}"]`);
//       matchingLink.classList.add('menuactive');
//     },
//     onLeaveBack: () => {
//       const previousSection = section.previousElementSibling;
//       if (previousSection) {
//         navLinks.forEach((link) => {
//           link.classList.remove('menuactive');
//         });
//         const matchingLink = document.querySelector(`#sticky-nav-menu ul li a[href="#${previousSection.id}"]`);
//         matchingLink.classList.add('menuactive');
//       } else {
//       }
//     },
//   });
// });


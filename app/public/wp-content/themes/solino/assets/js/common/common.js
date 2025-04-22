

//Menu
$(function () {
  $(".mobile-menu").click(function (event) {
      event.stopPropagation();
      $("#hamburger-menu").toggleClass("open");
      $('body').toggleClass("no-scroll");
      $(".mobile-menu .text").toggleClass("up-down");
      smoother.paused(true);
  });
  
  $(".cookies-close").click(function (event) {
      $(".cookies").removeClass("visible");
  });

});


//Tooltip
$(document).ready(function() {
  $('.tooltip-button').click(function() {
    var tooltipId = $(this).attr('id').replace('button', 'tooltip');
    var tooltip = $('#' + tooltipId);
    
    if (tooltip.hasClass('active')) {
      tooltip.removeClass('active');
      $(this).removeClass('active');
    } else {
      $('.tooltip').removeClass('active');
      $('.tooltip-button').removeClass('active');
      tooltip.addClass('active');
      $(this).addClass('active');
    }
  });
});


//Esc
$(document).keydown(function (e) {
  if (e.keyCode == 27) {
    $("body").removeClass("no-scroll");
    $("#hamburger-menu").removeClass("open");
    $(".mobile-menu .text").removeClass("up-down");
    mainmenu.reverse();
    smoother.paused(false);
  }
});

//Out Side Click
$(document).click(function (event) {
  if (!$(event.target).closest("header").length) {
    $("body").removeClass("no-scroll");
    $("#hamburger-menu").removeClass("open");
    $(".mobile-menu .text").removeClass("up-down");
    mainmenu.reverse();
    smoother.paused(false);
  }
});


//Header
$(document).ready(function () {
  $(function () {
      var header = $("header");

      $(window).scroll(function () {
          var scroll = $(window).scrollTop();
          if (scroll >= 50) {
              header.addClass("scrolled");
          } else {
              header.removeClass("scrolled");
          }
      });
  });
});

$(document).ready(function () {
  'use strict';
  var c, currentScrollTop = 0,
      navbar = $('header');

  $(window).scroll(function () {
      var a = $(window).scrollTop();
      var b = navbar.height();

      currentScrollTop = a;

      if (c < currentScrollTop && a > b + b) {
          navbar.addClass("scrollUp");
      } else if (c > currentScrollTop && !(a <= b)) {
          navbar.removeClass("scrollUp");
      }
      c = currentScrollTop;

      //console.log(a);
  });
})


$(document).ready(function () {
  // hidden things
  $(".form-wizard-item").hide();
  $("#successMessage").hide();
  // next button
  $(".next").on({
      click: function () {
          // select any card
          var getValue = $(this).parents(".wizard-row").find(".card").hasClass("active-card");
          if (getValue) {
              $("#progressBar").find(".active").next().addClass("active");
              $("#alertBox").addClass("d-none");
              $(this).parents(".wizard-row").fadeOut("slow", function () {
                  $(this).next(".wizard-row").fadeIn("slow");
              });
              
          } else {
             $("#alertBox").removeClass("d-none");
          }
      }
  });
  // back button
  $(".back").on({
      click: function () {
          $("#progressBar .active").last().removeClass("active");
          $(this).parents(".wizard-row").fadeOut("slow", function () {
              $(this).prev(".wizard-row").fadeIn("slow");
          });
      }
  });
  //finish button
  $(".submit-button").on({
      click: function () {
          $("#wizardForm").fadeOut(300);
          $(this).parents(".wizard-row").children("#successForm").fadeOut(300);
          $(this).parents(".wizard-row").children("#successMessage").fadeIn(3000);
      }
  });
  //Active card on click function
  $(".card").on({
      click: function () {
          $(this).toggleClass("active-card");
          $(this).parent(".item").siblings().children(".card").removeClass("active-card");
      }
  });
  //back to wizard
  $(".back-to-wizard").on({
      click: function () {
          location.reload(true);
      }
  });
});


document.addEventListener('DOMContentLoaded', function () {
  var popup = document.querySelector('.popup');
  var body = document.body;

  if (popup) {
      body.classList.add('popup-visible');
      popup.classList.add('visible');
  }

  $(".close-popup").click(function (event) {
      $("body").removeClass("popup-visible");
      $(".popup").removeClass("visible");
  });
});
var $ = jQuery.noConflict();
// pre loader js

// window.addEventListener('load',() => {
//   const preload = document.querySelector('.preload');
//   preload.classList.add('preload-finish');
// });


// this if for menu after slide

$(function () {
    'use strict';
    var navBar = $('.menu-logo'); //Targets nav element
    var myWindow = $(window);
    myWindow.on('scroll', function () {
        if ($(this).scrollTop() > 200) { //height from top to trigger slideDown
            navBar.addClass('scroll-menu');
        } else if ($(this).scrollTop() < 200) {
            navBar.removeClass('scroll-menu');
        }
    });
});

// dropdown submenu nav

$('.menu-item-has-children span.arrow').click(function (){

  $(this).siblings('.sub-menu').slideToggle("show");
    $(this).find('i').toggleClass("rotate");
});
// $('.nav ul li').click(function (){
//    $(this).addClass("active").siblings().removeClass("active");
// });

// os nosse scrolll gallery setting
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:false,
    margin:10,
    // autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[5000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})


// cart fixed js
//
// $(function () {
//     var myWindow = $(window);
//     $('#fixed-cart').show();
//     myWindow.on('scroll', function () {
//         if ($(this).scrollTop() > 5) { //height from top to trigger slideDown
//              $('#fixed-cart').show();
//         }
//         else {
//             $('#fixed-cart').hide();
//
//         }
//     });
// });


// singal page js

$(document).ready(function(){
    $(".media-more").click(function(){
        $(".media-js ul").slideToggle();
        $("#media__inner").toggleClass("active");
    });
});






// swiper for tab

const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

   // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 2,
      spaceBetween: 20,
      
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween:20
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 4,
      spaceBetween: 40
    }
  },

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});







AOS.init();

//
// $(function () {
//
//     var myWindow = $(window);
//     myWindow.on('scroll', function () {
//         console.log($(this).scrollTop());
//     });
// });

$(document).ready(function () {
  $(".owl-carousel").owlCarousel();
});



// slider gamas category
$(function () {
  var showcase = $("#showcase")

  showcase.Cloud9Carousel({
    yPos: 42,
    yRadius: 48,
    mirrorOptions: {
      gap: 12,
      height: 0.2
    },
    buttonLeft: $(".nav > .left"),
    buttonRight: $(".nav > .right"),
    autoPlay: true,
    bringToFront: true,
    frontItemClass: "active",
    onRendered: showcaseUpdated,
    onLoaded: function () {
      showcase.css('visibility', 'visible')
      showcase.css('display', 'none')
      showcase.fadeIn(1500)
    }
  })

  function showcaseUpdated(showcase) {
    var title = $('#item-title').html(
      $(showcase.nearestItem()).attr('alt')
    )

    var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
    title.css('opacity', 0.5 + (0.5 * c))
  }

  // Simulate physical button click effect
  $('.nav > button').click(function (e) {
    var b = $(e.target).addClass('down')
    setTimeout(function () {
      b.removeClass('down')
    }, 80)
  })

  $(document).keydown(function (e) {
    //
    // More codes: http://www.javascripter.net/faq/keycodes.htm
    //
    switch (e.keyCode) {
      /* left arrow */
      case 37:
        $('.nav > .left').click()
        break

      /* right arrow */
      case 39:
        $('.nav > .right').click()
    }
  })
})


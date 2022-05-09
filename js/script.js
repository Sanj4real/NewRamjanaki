$("[data-trigger]").on("click", function () {
    var trigger_id = $(this).attr("data-trigger");
    $(trigger_id).toggleClass("show");
    $("body").toggleClass("offcanvas-active");
});

// close button
$(".btn-close").click(function (e) {
    $(".navbar-collapse").removeClass("show");
    $("body").removeClass("offcanvas-active");
});


// slick-slider
  
  $(".Modern-Slider").slick({
    autoplay:false,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots:true,
    pauseOnDotsHover:true,
    cssEase:'linear',
   // fade:true,
    draggable:false,
    prevArrow:'<button class="PrevArrow"></button>',
    nextArrow:'<button class="NextArrow"></button>', 
  });
  



jQuery("#testimonial-wrap").owlCarousel({
   autoplay: true,
   lazyLoad: true,
   loop: true,
   margin: 20,
   dots: false,
   responsiveClass: true,
   autoHeight: true,
   autoplayTimeout: 6000,
   smartSpeed: 800,
   nav: true,
   responsive: {
     0: {
       items: 1
     },

     600: {
       items: 2
     },

     1024: {
       items: 2
     },

     1366: {
       items: 2
     }
   }
 });

jQuery("#carousel").owlCarousel({
   autoplay: false,
   lazyLoad: true,
   loop: true,
   margin: 20,
   dots: false,
   responsiveClass: true,
   autoHeight: true,
   autoplayTimeout: 7000,
   smartSpeed: 800,
   nav: true,
   responsive: {
     0: {
       items: 1
     },

     600: {
       items: 3
     },

     1024: {
       items: 4
     },

     1366: {
       items: 5
     }
   }
 });

jQuery(".viewed-products").owlCarousel({
   autoplay: true,
   lazyLoad: true,
   loop: true,
   margin: 20,
   dots: false,
   responsiveClass: true,
   autoHeight: true,
   autoplayTimeout: 7000,
   smartSpeed: 800,
   nav: true,
   responsive: {
     0: {
       items: 1
     },

     600: {
       items: 3
     },

     1024: {
       items: 4
     },

     1366: {
       items: 4
     }
   }
 });

// menu-newClass
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $(".header-top").addClass("newClass");
    } else {
        $(".header-top").removeClass("newClass");
    }
});




// 
$(document).ready(function(){
  $('#nav-icon1').click(function(){
    $(this).toggleClass('open');
  });
});

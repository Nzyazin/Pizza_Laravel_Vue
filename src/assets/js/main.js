
jQuery(function ($) {
  'use strict';
  
  $(document).on('change', function() {      
    
    /****======  Active class add Remove  ======*******/
    $(".menubar").on("click", function () {
      $(".mobile-menu__sidebar-menu ").addClass("active");
      $(".menu-closer").addClass("active");
    });

    $(".menu-closer").on("click", function () {
      $(".mobile-menu__sidebar-menu ").removeClass("active");
      $(".menu-closer").removeClass("active");
    });

    $(".menubar").on("click", function () {
      $(".sidebar-content").addClass("active");
      $(".sidebar-content-closer").addClass("active");
    });

    /****======  Bottom to Top Scroll Js  ======*******/
    var ScrollTop = $(".scrollToTop");
    $(window).on("scroll", function () {
      if ($(this).scrollTop() < 100) {
        ScrollTop.removeClass("active");
      } else {
        ScrollTop.addClass("active");
      }
    });
    $(".scrollToTop").on("click", function () {
      $("html, body").animate({
        scrollTop: 0
      }, 250);
      return false;
    }); 
   
  })
  $(window).on("load", function () {
      
    /****======  Preloader Js  ======*******/
    $(".loader").delay(500).animate({
      "opacity": "0"
    }, 500, function () {
      $(".loader").css("display", "none");
    });
  });   
  
}(jQuery));

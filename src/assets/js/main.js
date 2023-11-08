
jQuery(function ($) {
  'use strict';
  
  $(document).on('change', function() {

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

jQuery(function ($) {
  'use strict';
  $(document).on('change', function() {    

    /****======  Active class add Remove  ======*******/
    $(".menubar").on("click", function () {
      $(".mobile-menu__sidebar-menu ").addClass("active");
      $(".menu-closer").addClass("active");
    });

    $(".search-box.menu").on("click", function () {
      $(".search-box-popup").addClass("active");
    });
    $(".search-box-close").on("click", function () {
      $(".search-box-popup").removeClass("active");
    });

    $(".menu-closer").on("click", function () {
      $(".mobile-menu__sidebar-menu ").removeClass("active");
      $(".menu-closer").removeClass("active");
    });

    $(".mobile-menu__sidebar-menu .dropdown-list .menuarrow").on("click", function () {
      $(this).parent().parent().find(".dropdown").toggle(300);
      $(this).parent().parent().toggleClass("active");
    });

    $(".mobile-menu__sidebar-menu .dropdown .menuarrowtwo").on("click", function () {
      $(this).parent().parent().find(".subdropdown").toggle(300);
      $(this).parent().parent().toggleClass("active");
    });

    $(".cart-icon").on("click", function () {
      $(".side-cart").addClass("active");
      $(".side-cart-closer").addClass("active");
    });
    $(".cart-close").on("click", function () {
      $(".side-cart").removeClass("active");
      $(".side-cart-closer").removeClass("active");
    });

    $(".menubar").on("click", function () {
      $(".sidebar-content").addClass("active");
      $(".sidebar-content-closer").addClass("active");
    });
    $(".close-side-widget").on("click", function () {
      $(".sidebar-content").removeClass("active");
    });

    $(".sidebar-content-closer").on("click", function () {
      $(".sidebar-content-closer").removeClass("active");
      $(".sidebar-content").removeClass("active");
    });

    $(".close-side-widget").on("click", function () {
      $(".sidebar-content-closer").removeClass("active");
    });

    $(".side-cart-closer").on("click", function () {
      $(".side-cart").removeClass("active");
      $(".side-cart-closer").removeClass("active");
    });

    $(".slidebarfilter, .remove-sidebar").on("click", function () {
      $(".shop-grid-sidebar").toggleClass("active");
    });

    $(".varients li a").on("click", function () {
      $(".varients li a").removeClass("active");
      $(this).addClass("active");
    });



    /****======  banner-one__slider Slick  ======*******/

      $(".slick").not('.slick-initialized').slick({
        prevArrow: '<div class="slick-arrow arrow-back"> <i class="flaticon-left-arrow-2"></i> </div>',
        nextArrow: '<div class="slick-arrow arrow-next"> <i class="flaticon-right-arrow-2"></i> </div>'
      });

    /****======  Bottom to Top Scroll Js  ======*******/
    var ScrollTop = $(".scrollToTop");
    $(window).on("scroll", function () {
      if ($(this).scrollTop() < 500) {
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

    $(window).on("load", function () {

      /****======  Preloader Js  ======*******/
      $(".loader").delay(500).animate({
        "opacity": "0"
      }, 500, function () {
        $(".loader").css("display", "none");
      });
    });
  })
}(jQuery));

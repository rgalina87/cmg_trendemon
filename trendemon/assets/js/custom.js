$(document).ready(function () {
  ////selct box
  //$( ".ui_select" ).selectmenu();

  $(".select_catagory ul").each(function () {
    var list = $(this),
      select = $(document.createElement("select")).insertBefore($(this));

    $(">li", this).each(function (index) {
      var target = $(this).attr("target"),
        option = $(document.createElement("option"))
          .appendTo(select)
          .val(target)
          .html($(this).html())
          .click(function () {
            if (target === "_blank") {
              window.open($(this).val());
            } else {
              window.location.href = $(this).val();
            }
          });
    });
  });

  // Custom nav toggle
  $(".menuTrigger").click(function () {
    $("body").toggleClass("addpanel");
  });

  $(".overlay").click(function () {
    $("body").removeClass("addpanel");
  });
  // Custom nav toggle

  let Lines_up = 0;
  //open.close mobile menu
  $(".mobilemenuTrigger").click(function () {
    $("body").toggleClass("addpanel");

    if (Lines_up === 0) {
      mobile_link_lines();
      Lines_up = 1;
    } else {
      mobile_link_lines_back();
      Lines_up = 0;
    }
  });

  function mobile_link_lines() {
    $(".reg_grey_hr2").css("opacity", "0");
    $(".reg_grey_hr1").css("-moz-transform", "rotate(-45deg)");
    $(".reg_grey_hr1").css("-webkit-transform", "rotate(-45deg)");
    $(".reg_grey_hr1").css("transform", "rotate(-45deg)");
    $(".reg_grey_hr1").css("top", "9px");
    $(".reg_grey_hr1").css("transform", "rotate(-45deg)");
    $(".reg_grey_hr3").css("transform", "rotate(45deg)");
    $(".reg_grey_hr3").css("-webkit-transform", "rotate(45deg)");
    $(".reg_grey_hr3").css("transform", "rotate(45deg)");
  }

  function mobile_link_lines_back() {
    $(".reg_grey_hr2").css("opacity", "1");
    $(".reg_grey_hr1").css("-moz-transform", "rotate(0deg)");
    $(".reg_grey_hr1").css("-webkit-transform", "rotate(0deg)");
    $(".reg_grey_hr1").css("transform", "rotate(0deg)");
    $(".reg_grey_hr1").css("top", "0");
    $(".reg_grey_hr3").css("transform", "rotate(0deg)");
    $(".reg_grey_hr3").css("-webkit-transform", "rotate(0deg)");
    $(".reg_grey_hr3").css("transform", "rotate(0deg)");
  }

  $("#menu-header-menu-1 .menu-item-has-children").click(function () {
    $(this).toggleClass("opened");

  });


  // Top on reload
  $("html, body").animate(
    {
      scrollTop: 0,
    },
    500
  );
  return false;
  // Top on reload

  /*$(window).resize(function() {
        var width = $(window).width();
        if (width < 768) {
            $('.new_blank').css('display', 'none');
            $('.banner_text').css({
                "visibility": "visible",
                "opacity": "1"
            });
            $('.header_outer').css({
                "visibility": "visible",
                "opacity": "1"
            });


        } else if (width > 767) {
            $('.new_blank').css('display', 'block');
        }
    });*/
});

$(window).on("load", function () {
  $(".select_catagory select")
    .addClass("ui_select")
    .change(function () {
      location.href = $(this).val();
    });
  $(".select_catagory ul li").each(function (i) {
    if ($(this).hasClass("active")) {
      $(".select_catagory select.ui_select")
        .find("option")
        .each(function (em) {
          if (em == i) {
            $(this).attr("selected", true);
          }
        });
    }
  });
  $(".select_catagory ul").remove();

  $("#status").fadeOut(); // will first fade out the loading animation
  $("#preloader").delay(350).fadeOut("slow"); // will fade out the white DIV that covers the website.
  $("body").delay(350).css({
    //overflow: "visible",
  });
});

/*--sec loader--*/
// $(window).on('load', function() { // makes sure the whole site is loaded
//     $('#status').fadeOut(); // will first fade out the loading animation
//     $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
//     $('body').delay(350).css({
//         'overflow': 'visible'
//     });
// })
/*--end--*/

/*

var waypoints = $('#soluton1').waypoint(function(direction) {
  if(direction == 'down'){
    TweenMax.to("#solutonImg1 img", 0.5, {autoAlpha: 1});
  } else if(direction == 'up'){
    TweenMax.to("#solutonImg1 img", 0.5, {autoAlpha: 1});
  }
}, {
  offset: '25%'
});
var waypoints = $('#soluton2').waypoint(function(direction) {
  if(direction == 'down'){
    TweenMax.to("#solutonImg1 img", 0.5, {autoAlpha: 0});
    TweenMax.to("#solutonImg2 img", 0.5, {autoAlpha: 1});
  } else if(direction == 'up'){
    TweenMax.to("#solutonImg2 img", 0.5, {autoAlpha: 0});
    TweenMax.to("#solutonImg1 img", 0.5, {autoAlpha: 1});
  }
}, {
  offset: '25%'
});
var waypoints = $('#soluton3').waypoint(function(direction) {
  if(direction == 'down'){
    TweenMax.to("#solutonImg2 img", 0.5, {autoAlpha: 0});
    TweenMax.to("#solutonImg3 img", 0.5, {autoAlpha: 1});
    TweenMax.to(".see_mor", 0.5, {autoAlpha: 1});
  } else if(direction == 'up'){
    TweenMax.to("#solutonImg3 img", 0.5, {autoAlpha: 0});
    TweenMax.to("#solutonImg2 img", 0.5, {autoAlpha: 1});
    TweenMax.to(".see_mor", 0.5, {autoAlpha: 0});
  }
}, {
  offset: '25%'
});
*/

/*Shrink*/
$(function () {
  var shrinkHeader = 2;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      // $('header').addClass('shrink');
      $("header").addClass("scrolled");
    } else {
      // $('header').removeClass('shrink');
      $("header").removeClass("scrolled");
    }
  });
  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }

  console.log("custom");
});

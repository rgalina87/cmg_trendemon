/*--sec loader--*/
$(window).on('load', function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  //CMG test remove
  // $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  // $('body').delay(350).css({'overflow':'visible'});
})
/*--end--*/

/*WOW*/
new WOW().init();
/*WOW*/

// // Custom nav toggle
// $(".menuTrigger").click(function () {
//   $("body").toggleClass("addpanel");
// });
//
// $(".overlay").click(function () {
//   $("body").removeClass("addpanel");
// });
// // Custom nav toggle

/*Slider*/

$('.partnr_slide').slick({
  infinite: true,
  slidesToShow: 7,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 7
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3
      }
    }
  ]
});
$('.h_partnr_slide').slick({
  infinite: true,
  slidesToShow: 8,
  slidesToScroll: 1,
  arrows: false,
  dots: false,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 7
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3
      }
    }
  ]
});
$('.testi_slider').slick({
  infinite: true,
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  dots: true,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

//product page slider

$('.slider_wrapper').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: false,
  fade: false,
  speed: 800,
  asNavFor: '.frslide',
  draggable: false,
  arrows: true,
  prevArrow:"<button type='button' class='slick-prev'><i class='fas fa-chevron-left' aria-hidden='true'></i></button>",
  nextArrow: "<button type='button' class='slick-next'><i class='fas fa-chevron-right' aria-hidden='true'></i></button>"
});

$('.frslide').slick({
  asNavFor: '.slider_wrapper',
  dots: false,
  slidesToShow: 5,
  infinite: false,
  draggable: false,
  focusOnSelect: true,
  arrows: false

});

//remove active class from all thumbnail slides
$('.frslide .slick-slide').removeClass('slick-active');

//set active class to first thumbnail slides
$('.frslide .slick-slide').eq(0).addClass('slick-active');

// On before slide change match active thumbnail to current slide
$('.slider_wrapper').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  var mySlideNumber = nextSlide;
  $('.frslide .slick-slide').removeClass('slick-active');
  $('.frslide .slick-slide').eq(mySlideNumber).addClass('slick-active');
});

$('.solution_slider').slick({
  infinite: true,
  centerMode: true,
  centerPadding: '0px',
  slidesToShow: 2,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  variableWidth: true,
  // fade: true,
  autoplay: true,
  autoplaySpeed: 4500,
  speed: 500,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


$('.fadePartners').slick({
  dots: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,

});

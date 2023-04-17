$(document).ready(function() {
    $('.study_slide').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        responsive: [

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 421,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.custmr_slide').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        responsive: [

            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 769,
                settings: {
                    arrows: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 421,
                settings: {
                    arrows: false,
                    slidesToShow: 1
                }
            }
        ]
    });


    // $('.partnr_slide').slick({
    //     infinite: true,
    //     slidesToShow: 6,
    //     slidesToScroll: 1,
    //     arrows: true,
    //     dots: false,
    //     responsive: [{
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 3
    //             }
    //         },
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 2
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]
    // });

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
        arrows: false,

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

    /*goto target area*/
    $(document).on('click','.goTo', function(event) {
        event.preventDefault();
        var target = "#" + this.getAttribute('data-go-to');
        $('html, body').animate({
        scrollTop: $(target).offset().top
        }, 1000);
    });
});
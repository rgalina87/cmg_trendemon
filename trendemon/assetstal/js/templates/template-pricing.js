/**
*
* Section: Testimonials Slider
*
*/

jQuery(document).ready(($) => {

  // Init
  initReviewsSlider('.pricing-reviews__slider');
  initLogosSlider('.pricing-logos__list', '.pricing-logos__listItem', '.pricing-logos');
  initFaqList();

  // Init functions
  function initReviewsSlider(sliderClassName) {

    // Check if exists
    if (!$(sliderClassName).length || $(sliderClassName).find('.swiper-slide').length < 2) return;

    new Swiper(sliderClassName, {
      autoplay: {
        delay: 5000,
        disableOnInteraction: true,
      },
      effect: 'slide',
      slidesPerView: 1,
      spaceBetween: 200,
      loop: true,
      watchSlidesProgress: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      },
      breakpoints: {
        // when window width is >= 320px
		    320: {
		      slidesPerView: 1,
          spaceBetween: 30,
		    },

        // when window width is >= 768px
		    768: {
		      slidesPerView: 1,
          spaceBetween: 100,
		    },

		    // when window width is >= 992px
		    992: {
		      slidesPerView: 1,
          spaceBetween: 200
		    },
		  }
    });
  }

  function initLogosSlider(sliderClassName, slideClassName, sliderSection) {

    if (!$(sliderClassName).length) return;

    let slidesCount = $(slideClassName).length;
    let slidesGap = 54;
    let speedPerSlideMs = 3000;
    let speed = speedPerSlideMs * slidesCount * 2; // Calculation the speed depending on slides count
    let slider;

    // On resize load event
    $(window).on('resize load', function() {
      debounce(adjustSlider, 100);
    });

    function adjustSlider() {
      let ww = $(window).width(); // Window width

      // Destroy slider on resize if it's initialized
      if ( $(sliderClassName).parents('.bx-wrapper').length ) {
        slider.destroySlider();
      }

      if ( ww < 768 ) {
        slidesGap = 40;
      }

      // If logos width more than window width - init slider
      if ( slidesWidthSum(sliderClassName) > ww ) {

        $(sliderSection).addClass('is-slider');

        // Init slider
        slider = $(sliderClassName).bxSlider({
          minSlides: 30,
          slideWidth: 'auto',
          ticker: true,
          speed: speed,
          tickerHover: false,
          preloadImages: 'all',
        });
      }
      //
      else {
        if ( $(sliderClassName).parents('.bx-wrapper').length ) {
          slider.destroySlider();
        }
        $(sliderSection).removeClass('is-slider');
      }

      // Helper functions
      function slidesWidthSum(slider) {
        let slidesWidth = 0;
        let $slides = $(slider).find(`${slideClassName}:not(.bx-clone)`);

        $slides.each(function() {
          slidesWidth += $(this).find('img').outerWidth();
        });

        return slidesWidth + ( (slidesCount - 1) * slidesGap) ;
      }
    }

    adjustSlider();
  }

  // Init functions
  function initFaqList() {

    if (!$('.pricing-faqs').length) return;

    let $list = $('.pricing-faqs__list');
    let $items = $list.find('.pricing-faqs__listItem');

    // Click event for each item in list
    $items.each(function() {

      // Define the toggler for each item
      let $itemToggler = $(this).find('.pricing-faqs__listItem-header');

      // Setting up the event for each item's toggler
      $itemToggler.on('click', function() {
        let $currentItem = $(this).parent(); // Current item
        let $prevItem = $list.find('.opened'); // Prev opened item

        if (!$currentItem.hasClass('opened')) { // If item is different from opened - opening new item / closing prev item
          $prevItem.removeClass('opened').promise().done(function() {
            $prevItem.find('.pricing-faqs__listItem-content').slideUp(250);
          });

          $currentItem.addClass('opened').promise().done(function() {
            $currentItem.find('.pricing-faqs__listItem-content').slideDown(250);
          });
        } else { // If item is the same with opened - closing item
          $currentItem.removeClass('opened').promise().done(function() {
            $currentItem.find('.pricing-faqs__listItem-content').slideUp(250);
          });
        }

      });
    });
  }

  // Helpers

  // Debounce function
  function debounce(method, delay) {
    clearTimeout(method._tId);
    method._tId= setTimeout(function(){
      method();
    }, delay);
  }

})

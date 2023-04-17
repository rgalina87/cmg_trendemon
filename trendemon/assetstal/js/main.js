/**
*
* Main
*
*/

jQuery(document).ready(function($) {

  // Init
  initHashEvents();

  // Init functions
  function initHashEvents() {
    $('a[href*="#"]:not([href="#"]):not(.prevent-hash-scroll)').on('click', function(e) {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

        if (target.length) {
          e.preventDefault();

          $('html,body').animate({
            scrollTop: target.offset().top - $('.section-header').height()
          }, 500);

          return false;
        }
      }
    });
  }
});

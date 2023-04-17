/**
 *
 * Templay: Why
 *
 */

jQuery(document).ready(function ($) {

    // Init
    initStickyHeader();
    initChangeActiveNav();
    initButtonTrickToScrollToSection();

    // Init functions
    function initStickyHeader() {

        // Sticky title element
        const $stickyHeader = $('.why-imageAndTexts__header');

        if (!$stickyHeader.length) return;

        // Init sticky title
        init();

        $(window).on('resize scroll load', init);

        // Init function
        function init() {
            let headerHeight = parseFloat(getComputedStyle(document.body).getPropertyValue('--header-height'));
            let stickyHeaderHeight = $stickyHeader.outerHeight();
            let stickyHeaderScrollTop = $stickyHeader[0].getBoundingClientRect().y;

            // Change body --sticky-title-height css var height
            document.body.style.setProperty('--sticky-title-height', `${stickyHeaderHeight}px`);

            // Add/Remove sticky class to sticky title
            if (stickyHeaderScrollTop <= headerHeight) {
                $stickyHeader.addClass('sticky');
            } else {
                $stickyHeader.removeClass('sticky');
            }
        }
    }

    function initChangeActiveNav() {
        const $nav = $('.why-imageAndTexts__nav');
        const $navItems = $('.why-imageAndTexts__navItem');
        const $dynamicTitle = $('.why-imageAndTexts__title[data-default-title]'); // Works only if title has data-default-title attribute

        // Vars
        let headerHeight = parseFloat(getComputedStyle(document.body).getPropertyValue('--header-height'));
        let windowScrollTop = $(window).scrollTop();
        let windowHeight = $(window).height();
        let windowWidth = $(window).width();
        let navHeight = $nav.outerHeight();
        let spaceBetweenContent = 160;

        // Remove old events
        $navItems.unbind();

        // Change active nav on button click
        $navItems.click(function (e) {
            e.preventDefault();
            let $target = $(this.hash);

            if (windowWidth > 991) {

                if (windowWidth < 1200) {
                    spaceBetweenContent = 140;
                }

                scrollTop = $target.offset().top - headerHeight - navHeight - spaceBetweenContent
            } else {
                scrollTop = $target.offset().top - headerHeight - navHeight
            }

            // If target section exists - smooth scroll to section
            if ($target.length) {
                $('html, body').animate({
                    scrollTop
                }, 600);
            }
        });

        // Anchors corresponding to nav menu items
        let scrollItems = $navItems.map(function () {
            let item = $($(this).attr("href"));

            if (item.length) return item;
        });

        function handleScrollEndEvents() {
            // Update vars
            windowScrollTop = $(window).scrollTop();
            windowHeight = $(window).height();
            windowWidth = $(window).width();
            navHeight = $nav.outerHeight();

            // Get id of current scroll item
            let current = scrollItems.map(function () {
                if ($(this).offset().top - ($(this).outerHeight() + headerHeight) < windowScrollTop) {
                    return this;
                }
            });

            // Get the id of the current element
            current = current[current.length - 1];
            let id = current && current.length ? current[0].id : "";

            if (id.length) {
                // Remove active class from previous active nav
                $('.why-imageAndTexts__navItem.nav-active').removeClass('nav-active');
                $('.why-imageAndTexts__images .image-active').removeClass('image-active');
                $('.why-imageAndTexts__content-block.content-active').removeClass('content-active');

                // Add active class to new button
                $('.why-imageAndTexts__navItem[href="#' + id + '"]').addClass('nav-active'); // To current item
                $('.why-imageAndTexts__navItem[href="#' + id + '"]').prevAll().addClass('nav-active'); // To previous items
                $('.why-imageAndTexts__images img[data-target="' + id + '"]').addClass('image-active');
                $('.why-imageAndTexts__content-block[id="' + id + '"]').addClass('content-active');

                // Change sticky title if it has dynamic-title class
                if ($dynamicTitle.length && windowWidth >= 992) {
                    let dynamicTitleText = $('.why-imageAndTexts__content-block[id="' + id + '"]').data('dynamic-title');
                    let defaultTitleText = $dynamicTitle.data('default-title');

                    if (dynamicTitleText.length) {
                        $dynamicTitle.text(dynamicTitleText);
                    } else if (defaultTitleText.length) {
                        $dynamicTitle.text(defaultTitleText);
                    }
                }
            } else {
                // Default active item - first
                $('.why-imageAndTexts__navItem:first-child').addClass('nav-active');
                $('.why-imageAndTexts__images img:first-child').addClass('image-active');
                $('.why-imageAndTexts__content-block:first-child').addClass('content-active');
            }
        }

        // Bind to scroll
        handleScrollEndEvents();

        $(window).on('resize load scroll', () => {
            debounce(handleScrollEndEvents, 10);
        });
    }

    function initButtonTrickToScrollToSection() {
      $('.why-imageAndTexts__content-button').click(function() {
        var href = $(this).attr('href');

        if (href && href.includes('#iat')) {
            $('.why-imageAndTexts__navItem[href="'+href+'"]').click();
        }
      });
    }

    // Helpers

    // Debounce function
    function debounce(method, delay) {
        clearTimeout(method._tId);
        method._tId = setTimeout(function () {
            method();
        }, delay);
    }

});

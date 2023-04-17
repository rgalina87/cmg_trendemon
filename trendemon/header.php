<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KGDV724');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="preload" href="/wp-content/themes/trendemon/assets/fonts/ProximaNova-Regular.otf" as="font" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGDV724" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- loader-->
    
    <!--end loader -->
    <!-- Overlay -->
    <div class="overlay"></div>
    <!-- Overlay -->

    <!--start-header-secion -->


    <?php if (get_post_type() == "lp") { ?>

        <div id="trigger1" class="spacer s0 lp-page-cont">

            <header class="header_outer lp-header">
                <nav class="navbar">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/trendemon_logo.svg" alt="Trendemon" class="trd_logo">
                        </a>



                        <div class="reqest_btn">
                            <a class="header_btn" href="https://trendemon.com/sign-up-for-a-demo/">Request Demo</a>
                        </div>
                    </div>
                </nav>
            </header>


        <?php } else { ?>

            <div id="trigger1" class="spacer s0 pg-page-cont">

                <header class="header_outer">
                    <nav class="navbar">
                        <div class="container">
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/trendemon_logo.svg" alt="Trendemon" class="trd_logo">

                            </a>
  

                            <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'Nav-v2', 'container_id' => 'nav_header_v2', 'menu_class' => 'navbar-nav text-uppercase 
                align-items-center ml-auto')); ?>

                            <div class="reqest_btn">
                                <a class="login_btn" href="https://webapp.trendemon.com/">Login</a>
                                <a class="start_btn" href="https://free-trial.trendemon.com/">Start Free</a>
                                <a class="header_btn" href="https://trendemon.com/sign-up-for-a-demo/">Request Demo</a>
                            </div>
                            <div class="header_bottom">
                                <div class="menupageTrigger">
                                    <a class="mobilemenuTrigger" href="javascript:void(0)">
                                        <span class="reg_grey_hr1"></span>
                                        <span class="reg_grey_hr3"></span>
                                        <span class="reg_grey_hr2"></span>
                                    </a>
                                </div>

                                <div class="hdr_btnMenu">

                                    <?php wp_nav_menu(array('theme_location' => 'header-menu', 'container_class' => 'menu-header-menu-container', 'menu_class' => 'menu')); ?>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>
            <?php } ?>
            <!--end-header-secion -->
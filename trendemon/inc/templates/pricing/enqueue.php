<?php
/**
 * Enqueue
 */

add_action( 'wp_enqueue_scripts', function () {

    $page_template = basename(get_page_template());

    if ($page_template == "template-pricing.php") :


        wp_enqueue_style( "main");
        wp_enqueue_script( "main");


        wp_enqueue_script( "swiper");
        wp_enqueue_script( "bxslider");


        // Template
        wp_enqueue_style( 'template-pricing', get_stylesheet_directory_uri() .'/assetstal/css/template-pricing.css', array(), THEME_FILES_VERSION);
        wp_enqueue_script( "template-pricing", get_stylesheet_directory_uri() ."/assetstal/js/templates/template-pricing.js", array('jquery'), THEME_FILES_VERSION, true );

    endif;

}, 101 );

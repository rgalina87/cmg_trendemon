<?php
/**
 * Enqueue
 */

add_action( 'wp_enqueue_scripts', function () {

    $page_template = basename(get_page_template());

    if ($page_template == "template-why.php") :


        wp_enqueue_style( "main");
        wp_enqueue_script( "main");

        // Template
        wp_enqueue_style( 'template-why', get_stylesheet_directory_uri() .'/assetstal/css/template-why.css', array(), THEME_FILES_VERSION);
        wp_enqueue_script( "template-why", get_stylesheet_directory_uri() ."/assetstal/js/templates/template-why.js", array('jquery'), THEME_FILES_VERSION, true );

    endif;

}, 101 );

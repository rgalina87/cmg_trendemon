<?php
/**
 * TG enqueue scripts
 */

if ( ! function_exists( 'tg_scripts' ) ) {
	function tg_scripts() {

		// CSS
        wp_register_style( "main", THEME_URI ."/assetstal/css/main.css", array(), THEME_FILES_VERSION );

		// JS

        wp_register_script( "swiper", THEME_URI ."/assetstal/js/vendor/swiper.min.js", array( 'jquery' ), THEME_FILES_VERSION, true );
        wp_register_script( "bxslider", THEME_URI ."/assetstal/js/vendor/jquery.bxslider.min.js", array( 'jquery' ), THEME_FILES_VERSION, true );
        wp_enqueue_script( "swiper");

        //wp_enqueue_script( "tg", THEME_URI ."/assetstal/js/tg.js", array( 'jquery' ), THEME_FILES_VERSION, true );
        wp_register_script( "main", THEME_URI ."/assetstal/js/main.js", array( 'jquery' ), THEME_FILES_VERSION, true );



        //CMG added
        wp_enqueue_style( 'main-menu', get_stylesheet_directory_uri() .'/assets/css/menu.css', array(), THEME_FILES_VERSION);
        wp_enqueue_style( 'footer-style', get_stylesheet_directory_uri() .'/assets/css/footer.css', array(), THEME_FILES_VERSION);
        wp_enqueue_style( 'lp-style', get_stylesheet_directory_uri() .'/assets/css/lp.css', array(), THEME_FILES_VERSION);        
        wp_enqueue_style( 'case-study-style', get_stylesheet_directory_uri() .'/assets/css/case-study.css', array(), THEME_FILES_VERSION);
        wp_enqueue_style( 'blog-style', get_stylesheet_directory_uri() .'/assets/css/blog.css', array(), THEME_FILES_VERSION);
        wp_enqueue_style( 'pricing-rev-style', get_stylesheet_directory_uri() .'/assets/css/pricing-review.css', array(), THEME_FILES_VERSION);
        
        if (is_page_template('template/page-product.php')) {
			wp_enqueue_style('product-style', get_template_directory_uri() . '/assets/css/product.css', array(), THEME_FILES_VERSION);
		}
        
        if (is_page_template('template/home2022.php') || is_page_template('template/homenew.php')) {
			wp_enqueue_style('homenewcss', get_template_directory_uri() . '/assets/css/homenew.css', array(), THEME_FILES_VERSION);
		}
     
        //CMG modified: replaced enqueu of legassy css for the compare template
        if (is_page_template('template-parts/compare_lp.php')) {
			wp_enqueue_style('compare-style', get_template_directory_uri() . '/assets/css/compare_lp.css', array(), THEME_FILES_VERSION);
		}


	}
} // endif function_exists( 'tg_scripts' ).

add_action( 'wp_enqueue_scripts', 'tg_scripts' );

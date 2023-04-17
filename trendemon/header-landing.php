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
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KGDV724');</script>
    <!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="preload" href="/wp-content/themes/trendemon/assets/fonts/ProximaNova-Regular.otf" as="font" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGDV724"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--start-header-secion -->
    <header>
        <nav class="navbar navbar-compare">
            <div class="container">
                <a class="navbar-brand navbar-brand-compare" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php echo get_theme_mod('header_logo_svg'); ?>
                </a>
				<?php 
					$new_window = get_field('new_window');
					if ($new_window =='yes'){
						$target = "target='_blank'";
					} else {
						$target = '';
					}
				?>
                <div class="reqest_btn">
					<a class="basic_btn small_basic_btn" href="<?php the_field('start_now_link'); ?>" <?php echo $target;?>>Start Now</a>			
                </div>
            </div>
        </nav>
    </header>
    <!--end-header-secion -->
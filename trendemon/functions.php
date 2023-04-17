<?php

/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}


function cc_mime_types($mimes)
{
	$mimes['json'] = 'text/plain';
	return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');


if (!function_exists('twentynineteen_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function twentynineteen_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('twentynineteen', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'twentynineteen'),
				'footer' => __('Footer Menu', 'twentynineteen'),
				'social' => __('Social Links Menu', 'twentynineteen'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				// 				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		//add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __('Small', 'twentynineteen'),
					'shortName' => __('S', 'twentynineteen'),
					'size'      => 19.5,
					'slug'      => 'small',
				),
				array(
					'name'      => __('Normal', 'twentynineteen'),
					'shortName' => __('M', 'twentynineteen'),
					'size'      => 22,
					'slug'      => 'normal',
				),
				array(
					'name'      => __('Large', 'twentynineteen'),
					'shortName' => __('L', 'twentynineteen'),
					'size'      => 36.5,
					'slug'      => 'large',
				),
				array(
					'name'      => __('Huge', 'twentynineteen'),
					'shortName' => __('XL', 'twentynineteen'),
					'size'      => 49.5,
					'slug'      => 'huge',
				),
			)
		);

		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __('Primary', 'twentynineteen'),
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex('default' === get_theme_mod('primary_color') ? 199 : get_theme_mod('primary_color_hue', 199), 100, 33),
				),
				array(
					'name'  => __('Secondary', 'twentynineteen'),
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex('default' === get_theme_mod('primary_color') ? 199 : get_theme_mod('primary_color_hue', 199), 100, 23),
				),
				array(
					'name'  => __('Dark Gray', 'twentynineteen'),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __('Light Gray', 'twentynineteen'),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __('White', 'twentynineteen'),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');
	}
endif;
add_action('after_setup_theme', 'twentynineteen_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentynineteen_widgets_init()
{

	register_sidebar(
		array(
			'name'          => __('Footer', 'twentynineteen'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'twentynineteen'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'twentynineteen_widgets_init');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function twentynineteen_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('twentynineteen_content_width', 640);
}
add_action('after_setup_theme', 'twentynineteen_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function twentynineteen_scripts()
{
	wp_enqueue_style('twentynineteen-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'));

	wp_style_add_data('twentynineteen-style', 'rtl', 'replace');

	if (has_nav_menu('menu-1')) {
		wp_enqueue_script('twentynineteen-priority-menu', get_theme_file_uri('/js/priority-menu.js'), array(), '1.1', true);
		// wp_enqueue_script( 'twentynineteen-touch-navigation', get_theme_file_uri( '/js/touch-keyboard-navigation.js' ), array(), '1.1', true );
	}

	wp_enqueue_style('twentynineteen-print-style', get_template_directory_uri() . '/print.css', array(), wp_get_theme()->get('Version'), 'print');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'twentynineteen_scripts');

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function twentynineteen_skip_link_focus_fix()
{
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
?>
	<script>
		/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
			var t, e = location.hash.substring(1);
			/^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus())
		}, !1);
	</script>
<?php
}
add_action('wp_print_footer_scripts', 'twentynineteen_skip_link_focus_fix');

/**
 * Enqueue supplemental block editor styles.
 */
function twentynineteen_editor_customizer_styles()
{

	wp_enqueue_style('twentynineteen-editor-customizer-styles', get_theme_file_uri('/style-editor-customizer.css'), false, '1.1', 'all');

	if ('custom' === get_theme_mod('primary_color')) {
		// Include color patterns.
		require_once get_parent_theme_file_path('/inc/color-patterns.php');
		wp_add_inline_style('twentynineteen-editor-customizer-styles', twentynineteen_custom_colors_css());
	}
}
add_action('enqueue_block_editor_assets', 'twentynineteen_editor_customizer_styles');

/**
 * Display custom color CSS in customizer and on frontend.
 */
function twentynineteen_colors_css_wrap()
{

	// Only include custom colors in customizer or frontend.
	if ((!is_customize_preview() && 'default' === get_theme_mod('primary_color', 'default')) || is_admin()) {
		return;
	}

	require_once get_parent_theme_file_path('/inc/color-patterns.php');

	$primary_color = 199;
	if ('default' !== get_theme_mod('primary_color', 'default')) {
		$primary_color = get_theme_mod('primary_color_hue', 199);
	}
?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint($primary_color) . '"' : ''; ?>>
		<?php echo twentynineteen_custom_colors_css(); ?>
	</style>
<?php
}
add_action('wp_head', 'twentynineteen_colors_css_wrap');

/**
 * SVG Icons class.
 */
require get_template_directory() . '/classes/class-twentynineteen-svg-icons.php';

/**
 * Custom Comment Walker template.
 */
require get_template_directory() . '/classes/class-twentynineteen-walker-comment.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


function demon_scripts()
{
	// Styles

	wp_enqueue_style('bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css'), '', '1.0');
	//wp_enqueue_style( 'bootstrap--select-css', get_theme_file_uri( '/assets/css/bootstrap-select.min.css' ), '', '1.0' );


	//wp_enqueue_style( 'slick', get_theme_file_uri( '/assets/css/slick.css' ), '', '1.0' );
	//wp_enqueue_style( 'fonts', get_theme_file_uri( '/assets/css/fonts.css' ), '', '1.0' );

	wp_enqueue_style('custom', get_theme_file_uri('/assets/css/custom.css'), '', '4.4');
	//wp_enqueue_style( 'developer', get_theme_file_uri( '/assets/css/developer.css' ), '', '1.0' );


	//scripts

	//wp_register_script( 'slider-script', 'https://trendemon.com/wp-content/themes/trendemon/assets/js/slider.min.js');
	//wp_enqueue_script( 'slider-script' );

	wp_deregister_script('jquery');
	//wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js' , false, NULL, true  );
	//wp_enqueue_script( 'jquery' );

	//wp_enqueue_script( 'slick-js', get_template_directory_uri(). '/assets/js/slick.min.js' , array ( 'jquery' ), 1.1, true );


	//wp_enqueue_script( 'jquery-validator', ('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.0/jquery.validate.min.js'), '', '1.0' );
	//wp_enqueue_script( 'jquery-additional-methods', ('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/additional-methods.min.js'), '', '1.0' );

	//wp_enqueue_script( 'migrate', 'https://code.jquery.com/jquery-migrate-3.0.0.min.js' , array('jquery'), '1.0' );

	//wp_enqueue_script( 'popper', get_theme_file_uri( '/assets/js/popper.min.js' ), array('jquery'), '1.0' );
	// wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array('jquery'), '1.0' );

	//wp_enqueue_script( 'slick-js', get_theme_file_uri( '/assets/js/slick.min.js' ), array('jquery'), '1.1' );
	// 2021 wp_enqueue_script( 'Wow', get_theme_file_uri( '/assets/js/wow.min.js' ), array('jquery'), '1.0' );
	//wp_enqueue_script( 'bootstrap-select', get_theme_file_uri( '/assets/js/bootstrap-select.min.js' ), array('jquery'), '1.0' );

	//wp_enqueue_script( 'TweenMax-js', get_theme_file_uri( '/assets/js/TweenMax.min.js' ), array('jquery'), '1.0' );
	//wp_enqueue_script( 'waypoints-js', get_theme_file_uri( '/assets/js/jquery.waypoints.min.js' ), array('jquery'), '1.0' );
	//wp_enqueue_script( 'fontawesome', get_theme_file_uri( '/assets/js/all.js' ), array('jquery'), '1.0' );
	//wp_enqueue_script( 'custom', get_theme_file_uri( '/assets/js/custom.js' ), array('jquery'), '1.0' );
	//wp_enqueue_script( 'developer', get_theme_file_uri( '/assets/js/developer.js' ), array('jquery'), '1.0' );
}
add_action('wp_enqueue_scripts', 'demon_scripts');




function demon_footer_scripts()
{


	//wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js' , false, NULL, true  );
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', false, NULL, true);

	wp_enqueue_script('jquery');


	wp_enqueue_style('animate', get_theme_file_uri('/assets/css/animate.css'), '', '1.0');
	//wp_enqueue_style( 'jquery-ui-min-css', get_template_directory_uri().'/assets/css/jquery-ui.min.css', array(), '1.1', 'all' );

	wp_enqueue_style('responsive', get_theme_file_uri('/assets/css/responsive.css?v=1'), '', '4.0');



	//wp_enqueue_style( 'slick', get_theme_file_uri( '/assets/css/slick.css' ), '', '1.0' );


	wp_enqueue_script('slick-js', get_template_directory_uri() . '/assets/js/slick.min.js');
	wp_enqueue_script('bootstrap-js', get_theme_file_uri('/assets/js/bootstrap.min.js'));
	//wp_enqueue_script( 'fontawesome', get_theme_file_uri( '/assets/js/all.js' ));
	wp_enqueue_script('custom', get_theme_file_uri('/assets/js/custom.js'));

	//wp_enqueue_script( 'jquery-ui-min-js', get_template_directory_uri(). '/assets/js/jquery-ui.min.js' , array ( 'jquery' ), 1.1, true );
	//wp_enqueue_script( 'jquery-validator', ('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.0/jquery.validate.min.js'), '', '1.2' );
	//wp_enqueue_script( 'slick-script', ('https://trendemon.com/wp-content/themes/trendemon/assets/js/slick.min.js' ), '', '1.0' );
	//wp_enqueue_script( 'jquery-additional-methods', ('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/additional-methods.min.js'), '', '1.0' );
	wp_enqueue_script('developer', get_theme_file_uri('/assets/js/developer.min.js'));
	//wp_enqueue_script( 'slick-js', get_theme_file_uri( '/assets/js/slick.min.js' ), array('jquery'), '1.0' );


}

add_action('get_footer', 'demon_footer_scripts');




/**** Menus ****/

function register_my_menus()
{
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu'),
			'footer-menu-1' => __('Footer Menu 1'),
			'footer-menu-2' => __('Footer Menu 2'),
			'footer-menu-3' => __('Footer Menu 3'),
			'footer-menu-4' => __('Footer Menu 4'),
			'overview-menu' => __('Overview Menu'),
			'resource-menu' => __('Resource Menu')
		)
	);
}
add_action('init', 'register_my_menus');


/**** Menus ****/

/**** Logos ****/

// function headerlogo( $wp_customize ) {
//    $wp_customize->add_section( 'header_logo' , array(
//       'title'       => __( 'Header Logo', 'themeslug' ),
//       'priority'    => 32,
//       'description' => 'Upload a logo to replace the default site name and description in the header',
//    ) );

//    $wp_customize->add_setting( 'header_logo' );

//    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo', array(
//       'label'    => __('Header logo', 'themeslug' ),
//       'section'  => 'header_logo',
//       'settings' => 'header_logo',
//    ) ) );
// }
// add_action( 'customize_register', 'headerlogo' );

function header_customizer($wp_customize)
{
	$wp_customize->add_section(
		'Header_section',
		array(
			'title' => 'Header Logo',
			'description' => 'Enter The Header SVG Logo Here',
			'priority' => 28,
		)
	);
	$wp_customize->add_setting(
		'header_logo_svg'
	);
	$wp_customize->add_control(
		'header_logo_svg',
		array(
			'label' => 'Header Logo',
			'section' => 'Header_section',
			'type' => 'textarea',
		)
	);
}
add_action('customize_register', 'header_customizer');

function footerlogo($wp_customize)
{
	$wp_customize->add_section('footer_logo', array(
		'title'       => __('Footer Logo', 'themeslug'),
		'priority'    => 35,
		'description' => 'Upload a logo to replace the default site name and description in the header',
	));

	$wp_customize->add_setting('footer_logo');

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_logo', array(
		'label'    => __('Footer logo', 'themeslug'),
		'section'  => 'footer_logo',
		'settings' => 'footer_logo',
	)));
}
add_action('customize_register', 'footerlogo');

/**** Logos ****/

/**** Footer content ****/

function footer_customizer($wp_customize)
{
	$wp_customize->add_section(
		'footer_section',
		array(
			'title' => 'Footer Content',
			'description' => 'Enter Footer Content & Social Links Here',
			'priority' => 30,
		)
	);
	$wp_customize->add_setting(
		'overview_header'
	);
	$wp_customize->add_control(
		'overview_header',
		array(
			'label' => 'Overview Header',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'resources_header'
	);
	$wp_customize->add_control(
		'resources_header',
		array(
			'label' => 'Resources Header',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'stay_header'
	);
	$wp_customize->add_control(
		'stay_header',
		array(
			'label' => 'Stay In Touch Header',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'signup_header'
	);
	$wp_customize->add_control(
		'signup_header',
		array(
			'label' => 'Sign Up Header',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_setting(
		'footer_copyright'
	);
	$wp_customize->add_control(
		'footer_copyright',
		array(
			'label' => 'Footer copyright',
			'section' => 'footer_section',
			'type' => 'textarea',
		)
	);
	$wp_customize->add_setting(
		'footer_legal'
	);
	$wp_customize->add_control(
		'footer_legal',
		array(
			'label' => 'Footer copyright',
			'section' => 'footer_section',
			'type' => 'textarea',
		)
	);
	$wp_customize->add_setting(
		'facebook'
	);
	$wp_customize->add_setting(
		'twitter'
	);
	$wp_customize->add_setting(
		'linkedin'
	);
	$wp_customize->add_setting(
		'google_plus'
	);
	$wp_customize->add_control(
		'facebook',
		array(
			'label' => 'Facebook',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_control(
		'twitter',
		array(
			'label' => 'Twitter',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_control(
		'linkedin',
		array(
			'label' => 'Linkedin',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
	$wp_customize->add_control(
		'google_plus',
		array(
			'label' => 'Google+',
			'section' => 'footer_section',
			'type' => 'text',
		)
	);
}
add_action('customize_register', 'footer_customizer');

/**** Footer content ****/

function case_study_post_type()
{
	$labels = array(
		'name'                => __('Case Study'),
		'singular_name'       => __('Case Study'),
		'menu_name'           => __('Case Study'),
		'parent_item_colon'   => __('Parent Case Study'),
		'all_items'           => __('All Case Study'),
		'view_item'           => __('View Case Study'),
		'add_new_item'        => __('Add New Case Study'),
		'add_new'             => __('Add New'),
		'edit_item'           => __('Edit Case Study'),
		'update_item'         => __('Update Case Study'),
		'search_items'        => __('Search Case Study'),
		'not_found'           => __('Not Found'),
		'not_found_in_trash'  => __('Not found in Trash')
	);

	// Set other options for Custom Post Type

	$args = array(
		'label'               => __('case_study'),
		'description'         => __('case_studies'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array('genres'),
		/* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 30,
		'menu_icon'           => 'dashicons-book-alt',
		'can_export'          => true,
		'has_archive'         => true,
		'rewrite' => array('slug' => 'case_study'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post'
	);
	register_post_type('case_study', $args);
}
add_action('init', 'case_study_post_type', 0);


add_action('init', 'create_rescat_taxonomies', 0);
// create two taxonomies, genres and writers for the post type "book"

function create_rescat_taxonomies()
{
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x('Case Study Categories', 'taxonomy general name'),
		'singular_name'     => _x('Case Study Categories', 'taxonomy singular name'),
		'search_items'      => __('Search categories'),
		'all_items'         => __('All Case Study Categories'),
		'parent_item'       => __('Parent Case Study Categories'),
		'parent_item_colon' => __('Parent Case Study Categories:'),
		'edit_item'         => __('Edit Case Study Categories'),
		'update_item'       => __('Update Case Study Categories'),
		'add_new_item'      => __('Add New Case Study Categories'),
		'new_item_name'     => __('New Case Study Categories'),
		'menu_name'         => __('Case Study Categories'),
	);

	$args = array(
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'update_count_callback' => 'my_update_case_study_category', // same as function name
		'update_count_callback' => 'my_update_case_study_category_one',
		'query_var'         => true,
		'rewrite'           => array('slug' => 'case_study_cat'), // same name is lower case
		'supports'          => array('thumbnail'),
	);

	register_taxonomy('case_study_cat', array('case_study'), $args);    //post type name
}
add_theme_support('post-thumbnails', array('post', 'case_study'));

function my_update_case_study_category($terms, $taxonomy)
{
	global $wpdb;
	foreach ((array) $terms as $term) {

		$count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $wpdb->term_relationships WHERE term_taxonomy_id = %d", $term));

		do_action('edit_term_taxonomy', $term, $taxonomy);
		$wpdb->update($wpdb->term_taxonomy, compact('count'), array('term_taxonomy_id' => $term));
		do_action('edited_term_taxonomy', $term, $taxonomy);
	}
}

function my_update_case_study_category_one($terms, $taxonomy)
{
	global $wpdb;
	foreach ((array) $terms as $term) {

		$count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $wpdb->term_relationships WHERE term_taxonomy_id = %d", $term));

		// echo "<pre>";
		// print_r($count);die;

		do_action('edit_term_taxonomy', $term, $taxonomy);
		$wpdb->update($wpdb->term_taxonomy, compact('count'), array('term_taxonomy_id' => $term));
		do_action('edited_term_taxonomy', $term, $taxonomy);
	}
}

// remove_filter( 'the_content', 'wpautop' );

function custom_post_type()
{
	$labels = array(
		'name' => __('Resources'),
		'singular_name' => __('Resources'),
		'menu_name' => __('Resources'),
		'parent_item_colon' => __('Parent Resources'),
		'all_items' => __('All Resources'),
		'view_item' => __('View Resources'),
		'add_new_item' => __('Add New Resources'),
		'add_new' => __('Add New'),
		'edit_item' => __('Edit Resources'),
		'update_item' => __('Update Resources'),
		'search_items' => __('Search Resources'),
		'not_found' => __('Not Found'),
		'not_found_in_trash' => __('Not found in Trash')
	);

	// Set other options for Custom Post Type

	$args = array(
		'label' => __('resources'),
		'description' => __('Our Resourcess'),
		'labels' => $labels,
		// Features this CPT supports in Post Editor
		'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies' => array('genres'),
		/* A hierarchical CPT is like Pages and can have
	* Parent and child items. A non-hierarchical CPT
	* is like Posts.
	*/
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 30,
		'menu_icon' => 'dashicons-businessman',
		'can_export' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'resources'),
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post'
	);
	register_post_type('resources', $args);
}
add_action('init', 'custom_post_type', 0);


function custom_post_type_cstmr()
{
	$labels = array(
		'name' => __('Customer'),
		'singular_name' => __('Customer'),
		'menu_name' => __('Customer'),
		'parent_item_colon' => __('Parent Customer'),
		'all_items' => __('All Customer'),
		'view_item' => __('View Customer'),
		'add_new_item' => __('Add New Customer'),
		'add_new' => __('Add New'),
		'edit_item' => __('Edit Customer'),
		'update_item' => __('Update Customer'),
		'search_items' => __('Search Customer'),
		'not_found' => __('Not Found'),
		'not_found_in_trash' => __('Not found in Trash')
	);

	// Set other options for Custom Post Type

	$args = array(
		'label' => __('customer'),
		'description' => __('Our Customers'),
		'labels' => $labels,
		// Features this CPT supports in Post Editor
		'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies' => array('genres'),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_in_admin_bar' => true,
		'menu_position' => 30,
		'menu_icon' => 'dashicons-groups',
		'can_export' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'customer'),
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post'
	);
	register_post_type('customer', $args);
}
add_action('init', 'custom_post_type_cstmr', 0);

/***** admin logo ****/

function my_login_logo()
{ ?>
	<style type="text/css">
		.login {
			background-color: #daf0fd !important;
		}

		.login h1 a {
			background-image: url(<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/logo.png) !important;
			padding-bottom: 14px !important;
			width: 230px !important;
			height: 40px !important;
			background-size: contain !important;
			background-position: center center !important;
			box-shadow: none !important;
			margin: 0 auto 30px !important;
		}

		.interim-login.login h1 a {
			width: 180px !important;
		}

		input#wp-submit {
			line-height: 23px;
			border: 1px solid #0a0b0b;
			font-size: 16px;
			text-transform: uppercase;
			border-radius: 4px;
			padding: 5px 20px;
			font-weight: 500;
			height: 100%;
			box-shadow: none;
			text-shadow: none;
			transition: all 0.4s ease-in-out;
			-webkit-transition: all 0.4s ease-in-out;
		}

		input#wp-submit:hover {
			background: transparent;
			color: #1f72f0;
		}

		#login {
			width: 420px !important;
		}

		.login #nav a,
		.login #backtoblog a {
			color: #1f72f0 !important;
		}

		.login label {
			font-weight: 700;
			font-size: 15px !important;
			color: #1f72f0 !important;
		}

		.login form .input {
			color: #1f72f0 !important;
			border: 0;
			border-radius: 0;
			border-bottom: 2px solid #0a0b0b;
			background-color: transparent !important;
			padding-left: 0 !important;
			box-shadow: none !important;
			line-height: 100%;
			border-bottom: 1px solid #464646 !important;
			transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
		}

		.login form .input:focus {
			border-color: #1e2b3f !important;
		}

		input#wp-submit {
			background-color: #2a8cd1 !important;
			border-color: #2a8cd1 !important;
			padding: 8px 25px;
			line-height: 22px;
		}

		input#wp-submit:hover {
			background-color: #fff !important;
			border-color: #2a8cd1 !important;
			color: #2a8cd1;
		}

		input[type=checkbox]:checked:before {
			color: #2a8cd1 !important;
		}

		input[type=checkbox]:focus {
			border-color: #d2b57d !important;
			box-shadow: none !important;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');

// changing the logo link from wordpress.org to your site
function mb_login_url()
{
	return home_url();
}
add_filter('login_headerurl', 'mb_login_url');

// changing the alt text on the logo to show your site name
function mb_login_title()
{
	return get_option('blogname');
}
add_filter('login_headertitle', 'mb_login_title');


function team_post_type()
{
	$labels = array(
		'name'                => __('Team'),
		'singular_name'       => __('Team'),
		'menu_name'           => __('Team'),
		'parent_item_colon'   => __('Parent Team'),
		'all_items'           => __('All Team'),
		'view_item'           => __('View Team'),
		'add_new_item'        => __('Add New Team'),
		'add_new'             => __('Add New'),
		'edit_item'           => __('Edit Team'),
		'update_item'         => __('Update Team'),
		'search_items'        => __('Search Team'),
		'not_found'           => __('Not Found'),
		'not_found_in_trash'  => __('Not found in Trash')
	);

	// Set other options for Custom Post Type

	$args = array(
		'label'               => __('team'),
		'description'         => __('team'),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'),
		// You can associate this CPT with a taxonomy or custom taxonomy.
		'taxonomies'          => array('genres'),
		/* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 40,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => true,
		'rewrite' => array('slug' => 'team'),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post'
	);
	register_post_type('team', $args);
}
add_action('init', 'team_post_type', 0);


function add_this_script_demo()
{ ?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('257' == event.detail.contactFormId) {
				setTimeout("$('button.submit').prop('disabled', null).button('reset'); $('.modal').modal('hide');", 3000);
			}
		}, false);
	</script>
<?php }
add_action('wp_footer', 'add_this_script_demo');


function add_this_script_footer1()
{ ?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('679' == event.detail.contactFormId) {
				var inputs = event.detail.inputs;
				var urs = inputs[4].value;
				window.open(
					urs,
					'_blank'
				);
			}
		}, false);
	</script>
<?php }
add_action('wp_footer', 'add_this_script_footer1');

function add_this_script_footer2()
{ ?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('680' == event.detail.contactFormId) {
				var inputs = event.detail.inputs;
				var urs = inputs[4].value;
				window.open(
					urs,
					'_blank'
				);
			}
		}, false);
	</script>
<?php }
add_action('wp_footer', 'add_this_script_footer2');


function add_this_script_footer3()
{ ?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('681' == event.detail.contactFormId) {
				var inputs = event.detail.inputs;
				var urs = inputs[4].value;
				window.open(
					urs,
					'_blank'
				);
			}
		}, false);
	</script>
<?php }
add_action('wp_footer', 'add_this_script_footer3');

function add_this_script_footer4()
{ ?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('427' == event.detail.contactFormId) {
				var inputs = event.detail.inputs;
				var urs = inputs[4].value;
				window.open(
					urs,
					'_blank'
				);
			}
		}, false);
	</script>
<?php }
add_action('wp_footer', 'add_this_script_footer4');

function add_this_script_footer5()
{ ?>
	<script>
		document.addEventListener('wpcf7mailsent', function(event) {
			if ('2127' == event.detail.contactFormId) {
				var inputs = event.detail.inputs;
				var urs = "https://trendemon.com/wp-content/uploads/2021/05/TrenDemon_WP.pdf";
				window.open(
					urs,
					'_blank'
				);
			}
		}, false);
	</script>
<?php }
add_action('wp_footer', 'add_this_script_footer5');
remove_action('wp_head', 'wp_generator');
?>





<?php
/* Home New Things */
add_shortcode('learnmore', 'display_contact_form');
function display_contact_form()
{

	$validation_messages = [];
	$success_message = '';
	if (isset($_POST['contact_form'])) {
		$email = isset($_POST['email']) ? sanitize_text_field($_POST['email']) : '';
		if (strlen($email) === 0 or !is_email($email)) {
			$validation_messages[] = esc_html__('Please enter a valid email address.', 'trendemon');
		}
		if (empty($validation_messages)) {

			$mail    = get_option('admin_email');
			$subject = 'New message from ' . $full_name;
			$message = $message . ' - The email address of the customer is: ' . $mail;
			wp_mail($mail, $subject, $message);
			$success_message = esc_html__('You have been subscribed successfully .', 'trendemon');
		}
	}
	if (!empty($validation_messages)) {
		foreach ($validation_messages as $validation_message) {
			echo '<div class="validation-message">' . esc_html($validation_message) . '</div>';
		}
	}
	if (strlen($success_message) > 0) {
		echo '<div class="success-message">' . esc_html($success_message) . '</div>';
	}
?>
	<div id="validation-messages-container"></div>
	<form id="contact-form" action="<?php echo esc_url(get_permalink()); ?>" method="post">
		<div class="form-row">
			<input type="hidden" name="contact_form">

			<div class="form-group col-md-9">

				<input type="text" class="mail_box" placeholder="work email" name="email">
			</div>

			<div class="form-group col-md-3">
				<input type="submit" class="get_demo_btn" value="<?php echo esc_attr('Get Demo', 'mythemes'); ?>">

			</div>

		</div>
	</form>
<?php
}
function wpb_demo_shortcode()
{
	$message = '<span class="counterd">31100</span>E';
	return $message;
}
// register shortcode
add_shortcode('greeting', 'wpb_demo_shortcode');


if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title' => 'Theme Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug'  => 'theme-settings',
		'capability' => 'edit_posts',
		'redirect'   => false
	));
}

require 'inc/init.php';

?>

<?php
/**
 * Define Constants
 */
define('CHILD_THEME_TWENTY_NINTEEN_WEBSITE_VERSION', '1.1.0');

$inc = [
	'inc/post-types.php',
];


array_map(function ($file) {
	locate_template($file, true);
}, $inc);




?>
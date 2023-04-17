<?php
/**
 * tg functions and definitions
 */


define( 'THEME_PATH' , get_template_directory() );
define( 'THEME_URI' , get_stylesheet_directory_uri() );
define( 'THEME_INC' , THEME_PATH . '/inc' );
define( 'THEME_CORE' , THEME_INC . '/core' );
define( 'THEME_TEMPLATES' , THEME_INC . '/templates' );
define( 'THEME_COMPONENTS' , THEME_INC . '/components' );
define( 'THEME_FILES_VERSION', '6.2.1');

require THEME_PATH . '/inc/enqueue.php';

require THEME_PATH . '/inc/extras.php';

require THEME_INC . '/templates-loader.php';

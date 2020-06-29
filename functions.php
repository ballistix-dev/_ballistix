<?php
/**
* Functions
*
* @package _ballistix
*/

//show_admin_bar(false);

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( '_ballistix_setup' ) ) :

    function _ballistix_setup() {

        global $cap, $content_width;

        // This theme styles the visual editor with editor-style.css to match the theme style.
        add_editor_style();

        /**
         * Add default posts and comments RSS feed links to head
        */
        add_theme_support( 'automatic-feed-links' );

        /**
         * Enable support for Post Thumbnails on posts and pages
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
        */
        add_theme_support( 'post-thumbnails' );

        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
        */
        load_theme_textdomain('_ballistix', get_template_directory() . '/languages');

        /**
         * Enable support for HTML5 Forms
        */
        add_theme_support( 'html5', array( 'search-form' ) );

        add_theme_support('custom-logo');

    }

endif; // _ballistix_setup
add_action('after_setup_theme', '_ballistix_setup');



function _ballistix_enqueue_assets()
{
    wp_enqueue_script(
    '_ballistix',
    get_stylesheet_directory_uri() . '/dist/js/ballistix.min.js',
    array('jquery',),
    '4.0.0',
    true
  );
    wp_enqueue_style(
    '_ballistix',
    get_stylesheet_directory_uri() . '/dist/css/ballistix.min.css',
    array(),
    '4.0.0',
    'all'
  );
    wp_enqueue_style(
    'style',
    get_stylesheet_uri(),
    array(),
    '4.0.0',
    'all'
  );
}

add_action('wp_enqueue_scripts', '_ballistix_enqueue_assets');

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _ballistix_widgets_init() {
    register_sidebar( array(
        'name' => __('Sidebar', '_ballistix'),
        'id' => 'widget-sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar( array(
        'name' => __('Footer', '_ballistix'),
        'id' => 'widget-footer',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar( array(
        'name' => __('Header', '_ballistix'),
        'id' => 'widget-header',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

}
add_action('widgets_init', '_ballistix_widgets_init');

if ( version_compare($GLOBALS['wp_version'], '5.0-beta', '>') ) {
// WP > 5 beta
    add_filter( 'use_block_editor_for_post_type', '_ballistix_disable_gutenberg_on_page', 10, 2 );
} else {
    // WP < 5 beta
    add_filter( 'gutenberg_can_edit_post_type', '_ballistix_disable_gutenberg_on_page', 10, 2 );
};

function _ballistix_disable_gutenberg_on_page( $is_enabled, $post_type ) {
    if ( 'page' == $post_type ) {
        return false;
    }

    return $is_enabled;
}

foreach ( glob( get_template_directory() . "/functions/*.php") as $file) {
  require $file;
}

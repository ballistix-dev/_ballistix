<?php
/**
* Functions
*
* @package _ballistix 3.0.0
*/

show_admin_bar(false);

add_action('wp_enqueue_scripts', '_ballistix_enqueue_assets');

function _ballistix_enqueue_assets()
{
    wp_enqueue_script(
    '_ballistix',
    get_stylesheet_directory_uri() . '/dist/js/ballistix.min.js',
    array('jquery',),
    '3.0.2',
    true
  );
    wp_enqueue_style(
    '_ballistix',
    get_stylesheet_directory_uri() . '/dist/css/ballistix.min.css',
    array(),
    '3.0.2',
    'all'
  );
    wp_enqueue_style(
    'style',
    get_stylesheet_uri(),
    array(),
    '3.0.2',
    'all'
  );
}

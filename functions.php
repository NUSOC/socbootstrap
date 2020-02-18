<?php

/**
 * Socbootstrap Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package socbootstrap
 */

add_action('wp_enqueue_scripts', 'wp_bootstrap_starter_parent_theme_enqueue_styles');

/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_parent_theme_enqueue_styles()
{
	wp_enqueue_style('wp-bootstrap-starter-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style(
		'socbootstrap-style',
		get_stylesheet_directory_uri() . '/style.css',
		array('wp-bootstrap-starter-style')
	);
}


/* 

*/
add_action('init', function () {
	register_nav_menu('white-header-menu', __('White Header Menu'));
});

<?php

/**
 * Define Constants
 */
define('CHILD_THEME_NANA_SOS_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

	/** Nana SOS theme style */
	wp_enqueue_style('nanasos-child-theme-css', get_stylesheet_directory_uri() . '/dist/css/style.css', array('astra-theme-css'), CHILD_THEME_NANA_SOS_VERSION, 'all');
	/** Swiper style */
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', '', CHILD_THEME_NANA_SOS_VERSION, 'all');

	/** Swiper scripts */
	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', '', '8.4.4', true);
	/** Nana SOS scripts */
	wp_enqueue_script('nanasos-scripts', get_stylesheet_directory_uri() . '/dist/js/scripts.js', '', '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

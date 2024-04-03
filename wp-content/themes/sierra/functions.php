<?php
if (!defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}
define('ASSETS_PATH', get_template_directory_uri() . '/public');

function sierra_setup()
{
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support('post-thumbnails');

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
}
add_action('after_setup_theme', 'sierra_setup');

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/theme-enqueues.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

add_action('after_setup_theme', 'crb_load');
function crb_load()
{
	require_once(get_template_directory() . '/inc/carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Load Carbon Fields
 */
require get_template_directory() . '/inc/carbon-fields-setup.php';

/**
 * Carbon sections output
 */
require get_template_directory() . '/inc/carbon-fields-sections-output.php';

/**
 * Carbon site settings
 */
require get_template_directory() . '/inc/carbon-site-settings.php';

// Remove p tag from Contacts Form 7
add_filter('wpcf7_autop_or_not', '__return_false');


function sierra_excerpt_length($length)
{
	return 35;
}
add_filter('excerpt_length', 'sierra_excerpt_length', 999);


function sierra_excerpt_more($more)
{
	return '...';
}
add_filter('excerpt_more', 'sierra_excerpt_more');

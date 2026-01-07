<?php

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function csk_drift_scripts()
{
	// Main CSS file (compiled from Sass)
	wp_enqueue_style('csk-drift-style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0.0');

	// Main JS file
	wp_enqueue_script('csk-drift-script', get_template_directory_uri() . '/src/js/main.js', array(), '1.0.0', true);

	// FontAwesome
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1');
}
add_action('wp_enqueue_scripts', 'csk_drift_scripts');

/**
 * Disable Gutenberg Block Editor
 * restore classic editor for ACF Flexible Content usage
 */
add_filter('use_block_editor_for_post', '__return_false');

/**
 * Register Navigation Menu
 */
function csk_drift_register_menus()
{
	register_nav_menus(
		array(
			'primary' => esc_html__('Primary Menu', 'csk-drift'),
		)
	);
}
add_action('init', 'csk_drift_register_menus');

/**
 * Hide Content Editor on Pages
 * Only use ACF fields
 */
function csk_drift_disable_content_editor()
{
	remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'csk_drift_disable_content_editor');

/**
 * Allow SVG Uploads
 */
function csk_drift_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'csk_drift_mime_types');

/**
 * Enable Post Thumbnails
 */
add_theme_support('post-thumbnails');

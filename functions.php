<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue scripts and styles.
 */
function csk_drift_scripts() {
	// Main CSS file (compiled from Sass)
	wp_enqueue_style( 'csk-drift-style', get_template_directory_uri() . '/dist/css/main.css', array(), '1.0.0' );

	// Main JS file
	wp_enqueue_script( 'csk-drift-script', get_template_directory_uri() . '/src/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'csk_drift_scripts' );

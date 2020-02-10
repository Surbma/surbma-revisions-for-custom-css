<?php

/*
Plugin Name: Surbma | Revisions for Custom CSS
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Adds revisions support for the Custom CSS post type.

Version: 2.0

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-rfcc
Domain Path: /languages/
*/

// Prevent direct access
defined( 'ABSPATH' ) || exit;

function surbma_rfcc_add_revisions_support() {
	add_post_type_support( 'custom_css', 'revisions' );
}
add_action( 'init', 'surbma_rfcc_add_revisions_support' );

function surbma_rfcc_change_capabilities( $args, $post_type ) {
	if ( $post_type === 'custom_css') {
		$args['public'] = true;
		$args['show_ui'] = true;
		$args['show_in_menu'] = true;
	}

	return $args;
}
add_filter( 'register_post_type_args', 'surbma_rfcc_change_capabilities', 10, 2 );

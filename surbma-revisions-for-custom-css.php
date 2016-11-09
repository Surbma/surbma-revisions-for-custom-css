<?php

/*
Plugin Name: Surbma - Revisions for Custom CSS
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Adds revisions support for the Custom CSS post type.

Version: 1.0.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-revisions-for-custom-css
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

add_action( 'init', 'surbma_revisions_for_custom_css_add_revisions_support' );
function surbma_revisions_for_custom_css_add_revisions_support() {
	add_post_type_support( 'custom_css', 'revisions' );
}

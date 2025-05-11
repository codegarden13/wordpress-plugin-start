<?php
/**
 * Plugin Name:     Code13 Config
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     code13-config
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Code13_Config
 */





// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Allow SVG uploads.
add_filter( 'upload_mimes', function( $mimes ) {
	if ( current_user_can( 'administrator' ) ) {
		$mimes['svg']  = 'image/svg+xml';
		$mimes['svgz'] = 'image/svg+xml';
	}
	return $mimes;
} );

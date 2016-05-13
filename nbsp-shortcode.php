<?php
/**
Plugin Name: NBSP Shotcode
Author: Chris Daley
Author URI: https://www.lodesys.com
Plugin URI: https://www.lodesys.com/plugin/nbsp-shortcode/
Requires WP:       3.8
Version: 0.1.0
Requires PHP:      5.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/Lodesys/nbsp-shortcode.git
GitHub Branch:     master
Description: Replaces the `[nbsp]` shortcode with the `&nbsp ;` character entity string.
 */

// security measure
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

// define the class containing the plugin scripts
class nbsp_shortcode {

	// activate the plugin
	static function activate() {
		if ( version_compare( get_bloginfo( 'version' ), '3.8', '<' ) ) {
			wp_die( "You must update WordPress to use this plugin!" );
		}
	}

	// replace the shortcode
	static function insert_nbsp() {
		return '&nbsp;';
	}

}

// add the plugin hooks
register_activation_hook( __FILE__, array( 'nbsp_shortcode', 'activate' ) );
add_shortcode( 'nbsp', array( 'nbsp_shortcode', 'insert_nbsp' ) );


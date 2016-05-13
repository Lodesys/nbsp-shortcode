<?php
/**
Plugin Name: _TEMPLATE_TEXT_NAME_HERE_
Plugin URI: https://www.lodesys.com/_URL_HERE_
Description: _A_DESCRIPTION_OF_THE_PLUGIN_
Version: 0.0.1
Author: Chris Daley
Author URI: https://www.lodesys.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: _TEMPLATE_FOLDER_NAME_HERE_
GitHub Plugin URI: https://github.com/Lodesys/_TEMPLATE_FOLDER_NAME_HERE_
GitHub Branch:     master
Requires WP:       3.8
Requires PHP:      5.3
 */

// security measure
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

// activate the plugin
function _TEMPLATE_FOLDER_NAME_activate() {
	if ( version_compare( get_bloginfo( 'version' ), '3.8', '<' ) ) {
		wp_die( "You must update WordPress to use this plugin!" );
	}
}
register_activation_hook( __FILE__, '_TEMPLATE_FOLDER_NAME_activate' );

// include or require any files

// insert the action &/or filter hooks

// simple functions here

<?php
/**
 * NBSP Shotcode Plugin
 *
 * @package   nbsp-shortcode
 * @author    Chris Daley <chris@lodesys.com>
 * @copyright (c) 2016 Chris Daley
 * @license   GPLv2
 *
 * Plugin Name: NBSP Shotcode
 * Author: Chris Daley
 * Author URI: https://www.lodesys.com
 * Plugin URI: https://www.lodesys.com/plugin/nbsp-shortcode/
 * Requires WP:       3.8
 * Version: 0.1.0
 * Requires PHP:      5.3
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/Lodesys/nbsp-shortcode.git
 * GitHub Branch:     master
 * Description: Replaces the `[nbsp]` shortcode with the `&nbsp ;` character entity string.
 */

/**
 * security measure
 */
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );

/**
 * Class defining all code for this plugin.
 */
class nbsp_shortcode {

	/**
	 * Handle plugin activation needs
	 *
	 * @return	void
	 */
	static function activate() {

		// check for a minimum required WordPress version number
		if ( version_compare( get_bloginfo( 'version' ), '3.8', '<' ) ) {
			wp_die( "You must update WordPress to use this plugin!" );
		}
	}

	/**
	 * Provides repacement &nbsp; text for the [nbsp] shortcode
	 *
	 * @return	string	the replacement &nbsp; text string
	 */
	static function insert_nbsp() {
		return '&nbsp;';
	}

}

/**
 * Install the hooks for this plugin
 */
register_activation_hook( __FILE__, array( 'nbsp_shortcode', 'activate' ) );
add_shortcode( 'nbsp', array( 'nbsp_shortcode', 'insert_nbsp' ) );


<?php

/**
 * Handles item & value cleanup when this plugin is deleted.
 *
 * @package   nbsp-shortcode
 * @author    Chris Daley <chris@lodesys.com>
 * @copyright (c) 2016 Chris Daley
 * @license   GPLv2
 */

/**
 * confirm deleting / uninstalling plugin
 */
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/**
 * 		***************** YOU MUST DELETE THIS! *****************
 */
wp_die(__("UNINSTALL NOT PROGRAMMED FOR THIS PLUGIN! DELETE THIS FILE OR ADD SOME CODE."));

/**
 * clean out items & values no longer needed
 */
if ( false != get_option( 'something' ) ) {
	delete_option( 'something' );
}

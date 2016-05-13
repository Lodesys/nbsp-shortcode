<?php

// confirm uninstalling
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// ***  DELETE THIS  ***
wp_die(__("UNINSTALL NOT PROGRAMMED FOR THIS PLUGIN! DELETE THIS FILE OR ADD SOME CODE."));

// unwind things
if ( false != get_option( 'something' ) ) {
	delete_option( 'something' );
}

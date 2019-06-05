<?php

/*

@package Ewastetheme

	========================
		ADMIN ENQUEUE FUNCTIONS
	========================
*/

function Ewaste_load_admin_scripts( $hook ){
  if( 'toplevel_page_Joon_Ewaste' != $hook){
    return;
  }
  wp_register_style( 'Ewaste_admin', get_template_directory_uri() . '/assets/css/Ewaste.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'Ewaste_admin' );
}
add_action( 'admin_enqueue_scripts', 'Ewaste_load_admin_scripts');

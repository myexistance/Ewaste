<?php

/*

@package Ewastetheme

	========================
		ADMIN PAGE
	========================
*/

function Ewaste_add_admin_page() {
  // Generate admin Page
	add_menu_page( 'Ewaste Theme Options', 'Ewaste', 'manage_options', 'Joon_Ewaste', 'Ewaste_theme_create_page', 'dashicons-filter', 110 );

  //Generate admin sub pages
  add_submenu_page( 'Joon_Ewaste', 'Ewaste Theme Options', 'Theme Options', 'manage_options', 'Joon_Ewaste_theme', 'ewaste_theme_support_page');
  add_submenu_page('Joon_Ewaste', 'Ewaste Theme Options', 'Sidebar', 'manage_options', 'Joon_Ewaste', 'ewaste_theme_setting_page' );
  add_submenu_page( 'Joon_Ewaste', 'Ewaste Contact Form', 'Contact Form', 'manage_options', 'Joon_Ewaste_theme_contact', 'Ewaste_contact_form_page' );
  add_submenu_page( 'Joon_Ewaste', 'Ewaste CSS Options', 'Custom CSS', 'manage_options', 'Joon_Ewaste_css', 'ewaste_theme_setting_page');


  //Activate custom settings
  add_action( 'admin_init', 'Ewaste_custom_settings' );

}
add_action( 'admin_menu', 'Ewaste_add_admin_page' );

function Ewaste_custom_settings() {

  // side bar options
  register_setting( 'Ewaste-settings-group', 'first_name' );
  register_setting( 'Ewaste-settings-group', 'last_name' );
  add_settings_section( 'Ewaste-sidebar-options', 'Sidebar Option', 'Ewaste_sidebar_options', 'Joon_Ewaste');
  add_settings_field( 'sidebar-name', 'Full Name', 'Ewaste_sidebar_name', 'Joon_Ewaste', 'Ewaste-sidebar-options');

  //Theme options
  register_setting( 'Ewaste-theme-support', 'post_formats');
  register_setting( 'Ewaste-theme-support', 'custom_header');
  register_setting( 'Ewaste-theme-support', 'custom_background');


  add_settings_section('Ewaste_theme-options', 'Theme Options', 'Ewaste_theme_options', 'Joon_Ewaste_theme');

  add_settings_field( 'post-formats', 'POST FORMATS', 'Ewaste_post_formats', 'Joon_Ewaste_theme', 'Ewaste_theme-options');

  add_settings_field( 'custom_header', 'Custom Header', 'Ewaste_custom_header', 'Joon_Ewaste_theme', 'Ewaste_theme-options');
  add_settings_field( 'custom_background', 'Custom Background', 'Ewaste_custom_background', 'Joon_Ewaste_theme', 'Ewaste_theme-options');


  //Contact Form
  register_setting( 'Ewaste-contact-options', 'activate_contact' );

	add_settings_section( 'Ewaste-contact-section', 'Contact Form', 'Ewaste_contact_section', 'Joon_Ewaste_theme_contact');

	add_settings_field( 'activate-form', 'Activate Contact Form', 'Ewaste_activate_contact', 'Joon_Ewaste_theme_contact', 'Ewaste-contact-section' );




}



function Ewaste_theme_options(){
  echo 'Activate and Deactivate specific Theme Support Options';
}


function Ewaste_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
  $lastName = esc_attr( get_option( 'last_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" /> <input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name" />';
}

function Ewaste_post_formats(){
  $options = get_option( 'post_formats' );
  $formats = array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' );
  $output = '';
  foreach ($formats as $format){
    $checked = ( @$options[$format] == 1 ? 'checked' : '' );
    $output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.' /> '.$format.'</label><br>';

  }
  echo $output;
}

// CUstom Header Callback

function Ewaste_custom_header() {
	$options = get_option( 'custom_header' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" '.$checked.' /> Activate the Custom Header</label>';
}







function Ewaste_custom_background() {
	$options = get_option( 'custom_background' );
	$checked = ( @$options == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" '.$checked.' /> Activate the Custom Background</label>';
}

//Sidebar Options Functions
function Ewaste_sidebar_options() {
	echo 'Customize your Sidebar Information';
}
// Template submenu support page
function Ewaste_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/Ewaste-admin.php' );
}

function Ewaste_theme_support_page() {
	require_once( get_template_directory() . '/inc/templates/Ewaste-theme-support.php' );
}

function Ewaste_contact_form_page() {
	require_once( get_template_directory() . '/inc/templates/Ewaste-contact_form.php' );
}

function Ewaste_theme_setting_page() {
	echo '<h1>Sunset Custom CSS</h1>';
}

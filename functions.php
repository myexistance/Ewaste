<?php

require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';

function add_custom_files(){
    wp_enqueue_style('my_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap.css' , array(), '4.3.1');

    wp_enqueue_style('my_custom_stylesheet', get_template_directory_uri() . '/assets/css/Ewaste.css' , array(), '0.1');

    wp_enqueue_script('jquery');

    wp_enqueue_script('my_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.3.1', true);

    // wp_enqueue_script('show_more_posts', get_template_directory_uri() . '/assets/js/showMore.js', array('jquery'), '0.1', true);

    // global $wp_query;
    //
    // $currentPage = get_query_var('paged');
    // if($currentPage == 0){
    //     $currentPage = 1;
    // }

    // wp_localize_script('show_more_posts', 'load_more', array(
    //     'ajax_url' => site_url() . '/wp-admin/admin-ajax.php',
    //     'query' => json_encode($wp_query->query_vars),
    //     'max_page' => $wp_query->max_num_pages,
    //     'current_page' => $currentPage
    // ));

};
add_action('wp_enqueue_scripts', 'add_custom_files');

function register_my_menu() {
    register_nav_menu('header_menu','The menu which appears at the top of the page');
    register_nav_menu('footer_menu','The menu which appears at the bottom of the page');
}
add_action( 'init', 'register_my_menu' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';


// custom logo
add_theme_support( 'custom-logo' );
function Ewaste_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'Ewaste_custom_logo_setup' );








add_theme_support( 'custom-header' );

function Ewaste_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/img/E-Waste-Recycling.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 198,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin
        'uploads'       => false,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}
add_action( 'after_setup_theme', 'Ewaste_custom_header_setup' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'post-formats', array( 'link') );

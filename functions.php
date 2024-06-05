<?php

function add_scripts() {
    // Enqueue CSS files
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('slider-css', get_template_directory_uri() . '/css/tiny-slider.css');
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/css/style.css');
    
    // Enqueue JS files
    wp_enqueue_script('jquery');  // Ensure jQuery is enqueued
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script('tiny-slider-js', get_template_directory_uri() . '/js/tiny-slider.js');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js');
}
add_action('wp_enqueue_scripts', 'add_scripts');

// Register a new menu location
function register_my_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

function register_footer_menus() {
    register_nav_menus( array(
        'footer_menu_1' => __( 'Footer Menu 1', 'customtheme' ),
        'footer_menu_2' => __( 'Footer Menu 2', 'customtheme' ),
        'footer_menu_3' => __( 'Footer Menu 3', 'customtheme' ),
        'footer_menu_4' => __( 'Footer Menu 4', 'customtheme' ),
    ) );
}
add_action( 'init', 'register_footer_menus' );


add_action('after_setup_theme', 'enable_featured_images_for_posts');
function enable_featured_images_for_posts() {
    add_theme_support('post-thumbnails', array('post'));
}

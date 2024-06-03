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

// Ensure skip link is enqueued for accessibility
if (function_exists('wp_enqueue_block_template_skip_link')) {
    add_action('wp_enqueue_scripts', 'wp_enqueue_block_template_skip_link');
}

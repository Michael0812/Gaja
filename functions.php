<?php
function gajascripts() {
    wp_enqueue_style( 'default', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-min', get_template_directory_uri().'/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_style( 'variables-css', get_template_directory_uri().'/css/variables.less' );
    wp_enqueue_style( 'mainjs', get_template_directory_uri().'/js/main.js', array('jquery'),'1.0.0', true);
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css', '', '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}

function enqueue_custom_styles() {
    // Replace 'your-theme' with the actual name of your theme.
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
remove_filter('the_content', 'wpautop');

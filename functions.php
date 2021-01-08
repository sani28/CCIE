<?php 

//add css and js files
function gt_setup() {
    wp_nav_menu();
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), all);
    wp_enqueue_script( "main", get_theme_file_uri('/js/main.js'),  NULL, microtime(), true);
}

add_action( 'wp_enqueue_scripts', 'gt_setup');


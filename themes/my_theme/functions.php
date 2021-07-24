<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/style.min.css' );
    // wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/theme.min.js', ['jquery'], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 100 );


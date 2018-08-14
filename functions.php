<?php

// WordPress title tag support
add_theme_support ( 'title-tag' );

// Add scripts and styles to theme
function wp_scripts () {
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'blogStyle', get_template_directory_uri() . 'style.css' );
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/js/main.js' );
}

function wp_google_fonts () {
	wp_register_style('Poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto');
	wp_enqueue_style( 'Poppins');
}

add_action ( 'wp_enqueue_scripts', 'wp_scripts' );
add_action ( 'wp_print_styles', 'wp_google_fonts' );
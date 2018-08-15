<?php

// WordPress title tag support
add_theme_support ( 'title-tag' );

// Add scripts and styles to theme
function wp_styles_n_scripts () {
	wp_enqueue_style( 'bootstrapCSS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
	wp_enqueue_style( 'fontAwesomeCSS', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'styleCSS', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'slimJquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js' );
	wp_enqueue_script( 'PopperJS', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' );
	wp_enqueue_script( 'bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' );
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/assets/js/main.js' );
}
add_action ( 'wp_enqueue_scripts', 'wp_styles_n_scripts' );

// Add google fonts to theme
function wp_google_fonts () {
	wp_register_style('Poppins', 'https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto');
	wp_enqueue_style( 'Poppins');
}
add_action ( 'wp_print_styles', 'wp_google_fonts' );

// Function to register menu to theme
function reg_my_menu () {
	register_nav_menus (
		array( 'header-menu' => __( 'Header Menu' ), )
	);
}
add_action ( 'init', 'reg_my_menu' );

// Add classes to wp_menu ul li
function li_class ( $class, $items, $args ) {
	$class[] = 'nav-item';
	return $class;
}
add_filter ( 'nav_menu_css_class', 'li_class', 1,3 );

// Add classes to wp_menu li a
function li_a_class ( $class ) {
	$class['c'] = 'nav-link';
	return $class;
}
add_filter ( 'nav_menu_link_attributes', 'li_a_class' );

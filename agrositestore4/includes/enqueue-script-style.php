<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {
    wp_enqueue_style( 'estore-style', get_stylesheet_uri());
    wp_style_add_data( 'estore-style', 'rtl', 'replace' );
    wp_enqueue_style('main',get_stylesheet_directory_uri(). '/assets/css/style.min.css',false,null);
}

add_action( 'wp_enqueue_scripts', 'estore_styles' );
function estore_styles() {
    // delete jquery from WP
    wp_deregister_script('jquery');
    // add new version to WP
    // null - version (if empty - version WP), true - add to footer (false - add to header)
    wp_register_script('jquery',get_stylesheet_directory_uri(). '/assets/js/jquery-3.3.1.js', false,null,true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('myscript',get_stylesheet_directory_uri(). '/assets/js/scripts_v1.js', 'jquery', null, true);

	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20201215', true );
	
	wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20201215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

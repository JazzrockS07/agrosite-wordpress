<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'est_header_parts', 'estore_header_mobile', 10 );
function estore_header_mobile() {
    get_template_part( 'template-parts/header/header-mobile' );
}

add_action( 'est_header_parts', 'estore_header_nav_mobile', 20 );
function estore_header_nav_mobile() {
    get_template_part( 'template-parts/header/header-nav-mobile' );
}

add_action( 'est_header_parts', 'estore_header_text_mobile', 30 );
function estore_header_text_mobile() {
    get_template_part( 'template-parts/header/header-text-mobile' );
}

add_action( 'est_header_parts', 'estore_header_desktop', 40 );
function estore_header_desktop() {
    get_template_part( 'template-parts/header/header-desktop' );
}

add_action( 'est_header_parts', 'estore_header_nav_desktop', 50 );
function estore_header_nav_desktop() {
    get_template_part( 'template-parts/header/header-nav-desktop' );
}
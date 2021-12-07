<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'est_footer_parts', 'estore_footer_menu', 10 );
function estore_footer_menu() {
    get_template_part( 'template-parts/footer/footer-menu' );
}

add_action( 'est_footer_parts', 'estore_footer_copyrights', 20 );
function estore_footer_copyrights() {
    get_template_part( 'template-parts/footer/footer-copyrights' );
}

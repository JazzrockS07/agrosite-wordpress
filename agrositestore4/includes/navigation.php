<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/*
 * add menu to the themes
 */

register_nav_menus (array(
    'main_menu' => 'Main menu'
));


/*
 * function output menu for desktop
 */

function estore_primary_menu() {
    $primaryMenu = array(
        'theme_location'  => 'main_menu',
        'menu'            => '',
        'container'       => 'nav',
        'container_class' => 'main-menu',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => false,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => ''
    );
    echo strip_tags( wp_nav_menu( $primaryMenu ), '<nav><a>' );
    /* don't work? why? i don't understand
    wp_nav_menu( array(
        'theme_location' => 'main_menu',
        'container' => 'nav',
        'menu_class' => 'main-menu',
        'items_wrap' => '%3$s',
        'depth' => 0
    ) );
    */
}

/*
 * function output menu for mobile
 */

function estore_primary_menu2(){
    $primaryMenu = array(
        'theme_location'  => 'main_menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu2',
        'container_id'    => 'menu2',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => false,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'depth'           => 0,
        'walker'          => ''
    );
    echo strip_tags( wp_nav_menu( $primaryMenu ), '<div><a>' );
    /* don't work? why? i don't understand
    wp_nav_menu( array(
        'theme_location' => 'main_menu',
        'container' => 'nav',
        'menu_class' => 'main-menu',
        'items_wrap' => '%3$s',
        'depth' => 0
    ) );
    */
}
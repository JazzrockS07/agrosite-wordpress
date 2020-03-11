<?php

/*
 * add css, JS for theme
 */

//add_action('admin_enqueue_scripts','my_scripts');   - add css, JS for admin panel
add_action('wp_enqueue_scripts','my_scripts');

function my_scripts() {
    wp_enqueue_style('normalize',get_stylesheet_directory_uri(). '/style/normalize.css',false,null);
    wp_enqueue_style('main',get_stylesheet_directory_uri(). '/style/style.min.css',false,null);

    // delete jquery from WP
    wp_deregister_script('jquery');
    // add new version to WP
    // null - version (if empty - version WP), true - add to footer (false - add to header)
    wp_register_script('jquery',get_stylesheet_directory_uri(). '/js/jquery-3.3.1.js', false,null,true);
    wp_enqueue_script('jquery');

    wp_enqueue_script('myscript',get_stylesheet_directory_uri(). '/js/scripts_v1.js', 'jquery', null, true);
}


/*
 *  change for admin panel, change for css (for css better make this in css file)
 */

add_action ('wp_head','my_css');

function my_css() {
    ?>
    <style>
        .admin-bar #menu, .admin-bar #header.reveal {
            top:32px;
        }
    </style>
    <?php
}

register_nav_menus (array(
    'main_menu' => 'Main menu'
));
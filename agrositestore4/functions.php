<?php
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	load_template( get_template_directory() . '/includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
function estore_register_custom_fields() {
	require get_template_directory() . '/includes/custom-fields-options/metabox.php';
	require get_template_directory() . '/includes/custom-fields-options/theme-optons.php';
}
/*
 * Подключение настроек темы
 */
require get_template_directory() . '/includes/theme-settings.php';
/*
 * Подключение области виджетов
 */
require get_template_directory() . '/includes/widget-areas.php';
/*
 * Подключение скриптов и стилей
 */
require get_template_directory() . '/includes/enqueue-script-style.php';
/*
 * Вспомогательные функции
 */
require get_template_directory() . '/includes/helpers.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Navigation.
 */
require get_template_directory() . '/includes/navigation.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
}


/*
 *  add sessions
 */

add_action('init', 'start_session', 1);

function start_session() {
    if(!session_id()) {
        session_start();
    }
}

/*
 *
 */

add_action('wp_head','test');

function test() {
    if(is_product()) {
        $_SESSION['user']='old';
    }
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


/*
 *  remove sidebar from woocommerce loop page
 */

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );





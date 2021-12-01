<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="mini-menu">
    <div class="col1mini" onclick="$('#menu2').toggle('slow');"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/image/mini-menu.png"></div>
    <div class="col2mini">
        <img class="brand-logo-dark" src="<?php echo get_stylesheet_directory_uri() ?>/assets/image/logo-default-127x53.png" alt="logo-mini">
    </div>
    <div class="mmini-menu">
        <div class="mmenu" onclick="$('#menu3').toggle('slow');"></div>
    </div>
    <div class="searchmini"></div>
</div>

<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="menusearch-all">
    <div class="menusearch">
        <?php estore_primary_menu(); ?>
        <div class="my-cart">
            <?php estore_woocommerce_cart_link(); ?>
        </div>
    </div>
</div>
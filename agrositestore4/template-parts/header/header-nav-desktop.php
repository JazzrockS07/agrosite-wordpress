<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<div class="menusearch-all">
    <div class="menusearch">
        <?php estore_primary_menu(); ?>
        <div class="my-cart site-header-cart">
            <?php estore_woocommerce_cart_link(); ?>
			<div class="mini-card-content ">
                <?php the_widget('WC_Widget_Cart', 'title=');?>
			</div>
        </div>
    </div>
</div>
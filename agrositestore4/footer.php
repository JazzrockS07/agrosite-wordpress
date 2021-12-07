<footer>
    <?php
    /**
     * header_parts hook.
     *
     * @hooked estore_footer_menu - 10
     * @hooked estore_footer_copyrights - 20
     *
     */
    do_action('est_footer_parts');
    ?>

</footer>

<?php wp_footer() ?>
</body>
</html>


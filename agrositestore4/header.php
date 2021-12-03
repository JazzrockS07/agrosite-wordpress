<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>FixIt - repair tractor</title>
    <meta name="description" content="Agriculture machinery repair and maintenance">
    <meta name="keywords" content="repair,maintenance,agriculture,tractor,machinery,diagnostic,quality">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<header>
    <?php
    /**
     * header_parts hook.
     *
     * @hooked estore_header_mobile - 10
     * @hooked estore_header_nav_mobile - 20
     * @hooked estore_header_text_mobile - 30
     * @hooked estore_header_desktop - 40
     * @hooked estore_nav_desktop - 50
     *
     */
    do_action('header_parts');
    ?>

</header>
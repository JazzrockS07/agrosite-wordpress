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
    <div class="mini-menu">
        <div class="col1mini" onclick="$('#menu2').toggle('slow');"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/mini-menu.png"></div>
        <div class="col2mini">
            <img class="brand-logo-dark" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-default-127x53.png" alt="logo-mini">
        </div>
        <div class="mmini-menu">
            <div class="mmenu" onclick="$('#menu3').toggle('slow');"></div>
        </div>
        <div class="searchmini"></div>
    </div>
    <?php

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
    ?>
    <div>
        <div class="menu3" id="menu3">
            <div class="menu3-znak-adress">
                <div class="tochkamini">
                </div>
                <div class="menu3-adress">
                    <a href="#">
                        523 Sylvan Ave
                        <br>
                        Mountain View, CA 94041 USA
                    </a>
                </div>
            </div>
            <div class="menu3-znak-tel">
                <div class="telmini">
                </div>
                <div class="menu3-tel">
                    <a href="tel:+380505555555">
                        050-555-55-55
                    </a>
                </div>
            </div>
        </div>
        <div class="header-all">
            <div class="header">
                <div class="col1">
                    <div class="znak1">
                    </div>
                    <div class="adress">
                        <a href="#">
                            523 Sylvan Ave
                            <br>
                            Mountain View, CA 94041 USA
                        </a>
                    </div>
                </div>
                <div class="col2">
                    <img class="brand-logo-white" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-inverse-127x53.png" alt="logo">
                </div>
                <div class="col3">
                    <div class="tel">
                        <a href="skype:+380505555555">
                            050-555-55-55
                        </a>
                    </div>
                    <div class="tel-znak">
                    </div>
                </div>
            </div>
        </div>

        <div class="menusearch-all">
            <div class="menusearch">
                <?php

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
                ?>
                <div>
                    <a href="#" class="search1"></a>
                </div>
            </div>
        </div>

</header>
<!-- Main Header -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?> >

<!--Setup nav-->
<nav id="site-navigation" class="main-navigation" role="navigation">

<?php
    //One way to declair nav location
    //  wp_nav_menu( [
    //     'theme_location' => 'main-menu'
    // ] ); 

    //second way and more common
    $args = [
        'theme_location' => 'main-menu'
    ];
    wp_nav_menu($args);
?>
</nav>
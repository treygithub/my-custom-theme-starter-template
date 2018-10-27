<?php 
if( ! is_active_sidebar( 'main-sidebar' ) ) {
    return;
}
?>

<aside class="widget-area" id="secondary" role="complementary">

    <!-- <p>Place widgets here!</p> -->
    <?php dynamic_sidebar( 'main-sidebar' ); ?>

</aside>
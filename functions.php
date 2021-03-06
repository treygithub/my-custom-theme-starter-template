<?php
//Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] ); 
add_theme_support('html5');
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background');
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Load in our CSS
function wphierarchy_enqueue_styles(){
wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all');
}

add_action( 'wp_enqueue_scripts', 'wphierarchy_enqueue_styles');

//Register Menu Locations
register_nav_menus( [
    'main-menu' => esc_html__( 'Main Menu', 'wpheirarchy' )
    // 'footer-menu ' => esc_html__( 'Footer Menu', 'wpheirarchy'),
] );

//setup widget area
function wphierarchy_widgets_init(){
    $args = [
        'name'          => esc_html__( 'Main Sidebar', 'wphierarchy' ),
        'id'            => 'main-sidebar',
        'description'   => esc_html( 'Add widgets for main sidebar here', 'wphierarchy' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  =>  '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'before_title'  => '</h2>',
    ];
    register_sidebar($args);
}
add_action( 'widgets_init', 'wphierarchy_widgets_init' );

?>

?>
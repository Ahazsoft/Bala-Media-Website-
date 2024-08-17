<?php
function bauhaus_child_enqueue_styles() {
    $parent_style = 'parent-style'; // This is 'bauhaus' for the Parent theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/css/style.css', array( $parent_style ), wp_get_theme()->get('Version') );

    // Enqueue additional styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'ionicons', get_stylesheet_directory_uri() . '/css/ionicons.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'linearicons', get_stylesheet_directory_uri() . '/css/linearicons.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'magnific-popup', get_stylesheet_directory_uri() . '/css/magnific-popup.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'jquery-pagepiling', get_stylesheet_directory_uri() . '/css/jquery.pagepiling.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'owl-carousel', get_stylesheet_directory_uri() . '/css/owl.carousel.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'settings', get_stylesheet_directory_uri() . '/css/settings.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'layers', get_stylesheet_directory_uri() . '/css/layers.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'navigation', get_stylesheet_directory_uri() . '/css/navigation.css', array(), '1.0', 'all' );

    // Enqueue existing styles and scripts
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'dark-style', get_stylesheet_directory_uri() . '/css/dark.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'slick-carousel', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null, 'all' );
    wp_enqueue_style( 'slick-carousel-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), null, 'all' );

    // Enqueue scripts
    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'smoothscroll', get_stylesheet_directory_uri() . '/js/smoothscroll.js', array('jquery'), null, true );
    wp_enqueue_script( 'pagepiling', get_stylesheet_directory_uri() . '/js/jquery.pagepiling.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'magnific-popup', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'owl-carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'gmap', 'http://maps.google.com/maps/api/js?key=AIzaSyCwVuYiM-83l2IdjpT9uC0lg4jBm8-w4j8', array(), null, true );
    wp_enqueue_script( 'gmap-custom', get_stylesheet_directory_uri() . '/js/gmap.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick-carousel-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'balatheme_enqueue_styles' );
?>
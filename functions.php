<?php
    // This function registers navigation menu Locations that you can manage in the WP Admin
    function customtheme_theme_setup() {
        // This is a WordPress hook ... you cannot rename a WP Hook
        register_nav_menus( array(
            'header' => __( 'Header Menu', 'customtheme' ),
            'footer'  => __( 'Footer Menu', 'customtheme' ),
        ) );
    }
    // add_custom hooks our function into a specific WP event (theme setup)
    add_action('after_setup_theme', 'customtheme_theme_setup');
    // This enables the "Featured image" box on the post/page editor screen
    add_theme_support('post-thumbnails');
?>
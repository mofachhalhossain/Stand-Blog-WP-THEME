<?php

function sb_load_scripts(){
    wp_enqueue_style( 'stand_blog_style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style( 'stand_blog_flex-slider', get_template_directory_uri() . '/assets/css/flex-slider.css', array(), '1.0');
    wp_enqueue_style( 'stand_blog_fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '1.0');
    wp_enqueue_style( 'stand_blog_owl_carousel', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0');
    wp_enqueue_style( 'stand_blog_bootstrap_min', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_script( 'stand_blog_accordion', get_template_directory_uri() . '/assets/js/accordion.js', array(), '1.0', true);
    wp_enqueue_script( 'stand_blog_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'stand_blog_isotope', get_template_directory_uri() . '/assets/js/isotope.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'stand_blog_owl_carousel', get_template_directory_uri() . '/assets/js/owl.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'stand_blog_slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'stand_blog_bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'stand_blog_jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array( 'jquery' ), '1.0', true);
    wp_enqueue_script( 'stand_blog_script_js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'sb_load_scripts' );


function theme_setup(){

    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'blog_main_menu' => 'Main Menu',
            'blog_footer_menu' => 'Footer Menu',
        )
    );
}

add_action( 'after_setup_theme', 'theme_setup' );


function sidebar(){
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-widget',
            'description' => 'Sidebar Area',
            'before_widget' => '<div class="col-lg-12">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}

add_action( 'widgets_init', 'sidebar' );
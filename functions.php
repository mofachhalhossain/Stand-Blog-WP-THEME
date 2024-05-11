<?php

function stand_blog_load_scripts(){
    wp_enqueue_style( 'stand_blog_style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style( 'stand_blog_flex-slider', get_template_directory_uri() . '/assets/css/flex-slider.css', array(), '1.0');
    wp_enqueue_style( 'stand_blog_fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css', array(), '1.0');
    wp_enqueue_style( 'stand_blog_owl_carousel', get_template_directory_uri() . '/assets/css/owl.css', array(), '1.0');
    wp_enqueue_style( 'stand_blog_bootstrap_min', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0');


    wp_register_script( 'stand_blog_accordion', get_template_directory_uri() . '/assets/js/accordion.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_accordion' );

    wp_register_script( 'stand_blog_custom_js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_custom_js' );

    wp_register_script( 'stand_blog_isotope', get_template_directory_uri() . '/assets/js/isotope.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_isotope' );

    wp_register_script( 'stand_blog_owl_carousel', get_template_directory_uri() . '/assets/js/owl.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_owl_carousel' );

    wp_register_script( 'stand_blog_slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_slick' );

    wp_register_script( 'stand_blog_bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_bootstrap' );

    wp_register_script( 'stand_blog_jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array( 'jquery' ), 'NULL', false);
    wp_enqueue_script( 'stand_blog_jquery' );

    wp_register_script( 'stand_blog_script_js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), NULL, false );
    wp_enqueue_script( 'stand_blog_script_js' );


}

add_action( 'wp_enqueue_scripts', 'stand_blog_load_scripts' );


function theme_setup(){
    $custom_logo_defaults = array(
		'height'               => 300,
		'width'                => 300,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $custom_logo_defaults );
 
    add_theme_support( 'post-thumbnails' );

    register_nav_menus(
        array(
            'blog_main_menu' => 'Main Menu',
            'blog_footer_menu' => 'Footer Menu',
        )
    );
}

add_action( 'after_setup_theme', 'theme_setup' );


function sidebar() {
    register_sidebar(
        array(
            'name' => esc_html__('Blog Sidebar'),
            'id' => 'sidebar-blog',
            'description' => esc_html__('Your Blog Sidebar Here'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Footer Top'),
            'id' => 'top-footer',
            'description' => esc_html__('Footer Top'),
            'before_widget' => '<div class="footer-top-wrapper">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => esc_html__('Footer Bottom'),
            'id' => 'bottom-footer',
            'description' => esc_html__('Footer Bottom'),
            'before_widget' => '<div class="footer-bottom-wrapper">',
            'after_widget' => '</div>'
        )
    );
}

add_action( 'widgets_init', 'sidebar' );
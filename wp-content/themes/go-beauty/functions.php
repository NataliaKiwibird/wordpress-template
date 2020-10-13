<?php

// Load stylesheets
function load_css() 
{

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', 
    array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', 
    array(), false, 'all' );
    wp_enqueue_style('main');

    wp_register_style( 'main2', get_template_directory_uri() . '/css/main2.css', 
    array(), false, 'all' );
    wp_enqueue_style('main2');
    
}
add_action('wp_enqueue_scripts','load_css');


// Load JS
function load_js() 
{

    wp_enqueue_style('jquery');


    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 
    'jquery', false, true );

    wp_enqueue_style('bootstrap');
    
}
add_action('wp_enqueue_scripts','load_js');


// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(

    array(

        'my-menu' => 'My Menu Location',
        'mobile-menu' => 'Mobile Menu Location',

    )

);

// Custom Image Sizes
add_image_size('blog-main', 1400, 500, true);
add_image_size('blog-large', 1000, 300, true);
add_image_size('blog-small', 300, 200, true);
add_image_size('about', 300, 600, true);

// Register sidebars
function my_sidebars() 
{

    register_sidebar(
        array(

            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'

        )
        );

        register_sidebar(
            array(
    
                'name' => 'Blog Sidebar',
                'id' => 'blog-sidebar',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
    
            )
            );
    
}
add_action('widgets_init','my_sidebars');

// Custom post types:
function first_post_type() 
{

    $args = array(

            'labels' => array(
                    'name' => 'Custom Post Type',
                    'singular_name' => 'Custom Post Type'
            ),
            'hierarchical' => true,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-admin-post',
            'supports' => array('title', 'editor', 'thumbnail'),
            'rewrite' => array('slug' => 'first-custom'),

        );

        register_post_type('first-custom', $args);

    
}
add_action('init','first_post_type');

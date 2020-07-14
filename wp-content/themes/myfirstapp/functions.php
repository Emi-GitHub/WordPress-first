<?php

function load_scripts(){
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', 'all' );
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}

add_action('wp_enqueue_scripts', 'load_scripts');

function load_menus(){
    register_nav_menus(
        array(
            'main_menu' => 'Main Menu',
            'footer_menu' => 'Footer Menu', 
        )
    );
    $args = array(
        'height' => 225,
        'width' => 1920
     );
     add_theme_support('custom-header', $args);
     add_theme_support('post-thumbnails');
     add_theme_support( 'post-formats', array('video', 'image'));
     add_theme_support('custom-logo', array(
        'height' => 110,
        'width' => 200
    ));
}
add_action('after_setup_theme', 'load_menus', 0);

function load_sidebars() {
    register_sidebar(
        array(
            'name' => 'Home Page Sidebar',
            'id' => 'sidebar-1',
            'description' => 'This is the home page sidebar. you can add your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'sidebar-2',
            'description' => 'This is the blog sidebar. you can add your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service1',
            'id' => 'service-1',
            'description' => 'This is the service1. you can add your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service2',
            'id' => 'service-2',
            'description' => 'This is the service2. you can add your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Service3',
            'id' => 'service-3',
            'description' => 'This is the service3. you can add your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Social Media Icons',
            'id' => 'social-media',
            'description' => 'This is the social media icons. you can add your widget here.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}
add_action('widgets_init', 'load_sidebars');
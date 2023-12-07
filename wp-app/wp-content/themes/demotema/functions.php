<?php

function demotema_theme_handling()
{
    add_theme_support('post-thumbnails');
    add_image_size("medium", 1000, false);
}
add_action('after_setup_theme', 'demotema_theme_handling');

function add_custom_meta_tags()
{
    echo '<meta name="description" content="Your meta description goes here">';
    echo '<meta name="keywords" content="Your, Keywords, Go, Here">';
    echo '<meta name="author" content="Your Name">';
    // Add more meta tags as needed
}

add_action('wp_head', 'add_custom_meta_tags');

function demotema_styles()
{
    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('demotema-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css", array(), '4.6.3', 'all');
    wp_enqueue_style('demotema-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'demotema_styles');

function enqueue_custom_fonts()
{
    wp_enqueue_style('nova-square-font', 'https://fonts.googleapis.com/css2?family=Nova+Square&display=swap', array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_fonts');

function demotema_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );
}
add_action('widgets_init', 'demotema_widget_areas');

function enqueue_custom_scripts()
{
    // Enqueue custom script
    wp_enqueue_script(
        'custom-script',
        get_template_directory_uri() . '/assets/scripts.js', // Adjust the path as needed
        array(),
        '1.0',
        true
    );

    // Pass PHP variables to JavaScript
    wp_localize_script(
        'custom-script',
        'theme_vars',
        array(
            'hamburgerMenu' => '.hamburger-menu',
            'navMenu' => '.nav-menu'
        )
    );
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');



function demotema_menus()
{
    $locations = array(
        'primary' => 'Navbar second',
        'sidemenu' => 'Side menu',
        'sidomenu' => 'Side menu 2'

    );
    register_nav_menus($locations);
}
add_action('init', 'demotema_menus');



add_theme_support('admin-bar', array('callback' => '__return_false'));


?>

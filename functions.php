<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');
add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-lists',
    'gallery',
    'caption',
    'script',
    'style',
]);



// paths for styles and scripts
function blog_enqueue_scripts()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.min.css');
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_register_script('script', get_template_directory_uri() . '/assets/script.js', [], false, true);

    wp_enqueue_style('style');
    wp_enqueue_style('fontawesome');
    wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'blog_enqueue_scripts');

// register menu
function register_menu()
{
    register_nav_menus([
        'blog-header-menu' => esc_html__('Header Menu', 'blog'),
        'blog-footer-menu' => esc_html__('Footer Menu', 'blog'),
    ]);
}
add_action('init', 'register_menu');

// Register Custom Post Type Series
function create_series_cpt()
{

    $labels = [
        'name' => _x('Series', 'Post Type General Name', 'textdomain'),
        'singular_name' => _x('Serie', 'Post Type Singular Name', 'textdomain'),
        'menu_name' => _x('Series', 'Admin Menu text', 'textdomain'),
    ];
    $args = [
        'label' => __('Series', 'textdomain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'custom-fields'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'rewrite' => ['slug' => 'series'],
        'show_in_rest' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
    ];
    register_post_type('series', $args);
}
add_action('init', 'create_series_cpt', 0);


// Register Taxonomy Country
function create_series_tax()
{

    $labels = [
        'name'              => _x('serie', 'taxonomy general name', 'textdomain'),
        'singular_name'     => _x('serie', 'taxonomy singular name', 'textdomain'),
        'menu_name'         => __('New serie name', 'textdomain'),
    ];
    $args = [
        'labels' => $labels,
        'description' => __('街の色と建築物シリーズ', 'textdomain'),
        'hierarchical' => false,
        'public' => true,
        'publicly_queryable' => true,
        'rewrite' => ['slug' => 'serie', 'with_front' => 'true'],
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
    ];
    register_taxonomy('serie', ['series'], $args);
}
add_action('init', 'create_series_tax');

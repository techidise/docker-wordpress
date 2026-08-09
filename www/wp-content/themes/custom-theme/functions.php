<?php

function custom_theme_support()
{
    // Adds dynamic title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'custom_theme_support');

function custom_nav_menus()
{
    $locations = array(
        'primary' => 'Desktop Menu',
        'footer' => 'Footer Menu',
    );
    register_nav_menus($locations);
}
add_action('init', 'custom_nav_menus');

function custom_theme_assets()
{
    wp_enqueue_style( // Enqueue is the main stylesheet
        'custom-theme-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_stylesheet_directory() . './style.css')
    );

    wp_enqueue_style(
        'tailwindcss-output',
        get_stylesheet_directory_uri() . '/src/output.css',
        array(),
        filemtime(get_template_directory() . '/src/output.css')
    );
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');

function custom_script_assets()
{
    wp_enqueue_script(
        'main-js-file',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );

    wp_enqueue_script(
        'alpine-js',
        get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/alpinejs@3.15.12/dist/cdn.min.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'custom_script_assets');

// Alpine.js requires the 'defer' attribute to work properly
function add_defer_attribute($tag, $handle)
{
    if ('alpine-js' !== $handle) {
        return $tag;
    }
    return str_replace(' src', ' defer src', $tag);
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

function custom_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'desscription' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => '',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'desscription' => 'Footer Widget Area'
        )
    );
}
add_action('widgets_init', 'custom_widget_areas');

// Add block editor support
function developer_theme_block_support()
{
    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
}
add_action('after_setup_theme', 'developer_theme_block_support');


// function custom_widget_areas()
// {
//     register_nav_menu(
//         array(
//             'before_title' => '',
//             'after_title' => '',
//             'before_widget' => '',
//             'after_widget' => '',
//         ),
//         array(
//             'name' => 'Nav Area',
//             'id' => 'nav-1',
//             'description' => 'Nav Widget Area'
//         )
//     );
// }
// add_action('widgets_init', 'custom_widget_areas');

<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/**
 * This function is called when the theme is activated. This is where we
 * will add all of our scripts and styles.
 * @return void
 */
function theme_scripts_and_styles()
{
    // Load CSS Reset
    wp_enqueue_style(
        'css-reset',
        '//cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css',
        [],
        null
    );
    

    wp_enqueue_style(
        'bootstrap_css', 
        '//stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css');

    // Load in Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap',
        [],
        null
    );

    // Load in local CSS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_style/}
    wp_enqueue_style(
        'idm250-styles', // name of the stylesheet
        get_template_directory_uri() . '/dist/styles/main.css', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/styles/main.css
        [], // dependencies
        filemtime(get_template_directory() . '/dist/styles/main.css'), // version number
        'all' // media
    );

    // Load in local JS {@link https://developer.wordpress.org/reference/functions/wp_enqueue_script/}
    wp_enqueue_script(
        'tailwind', // name of the script
        'https://cdn.tailwindcss.com',
        [], // dependencies
        null, // version number
        false // load in footer
    );
    wp_enqueue_script(
        'idm250-scripts', // name of the script
        get_template_directory_uri() . '/dist/scripts/main.js', // http://localhost:250/wp-content/themes/idm250-theme-02/dist/scripts/main.js
        [], // dependencies
        filemtime(get_template_directory() . '/dist/scripts/main.js'), // version number
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_scripts_and_styles');

add_theme_support('post-thumbnails');

add_post_type_support('page', 'excerpt');

function register_theme_menus(){

    register_nav_menus([
        'primary-menu' => 'Primary Menu',
        'footer-menu' => 'Footer Menu'

    ]);

}

function get_theme_menu($menu_name)
{
    // Get menu items as a flat array
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id, ['order' => 'DESC']);
    return $menu_items;
}

add_action('init', 'register_theme_menus');
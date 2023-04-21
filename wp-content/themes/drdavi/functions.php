<?php

// Função para registrar os Scripts
function moving_scripts()
{
    wp_register_script('simple-slide', get_template_directory_uri() . '/js/simple-slide.js', [], 1.1, true);
    wp_register_script('simple-anime', get_template_directory_uri() . '/js/simple-anime.js', [], 1.1, true);
    wp_register_script('simple-form', get_template_directory_uri() . '/js/simple-form.js', [], 1.1, true);
    wp_register_script('script', get_template_directory_uri() . '/js/script.js', ['simple-slide','simple-anime','simple-form'], false, false);

    wp_enqueue_script('script');
}


function register_css(){
    wp_register_style('register-style', get_stylesheet_uri());
    wp_enqueue_style('register-style');
}

add_action('wp_enqueue_scripts', 'register_css');
add_action('wp_enqueue_scripts', 'moving_scripts');


// Funçoes para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'food_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menu
add_theme_support('menus');

// Registrar Menu
function register_my_menu()
{
    register_nav_menu('menu-principal', __('Menu Principal'));
}
add_action('init', 'register_my_menu');

<?php

add_action('wp_enqueue_scripts', 'register_code');

function register_code()
{
    // Enqueue Stylesheets
    wp_register_style('register-style', get_stylesheet_uri());
    wp_enqueue_style('register-style');


    // Enqueue my scripts.
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);

    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), null, true);

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), null, true);

    wp_enqueue_script('jquery-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), null, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), null, true);

    wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);

    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), null, true);
}


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
    register_nav_menus(array(
        'menu_principal' => __('Menu Principal'),
        'informacao'  => __('Informação'),
        'suporte'  => __('Suporte')
    ));
}
add_action('init', 'register_my_menu');

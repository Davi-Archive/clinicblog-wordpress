<?php

add_action('wp_enqueue_scripts', 'register_code');

function register_code()
{
    // Enqueue Stylesheets
    wp_register_style('register-style', get_stylesheet_uri());
    wp_enqueue_style('register-style');


    // Enqueue my scripts.
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), null, true);

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);

    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), null, true);


    wp_enqueue_script('jquery-magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), null, true);


    wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true);

    wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), null, true);

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap', 'isotope', 'jquery-magnific', 'owl', 'swiper'), null, true);
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

// Length of the Excerpt
function wpdocs_custom_excerpt_length($length)
{
    return 10;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);



// Post Types Below

function custom_post_type_tratamento()
{
    register_post_type('tratamentos', array(
        'label' => 'Tratamentos',
        'description' => 'Tratamentos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'tratamentos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),
        'labels' => array(
            'name' => 'Tratamentos',
            'singular_name' => 'Tratamentos',
            'menu_name' => 'Tratamentos',
            'add_new' => 'Adicionar Novo Tratamento',
            'add_new_item' => 'Adicionar Novo Tratamento',
            'edit' => 'Editar',
            'edit_item' => 'Editar Tratamento',
            'new_item' => 'Novo Tratamento',
            'view' => 'Ver Tratamento',
            'view_item' => 'Ver Tratamento',
            'search_items' => 'Procurar Tratamento',
            'not_found' => 'Nenhum Tratamento Encontrado',
            'not_found_in_trash' => 'Nenhum Tratamento Encontrado no Lixo'
        )
    ));
}
add_action('init', 'custom_post_type_tratamento');

function custom_post_type_banners()
{
    register_post_type('banners', array(
        'label' => 'Banners',
        'description' => 'Banners',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'banners', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),
        'labels' => array(
            'name' => 'Banners',
            'singular_name' => 'Banners',
            'menu_name' => 'Banners',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Banner',
            'edit' => 'Editar',
            'edit_item' => 'Editar Banner',
            'new_item' => 'Novo Banner',
            'view' => 'Ver Banner',
            'view_item' => 'Ver Banner',
            'search_items' => 'Procurar Banner',
            'not_found' => 'Nenhum Banner Encontrado',
            'not_found_in_trash' => 'Nenhum Banner Encontrado no Lixo'
        )
    ));
}
add_action('init', 'custom_post_type_banners');


function custom_post_type_servicos()
{
    register_post_type('servicos', array(
        'label' => 'Servicos',
        'description' => 'Servicos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'servicos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),
        'labels' => array(
            'name' => 'Serviços',
            'singular_name' => 'Serviços',
            'menu_name' => 'Servicos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Serviço',
            'edit' => 'Editar',
            'edit_item' => 'Editar Serviço',
            'new_item' => 'Novo Serviço',
            'view' => 'Ver Serviço',
            'view_item' => 'Ver Serviço',
            'search_items' => 'Procurar Serviço',
            'not_found' => 'Nenhum Serviço Encontrado',
            'not_found_in_trash' => 'Nenhum Serviço Encontrado no Lixo'
        )
    ));
}
add_action('init', 'custom_post_type_servicos');

function custom_post_type_depoimentos()
{
    register_post_type('depoimentos', array(
        'label' => 'Depoimentos',
        'description' => 'Depoimentos',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'depoimentos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'editor', 'page-attributes', 'post-formats'),
        'labels' => array(
            'name' => 'Depoimentos',
            'singular_name' => 'Depoimentos',
            'menu_name' => 'Depoimentos',
            'add_new' => 'Adicionar Novo',
            'add_new_item' => 'Adicionar Novo Depoimento',
            'edit' => 'Editar',
            'edit_item' => 'Editar Depoimento',
            'new_item' => 'Novo Depoimento',
            'view' => 'Ver Depoimento',
            'view_item' => 'Ver Depoimento',
            'search_items' => 'Procurar Depoimento',
            'not_found' => 'Nenhum Depoimento Encontrado',
            'not_found_in_trash' => 'Nenhum Depoimento Encontrado no Lixo'
        )
    ));
}
add_action('init', 'custom_post_type_depoimentos');

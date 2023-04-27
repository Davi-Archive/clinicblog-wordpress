<?php $contact = get_page_by_title('contato') ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php bloginfo('name'); ?> - <?php wp_title('-') ?> <?php the_field('title_seo') ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?> <?php wp_title('-') ?> <?php the_field('description_seo') ?>">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title('-') ?> <?php the_field('title_seo') ?>" />
    <meta property="og:description" content="<?php bloginfo('name'); ?><?php wp_title('-') ?> <?php the_field('description_seo') ?>" />
    <meta property="og:url" content="<?php bloginfo('url') ?>" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/banner.webp" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/img/favicon.png">


    <!-- Inicio Wordpress Head-->
    <?php wp_head(); ?>
    <!-- Fim Wordpress Head-->
</head>

<body>
    <div class="smart-page-loader" style="display: none;">
        <div class="wp-smart-loader smart-loader-two">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <header class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="head-right">
                        <div class="head-img1">
                            <img src="<?php echo get_template_directory_uri() ?>/img/c-1.png" alt="">
                        </div>
                        <span>
                            <?php the_field('endereco', $contact) ?></span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="head-left">
                        <a href="<?php the_field('url_contato',$contact) ?>" class="float" target="_blank">
                            <div class="head-img">
                                <img src="<?php echo get_template_directory_uri() ?>/img/c-2.png" alt="">
                            </div>
                            <span><?php the_field('telefone', $contact) ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/" aria-label="Home Link"><img src="<?php echo get_template_directory_uri() ?>/img/logo.webp" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="modal" data-target="#myModal1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                        $args = array(
                            'menu' => 'principal',
                            'theme_location' => 'menu_principal',
                            'container' => false
                        );
                        wp_nav_menu($args);
                        ?>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
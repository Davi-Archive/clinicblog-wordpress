<?php $contact = get_page_by_title('contato') ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php the_title() ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/img/favicon.png">

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
                        <div class="head-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/c-2.png" alt="">
                        </div>
                        <span><?php the_field('telefone', $contact) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="/" aria-label="Home Link"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt=""></a>
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
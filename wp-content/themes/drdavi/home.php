<?php
get_header();
$contact = get_page_by_title('contato');
?>


<?php include(TEMPLATEPATH . '/inc/banner-top.php') ?>

<section class="department-dentistry pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="department-content">
                    <h4>Posts</h4>
                    <div class="posts-container" >
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                                <article class="grid-16 blog-post">
                                    <h2><a href="<?php the_permalink(); ?>"></a></h2>

                                </article>

                                <div class="card card-blog-post">
                                    <div class="card-body" style="position: relative;">
                                        <h5 class="card-title"><?php the_title() ?></h5>
                                        <h6 class="card-subtitle text-muted"><?php the_field('subtitulo') ?></h6>
                                        <p class="card-text">
                                            <?php the_excerpt(); ?>
                                        </p>

                                        <a class="readme-blog-link" href="<?php the_permalink(); ?>" class="card-link">Leia Mais</a>
                                    </div>
                                </div>

                            <?php endwhile; ?>

                            <div class="nav-blog grid-16">
                                <?php next_posts_link('← Posts Antigos'); ?>
                                <?php previous_posts_link('Posts Novos →'); ?>
                            </div>

                        <?php else : endif; ?>

                    </div>
                    <div class="general-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/d-det.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="recent-service pt-40">
                    <div class="service-dental">
                    </div>
                    <h2>Tem alguma questão?
                        <span>converse com o doutor agora por whats app!</span>
                    </h2>
                    <a href="<?php the_field('url_contato', $contact) ?>" class="float" target="_blank">
                        <span class="phone-service"><?php the_field('telefone', $contact) ?></span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="service-dental-details pt-60">
    <div class="container">
        <h5>Serviços</h5>
        <h2>Mais Serviços Odontológicos</h2>
        <div class="row pt-30">
            <div class="col-md-12 pb-30">
                <div class="service-detail-slider">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="demoslide1">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1513px, 0px, 0px); transition: all 0.25s ease 0s; width: 4540px;">

                                <?php
                                $args = array(
                                    'post_type' => 'servicos',
                                    'order' => 'ASC'
                                );
                                $the_query = new WP_Query($args);

                                ?>

                                <?php
                                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


                                        <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                            <div class="item">
                                                <div class="service-general">
                                                    <div class="service-img">
                                                        <img src="<?php the_field('imagem_especialidade') ?>" alt="<?php echo 'Imagem sobre' ?> <?php the_title() ?> ">
                                                    </div>
                                                    <div class="dental-text">
                                                        <h4><?php the_title() ?></h4>
                                                        <p>
                                                            <?php the_excerpt() ?>
                                                        </p>
                                                        <a class="service-btn tratamento-btn" href="<?= the_permalink() ?>"><b>Leia Mais</b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <?php endwhile;
                                else : endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="horizontal">

<?php ?>

<?php get_footer(); ?>
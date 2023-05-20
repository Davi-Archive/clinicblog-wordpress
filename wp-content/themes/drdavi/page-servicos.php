<?php
// Template Name: Servicos
$page_servicos = get_page_by_title('servicos');
get_header();
?>

<section class="lab-services pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="dental-service">
                    <h5>Serviços</h5>
                    <h2>Serviços odontológicos</h2>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="service-implant">
                    <p>Aqui vai uma lista dos serviços mais comuns na área odontológica. É possível devolver uma melhor qualidade de sorriso para você independente de como o está seu sorriso no momento atual, esses são os procedimentos mais comuns.</p>
                </div>
            </div>
        </div>
        <div class="row pt-60">

            <?php
            $args = array(
                'post_type' => 'servicos',
                'order' => 'ASC'
            );
            $the_query = new WP_Query($args);

            $articleNumber = 0;
            ?>

            <?php
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


                    <div class="col-sm-4">
                        <div class="service-general">
                            <div class="service-img">
                                <img src="<?php the_field('imagem_especialidade') ?>" alt="<?php echo 'Imagem sobre' ?> <?php the_title() ?> ">
                            </div>
                            <div class="dental-text">
                                <h4><?php the_title() ?></h4>
                                <p><?php the_excerpt() ?>
                                </p>
                                <a class="service-btn" href="<?php the_permalink() ?>"><b>Leia Mais </b><img class="image-read-more" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                            </div>
                        </div>
                    </div>

            <?php endwhile;
            else : endif; ?>

        </div>
    </div>
</section>

<?php
if (get_field('ativar_depoimentos', $page_servicos)) {
    include(TEMPLATEPATH . '/inc/servicos/depoimentos.php');
}
?>

<hr class="horizontal">

<?php ?>

<?php get_footer(); ?>
<?php
// Template Name: Sobre
get_header();
?>

<section class="who-are-we pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="we-text">
                    <h2>Quem sou eu?</h2>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="who-are-text">
                    <p><?php the_field('texto_sobre') ?></p>
                </div>
            </div>
        </div>
        <div class="row pt-50">
            <div class="col-sm-6">
                <div class="dedicated-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/about-last.webp" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="best-treatment">
                    <h4><?php the_field('subtitulo1') ?></h4>
                    <p>
                        <?php the_field('texto_subtitulo1') ?>
                    </p>
                </div>
                <div class="best-treatment">
                    <h4><?php the_field('subtitulo2') ?></h4>
                    <p>
                        <?php the_field('texto_subtitulo2') ?>
                    </p>
                </div>
                <div class="best-treatment">
                    <h4><?php the_field('subtitulo3') ?></h4>
                    <p>
                        <?php the_field('texto_subtitulo3') ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php ?>

<?php get_footer(); ?>
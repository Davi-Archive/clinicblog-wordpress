<?php
// Template Name: Contato
get_header();
?>

<?php include(TEMPLATEPATH . '/inc/banner-top.php') ?>

<section class="dental-contact pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="dental-service">
                    <h5>Mande Mensagem</h5>
                    <h2>Estamos no Whats App</h2>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="service-implant">
                    <p><?php the_field('texto_contato') ?></p>
                </div>
            </div>
        </div>
        <div class="row pt-60">
            <div class="col-sm-5">
                <div class="contact-us">
                    <div class="contact-content">
                        <div class="contact-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/c-1.png" alt="Endereço">
                        </div>
                        <div class="contact-text">
                            <h5>ENDEREÇO</h5>
                            <p>
                                <?php the_field('endereco') ?>
                            </p>
                        </div>
                    </div>
                    <div class="contact-content">
                        <div class="contact-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/c-2.png" alt="Telefone">
                        </div>
                        <div class="contact-text">
                            <h5>WHATS APP</h5>
                            <a href="<?php the_field('url_contato') ?>" class="float" target="_blank">
                                <p><?php the_field('telefone') ?>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="contact-content">
                        <div class="contact-img">
                            <img src="<?= get_template_directory_uri() ?>/img/c-3.png" alt="Email">
                        </div>
                        <div class="contact-text">
                            <h5>EMAIL</h5>
                            <p>
                                <?php the_field('email') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="contact-form" style="overflow: hidden;">
                    <div id="resultmm">
                        <span class="seccess" style="display: none;">Email Enviado. Obrigado, respondo assim que possível.</span>
                        <span class="error" style="display: none;">Email não foi enviado.</span>
                    </div>
                    <div class="map">
                        <a href="https://www.google.com/maps/@-23.6880024,-46.5749769,11z" target="_blank">
                            <img src=" <?= get_template_directory_uri() ?>/img/mapa.webp" alt="Mapa do Grande ABCD" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<hr class="horizontal">

<?php get_footer(); ?>
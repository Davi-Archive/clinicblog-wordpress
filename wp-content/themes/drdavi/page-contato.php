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
                            <p><?php the_field('telefone') ?>
                            </p>
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
                <div class="contact-form">
                    <div id="resultmm">
                        <span class="seccess" style="display: none;">Email Enviado. Obrigado, respondo assim que possível.</span>
                        <span class="error" style="display: none;">Email não foi enviado.</span>
                    </div>
                    <form id="my-form" action="https://products.webrockmedia.com/dentallab-html/contact.php" method="post" class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Coloque seu nome" name="first_name" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" placeholder="Coloque seu Email" name="email" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" maxlength="10" placeholder="Coloque seu celular" name="phone" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Titulo da mensagem" name="subject" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea placeholder="Mensagem..." required="" name="message" class="form-control form-com-message"></textarea>
                        </div>
                        <div class="view-one col-md-12">
                            <button type="submit" name="submit" class="animation-cer-btn" id="my-form-button">
                                Enviar Mensagem <span class="line2"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="map">
   <img src="<?= get_template_directory_uri() ?>/img/mapa.webp" alt="Mapa do Grande ABCD" />
</section>

<hr class="horizontal">

<?php get_footer(); ?>
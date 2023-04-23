<?php
// Template Name: Article
get_header();

$contact = get_page_by_title('contato');
?>

<?php include(TEMPLATEPATH . '/inc/banner-top.php') ?>

<section class="department-dentistry pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="department-content">
                    <h4>Artigos</h4>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                    <div class="general-img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/d-det.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="recent-service pt-40">
                    <div class="service-dental">
                        <img src="<?= get_template_directory_uri() ?>/img/call.png" alt="">
                    </div>
                    <h2>Tem alguma questão?
                        <span>converse com o doutor agora por whats app!</span>
                    </h2>
                    <span class="phone-service"><?php the_field('telefone', $contact) ?></span>
                </div>
                <div class="book-appointment">
                    <div class="light-sky">
                        <div class="cont-add black-t mb-30">
                            <h3>Envie uma mensagem</h3>
                        </div>
                        <div class="form-send">
                            <form id="my-form" action="https://formspree.io/f/xayvnadd" method="POST">
                                <div class="form-group">
                                    <input type="text" placeholder="Nome" name="name" class="form-control form-com">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Email" name="email" class="form-control form-com">
                                </div>
                                <div class="form-group">
                                    <input type="email" placeholder="Assunto" name="title" class="form-control form-com">
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="Mensagem" name="message" class="form-control form-com-message "></textarea>
                                </div>
                                <div class="view-one">
                                    <button class="btn upcase" id="my-form-button">
                                        Enviar Mensagem
                                    </button>
                                    <p id="my-form-status"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-dental-details pt-60">
    <div class="container">
        <h5>Services</h5>
        <h2>More Dental Lab Services</h2>
        <div class="row pt-30">
            <div class="col-md-12 pb-30">
                <div class="service-detail-slider">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="demoslide1">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1513px, 0px, 0px); transition: all 0.25s ease 0s; width: 4540px;">
                                <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-4.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Alignment</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-5.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Teeth Braces</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-6.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Teeth Protection</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-1.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Genera Dentistry</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-2.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Implants</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-3.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Dental Surgery</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-4.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Alignment</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-5.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Teeth Braces</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-6.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Teeth Protection</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-1.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Genera Dentistry</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-2.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Implants</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                    <div class="item">
                                        <div class="service-general">
                                            <div class="service-img">
                                                <img src="<?= get_template_directory_uri() ?>/img/sl-3.png" alt="">
                                            </div>
                                            <div class="dental-text">
                                                <h4> Dental Surgery</h4>
                                                <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout
                                                </p>
                                                <a class="service-btn tratamento-btn" href="https://products.webrockmedia.com/dentallab-html/service-details.html"><b>Read More </b><img class="image-read-more tratamento-btn" width="32" height="32" src="<?= get_template_directory_uri() ?>/img/icons/plus.svg" alt="Acessar" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="horizontal">

<?php ?>

<?php get_footer(); ?>
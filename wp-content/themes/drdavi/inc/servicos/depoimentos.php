<section class="services-testimonials pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="dent-service">
                    <h5>Depoimentos</h5>
                    <h2>Cometários por pacientes</h2>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="service-implant1">
                    <p>Alguns comentários feito por pacientes, que melhoraram de vida, sem longas e incansáveis consultas com vários dentistas, com meu diagnóstico tiveram o tratamento correto.</p>
                </div>
            </div>
        </div>
        <div class="row pt-60">
            <div class="col-md-12">
                <div class="testimonial-dental-slider">
                    <div class="owl-carousel owl-theme owl-loaded owl-drag" id="demoslide2">



                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-1134px, 0px, 0px); transition: all 0.25s ease 0s; width: 3405px;">

                                <?php
                                $args = array(
                                    'post_type' => 'depoimentos',
                                    'order' => 'ASC'
                                );
                                $the_query = new WP_Query($args);

                                $articleNumber = 0;
                                ?>

                                <?php
                                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


                                        <div class="owl-item cloned" style="width: 353.333px; margin-right: 25px;">
                                            <div class="item">
                                                <div class="testimonial-user">
                                                    <div class="testimonials-bgcolor">
                                                        <p><?php the_content() ?></p>
                                                        <div class="user-img">
                                                            <img src="<?= get_template_directory_uri() ?>/img/rating.png" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-feedback">
                                                        <div class="feedback-img">
                                                            <img src="<?php the_field('imagem_depoimento') ?>" alt="">
                                                        </div>
                                                        <div class="user-text">
                                                            <h6><?php the_title() ?></h6>
                                                            <p><?php the_field('profissao') ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                <?php endwhile;
                                else : endif; ?>


                            </div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
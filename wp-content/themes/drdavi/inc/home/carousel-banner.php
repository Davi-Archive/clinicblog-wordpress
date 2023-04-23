<section class="minsection">
    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-pointer-events">
        <div class="swiper-wrapper" id="swiper-wrapper-810100723d3d463d25" aria-live="polite">

            <?php
            $args = array(
                'post_type' => 'banners',
                'order' => 'ASC'
            );
            $the_query = new WP_Query($args);

            $articleNumber = 0;
            ?>

            <?php
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


                    <div class="slider-img-banner1 swiper-slide cover-background swiper-slide-visible swiper-slide-active" role="group">
                        <div class="po-ab-se">
                            <div class="container">
                                <div class="content-slider">
                                    <h5><?php the_field('titulo_banner') ?></h5>
                                    <h1><?php the_field('subtitulo_banner') ?></h1>
                                    <a href="<?php the_permalink() ?>" class="btnn">
                                        Ver Mais <i class="lni lni-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php endwhile;
            else : endif; ?>

        </div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-810100723d3d463d25" aria-disabled="false"></div>
    <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-810100723d3d463d25" aria-disabled="true"></div>
</section>
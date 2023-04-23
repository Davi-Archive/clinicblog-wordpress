<section class="home-about-us pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-background">
                    <h2><?php
                        // Correct the no accent because db value
                        if (strval(get_the_title()) === 'Servicos') {
                            echo 'Serviços';
                        } else {
                            echo the_title();
                        }
                        ?></h2>
                    <p>
                        <?php the_field('subtitulo');  ?>
                    </p>
                    <a class="home-icon" href="/"><img src="<?php echo get_template_directory_uri() ?>/img/home-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-about-us pt-90 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-background">
                    <h2><?php
                        // Correct the no accent because db value
                        if (strval(get_the_title()) === 'Servicos' && !get_page_by_title('blog')) {
                            echo 'Serviços';
                        }
                        if (get_page_by_title('blog')) {
                            echo 'Blog';
                        } else {
                            echo the_title();
                        }
                        ?></h2>
                    <p>
                        <?php
                        if (get_page_by_title('blog')) {
                            echo 'Postagens do blog';
                        } else {
                            the_field('subtitulo');
                        }
                        ?>
                    </p>
                    <a class="home-icon" href="/"><img src="<?php echo get_template_directory_uri() ?>/img/home-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
// Template Name: Home
get_header();
?>

<?php include(TEMPLATEPATH . '/inc/carousel-banner.php') ?>




<section class="about-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="about-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/about.png" alt="">
        </div>
      </div>
      <div class="col-sm-6">
        <div class="about-text">
          <div class="text-img">
            <img src="<?php echo get_template_directory_uri() ?>/img/heading.png" alt="">
            <h6>SOBRE</h6>
          </div>
          <h2>Sei a importância do sorriso e quero ver você com seu melhor sorriso.</h2>
          <p>
            O sorriso é uma das expressões mais belas que podemos ter. É a forma mais simples e sincera de demonstrar amor, carinho e felicidade. Ele é o nosso cartão de visitas, a primeira coisa que as pessoas veem quando nos conhecem. Além disso, ele é contagioso, ou seja, quando sorrimos para alguém, é muito provável que essa pessoa também sorria de volta.
            <br>
            <br>
            Não importa qual seja sua origem, seu gênero, sua idade ou seu status social, o sorriso é universal, é a linguagem que todos entendemos. Ele pode ser o início de uma amizade, a prova de um amor verdadeiro. O sorriso é a expressão da alma feliz. Por isso, devemos valorizar e cuidar do nosso sorriso. Cuidar da saúde bucal, manter os dentes limpos e saudáveis, ir ao dentista regularmente. Mas acima de tudo, cultivar a alegria em nosso coração, buscar motivos para sorrir todos os dias. 
          </p>
          <a class="started" href="https://products.webrockmedia.com/dentallab-html/index.html#">Mandar uma mensagem ao Doutor</a>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="home-service pt-90 pb-90">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="our-service">
          <h5>PROCEDIMENTOS</h5>
          <h2> Saiba mais como melhorar seu sorriso</h2>
          <p> Nosso sorriso é a parte mais importante, é nosso cartão de visita
            <br>
            e para melhorar ele existem alguns procedimentos, clique neles para saber mais!
          </p>
        </div>
      </div>
    </div>
    <div class="row pt-30">
      <div class="col-md-12">
        <div class="service-slider">
          <div class="owl-carousel owl-theme owl-loaded owl-drag" id="demoslide4">

            <div class="owl-stage-outer">
              <div class="owl-stage" style="transform: translate3d(-1135px, 0px, 0px); transition: all 0.25s ease 0s; width: 3405px;">


                <?php
                $args = array(
                  'post_type' => 'tratamentos',
                  'order' => 'ASC'
                );
                $the_query = new WP_Query($args);

                $articleNumber = 0;
                ?>

                <?php
                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <?php
                    $articleNumber = $articleNumber + 1;
                    ?>
                    <div class="owl-item cloned" style="width: 258.75px; margin-right: 25px; height: 340px">
                      <div class="item">
                        <div class="testing">
                          <div class="testing-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/icon-3.png" alt="">
                          </div>
                          <div class="testing-number">
                            <span><?php
                                  if ($articleNumber < 10) {
                                    $padded_num = str_pad($articleNumber, 2, '0', STR_PAD_LEFT);
                                  } else {
                                    $padded_num = $num;
                                  }
                                  echo $padded_num;
                                  ?></span>
                          </div>
                          <div class="testing-text">
                            <h4><?php the_title() ?></h4>
                            <p>
                              <?php the_excerpt(10) ?>
                            </p>
                            <a href="<?php the_permalink() ?>">Leia Mais...</a>
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


<section class="choose-us">
  <div class="row">
    <div class="col-sm-6 pt-90">
      <div class="why-choose">
        <div class="why-choose-text">
          <h4>PORQUE ESCOLHER</h4>
          <h2>Doutor formado na USP que se preocupa com você
            e vai trazer o melhor sorriso possível</h2>
        </div>
        <p>O Doutor Davi é especialista formado pela USP e vai se compromenter a trazer o sorriso melhor e mais bonito especialmente para você.</p>
        <ul class="why-choose-list">
          <li><span>01</span>
            <h5>ESCOLHA CERTO</h5>
            <p>Doutor especialista na maior faculdade das américas e do mundo a <a style="color:yellow;" href="https://site.fo.usp.br/noticias/odontologia-da-usp-em-primeiro-lugar-no-edurank/">Universidade de São Paulo</a>, tenha o tratamento mais moderno.</p>
          </li>
          <li><span>02</span>
            <h5>TRATAMENTO PERSONALIZADO</h5>
            <p>O tratamento é feito exclusivamente para você e o doutor adora responder questões sobre o tratamento!</p>
          </li>
          <li><span>03</span>
            <h5>MELHORES TECNOLOGIAS</h5>
            <p>O doutor só trabalha com as melhores técnicas, reconhecidas mundialmente.</p>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6 us-img">
      <div class="why-chose-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/whay.png" alt="">
      </div>
    </div>
  </div>
</section>


<section class="book-your-visit">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <div class="emergency">
          <h2>Deseja contatar o doutor?<br>
            Use o formulário</h2>
          <p>Tentarei contatar o mais rápido possível, também recomendo o whats app.</p>
        </div>
      </div>
      <div class="col-sm-7">
        <div class="book-your">
          <div class="post-comment mart-0-cont">
            <div class="comment-re post-com">
              <form id="my-form" action="https://formspree.io/f/mlezgrkw" method="POST" class="row">
                <div class="form-group col-md-6">
                  <input type="text" placeholder="Nome" name="Name" class="form-control form-com">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" placeholder="Email" name="Email" class="form-control form-com">
                </div>
                <div class="form-group col-md-6">
                  <input type="number" placeholder="Celular" name="Mobile" class="form-control form-com">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" placeholder="Assunto" name="Subject" class="form-control form-com">
                </div>
                <div class="view-all col-md-12">
                  <button class="animation-cer-btn" id="my-form-button">
                    Enviar uma mensagem
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

<?php ?>

<?php get_footer(); ?>
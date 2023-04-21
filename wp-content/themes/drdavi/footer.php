   <?php $contact = get_page_by_title('contato') ?>

   <footer class="footer-section pt-90 pb-60">
       <div class="container">
           <div class="row">
               <div class="col-sm-4">
                   <div class="footer">
                       <div class="footer-heading">
                           <h4>Sobre </h4>
                           <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                           </span>
                       </div>
                       <div class="footer-contact">
                           <h4>Contato</h4>
                           <div class="footer-us">
                               <div class="footer-img">
                                   <img src="<?php echo get_template_directory_uri() ?>/img/phone-call.png" alt="">
                               </div>
                               <span><?php the_field('telefone', $contact) ?></span>
                           </div>
                           <div class="footer-us">
                               <div class="footer-img">
                                   <img src="<?php echo get_template_directory_uri() ?>/img/email.png" alt="">
                               </div>
                               <span> <?php the_field('email', $contact) ?></span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="col-sm-2">
                   <div class="footer">
                       <h4>Informação</h4>
                       <?php
                        $args = array(
                            'menu' => 'informacao',
                            'theme_location' => 'informacao',
                            'container' => false
                        );
                        wp_nav_menu($args);
                        ?>
                   </div>
               </div>
               <div class="col-sm-2">
                   <div class="footer">
                       <h4>Suporte</h4>
                       <?php
                        $args = array(
                            'menu' => 'Suporte',
                            'theme_location' => 'suporte',
                            'container' => false
                        );
                        wp_nav_menu($args);
                        ?>
                   </div>
               </div>
               <div class="col-sm-4">
                   <div class="footer1">
                       <h5>Receba as melhores dicas <br>para deixar o seu sorriso<br> perfeito </h5>
                       <div class="footer-input">
                           <input type="email" id="myEmail">
                           <a href="https://products.webrockmedia.com/dentallab-html/index.html#">Inscrever</a>
                       </div>
                   </div>
               </div>
               <hr>
               <div class="copy">
                   <ul class="clearfix">
                       <li><a href="<?php the_field('facebook', $contact) ?>" class="facebook-change-co">
                               <img src="<?php echo get_template_directory_uri() ?>/img/icons/facebook.svg" alt="Facebook">
                           </a>
                       </li>
                       <li>
                           <a href="<?php the_field('instagram', $contact) ?>" class="pinterest-change-co">
                               <img src="<?php echo get_template_directory_uri() ?>/img/icons/insta.svg" alt="Instagram">
                           </a>
                       </li>
                       <li>
                           <a href="<?php the_field('twitter', $contact) ?>" class="twitter-change-co">
                               <img src="<?php echo get_template_directory_uri() ?>/img/icons/twitter.svg" alt="Twitter">
                           </a>
                       </li>
                       <li>
                           <a href="<?php the_field('linkedin', $contact) ?>" class="linkedin-change-co">
                               <img src="<?php echo get_template_directory_uri() ?>/img/icons/linkedin.svg" alt="LinkedIn">
                           </a>
                       </li>
                   </ul>
                   <div class="copy_text">
                       <span>Todos os direitos reservados 2023 - por Davi</span>
                   </div>
               </div>
           </div>
       </div>
   </footer>


   <div class="modal fade" id="myModal1" role="dialog">
       <div class="modal-dialog">

           <div class="modal-content">
               <div class="modal-header">
                   <a class="navbar-brand" href="https://products.webrockmedia.com/dentallab-html/index.html#"><img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt=""></a>
                   <button type="button" class="close" data-dismiss="modal">×</button>
               </div>
               <div class="modal-body">
                   <?php
                    $args = array(
                        'menu' => 'principal',
                        'theme_location' => 'menu-principal',
                        'container' => false
                    );
                    wp_nav_menu($args);
                    ?>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
           </div>
       </div>
   </div>

   <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.6.0.min.js" type="text/javascript"></script>
   <script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="<?php echo get_template_directory_uri() ?>/js/isotope.pkgd.min.js" type="text/javascript"></script>
   <script src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
   <script src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.min.js" type="text/javascript"></script>
   <script src="<?php echo get_template_directory_uri() ?>/js/swiper.min.js" type="text/javascript"></script>
   <script src="<?php echo get_template_directory_uri() ?>/js/main.js" type="text/javascript"></script>

   </body>

   </html>
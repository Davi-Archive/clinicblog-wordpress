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
                    <h5>Contact Us</h5>
                    <h2>Dental Lab Get In Touch</h2>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="service-implant">
                    <p>it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'content here, content</p>
                </div>
            </div>
        </div>
        <div class="row pt-60">
            <div class="col-sm-5">
                <div class="contact-us">
                    <div class="contact-content">
                        <div class="contact-img">
                            <img src="./Dental HTML Template_files/c-1.png" alt="">
                        </div>
                        <div class="contact-text">
                            <h5>OFFICE ADDRESS</h5>
                            <p>4500 Mercntile plaza,Suite 300, Fort Worth,TX,76137,USA
                            </p>
                        </div>
                    </div>
                    <div class="contact-content">
                        <div class="contact-img">
                            <img src="./Dental HTML Template_files/c-2.png" alt="">
                        </div>
                        <div class="contact-text">
                            <h5>PHONE NUMBER</h5>
                            <p>+1(817) 901 3377<br>+1(817) 901 3377
                            </p>
                        </div>
                    </div>
                    <div class="contact-content">
                        <div class="contact-img">
                            <img src="./Dental HTML Template_files/c-3.png" alt="">
                        </div>
                        <div class="contact-text">
                            <h5>EMAIL ADDRESS</h5>
                            <p>info@example.com <br>info@example.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="contact-form">
                    <div id="resultmm">
                        <span class="seccess" style="display: none;">Mail Sent. Thank you, we will contact you shortly.</span>
                        <span class="error" style="display: none;">Mail was not Sent.</span>
                    </div>
                    <form id="my-form" action="https://products.webrockmedia.com/dentallab-html/contact.php" method="post" class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Enter Your Name" name="first_name" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" placeholder="Enter Your Email" name="email" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="number" maxlength="10" placeholder="Enter Your Mobile" name="phone" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Enter Your Subject" name="subject" required="" class="form-control form-com">
                        </div>
                        <div class="form-group col-md-12">
                            <textarea placeholder="Message..." required="" name="message" class="form-control form-com-message"></textarea>
                        </div>
                        <div class="view-one col-md-12">
                            <button type="submit" name="submit" class="animation-cer-btn" id="my-form-button">
                                Send Message <span class="line2"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    1111111111
    <?php include(TEMPLATEPATH . '/inc/map-location.php'); ?>
</section>
<hr class="horizontal">


<?php ?>

<?php get_footer(); ?>
<?php
require $_SERVER['DOCUMENT_ROOT'] . 'vendor/autoload.php';

use App\Site\Information as SiteInfo;
use App\Site\Site;

$infos = new SiteInfo();

$site = new Site();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BizLand</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/site/img/favicon.png" rel="icon">
    <link href="assets/site/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/site/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/site/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/site/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/site/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/site/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/site/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/site/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: BizLand - v1.1.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="icofont-phone"></i> +1 5589 55488 55
        </div>
        <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.html">BizLand<span>.</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/site/img/logo.png" alt=""></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                <li><a href="#contact">Contact</a></li>

            </ul>
        </nav>
        <!-- .nav-menu -->

    </div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1><?= $infos->hero_title() ?> </h1>
        <h2><?= $infos->hero_sub_title() ?></h2>
        <div class="d-flex">
            <a href="<?= $infos->hero_link1_url() ?>"
               class="btn-get-started scrollto"><?= $infos->hero_link1_text() ?></a>
            <a href="<?= $infos->hero_link2_url() ?>" class="venobox btn-watch-video" data-vbtype="video"
               data-autoplay="true"> <?= $infos->hero_link2_text() ?> <i class="icofont-play-alt-2"></i></a>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">


    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <?php

                $featured_service = $site->featured_service();

                $sr = 1;
                while ($featured_service_row = $featured_service->fetch_assoc()) {
                    ?>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch my-4 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="<?= $featured_service_row['icon'] ?>"></i></div>
                            <h4 class="title"><a href=""><?= $featured_service_row['title'] ?></a></h4>
                            <p class="description"><?= $featured_service_row['desc'] ?></p>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <h3>Find Out More <span>About Us</span></h3>
                <p><?= $infos->about_us_subtitle() ?></p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="uploads/information/<?= $infos->about_us_image() ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
                     data-aos-delay="100">
                    <h3><?= $infos->about_us_description_title() ?></h3>
                    <p class="mt-3">
                        <?= $infos->about_us_description() ?>

                    </p>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
        <div class="container" data-aos="fade-up">

            <div class="row skills-content">

                <?php

                $skills = $site->skills();

                $sr = 1;

                while ($skill = $skills->fetch_assoc()) {
                    ?>


                    <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill"><?= $skill['name'] ?> <i
                                        class="val"><?= $skill['percentage'] ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['percentage'] ?>"
                                     aria-valuemin="0"
                                     aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div>


                <?php } ?>


            </div>

        </div>
    </section>
    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <?php

                $counters = $site->counters();

                $sr = 1;

                while ($counter = $counters->fetch_assoc()) {
                    ?>

                    <div class="col-lg-3 col-md-6 mb-5">
                        <div class="count-box">
                            <i class="<?= $counter['icon'] ?>"></i>
                            <span data-toggle="counter-up"><?= $counter['number'] ?></span>
                            <p><?= $counter['name'] ?></p>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">

                <?php

                $logos = $site->logos();

                $sr = 1;

                while ($logo = $logos->fetch_assoc()) {
                    ?>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="uploads/logo/<?= $logo['image'] ?>" class="img-fluid" alt="Client">
                    </div>


                <?php } ?>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <h3>Check our <span>Services</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row">

                <?php

                $services = $site->services();
                $sr = 1;

                while ($service = $services->fetch_assoc()) {
                    ?>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

                        <div class="icon-box">
                            <div class="icon"><i class="<?= $service['icon'] ?>"></i></div>
                            <h4><a href=""><?= $service['title'] ?></a></h4>
                            <p><?= $service['desc'] ?></p>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="owl-carousel testimonials-carousel">

                <?php

                $testimonials = $site->testimonials();
                $sr = 1;

                while ($testimonial = $testimonials->fetch_assoc()) {
                    ?>

                    <div class="testimonial-item">
                        <img src="uploads/testimonials/<?= $testimonial['image'] ?>" class="testimonial-img" alt="">
                        <h3><?= $testimonial['name'] ?></h3>
                        <h4><?= $testimonial['post'] ?></h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            <?= $testimonial['review'] ?>
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                <?php } ?>

            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
                <h3>Check our <span>Portfolio</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php

                        $work_menu = $site->work_menu();
                        $sr = 1;
                        while ($menu = $work_menu->fetch_assoc()) {
                            ?>

                            <li data-filter=".<?= $menu['slug'] ?>"><?= $menu['name'] ?></li>

                        <?php } ?>

                    </ul>
                </div>

            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php

                $work_items = $site->work_item();

                $sr = 1;

                while ($item = $work_items->fetch_assoc()) {
                    ?>


                    <div class="col-lg-4 col-md-6 portfolio-item <?= $item['slug'] ?>">
                        <img src="uploads/works/<?= $item['image'] ?>" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4><?= $item['title'] ?></h4>
                            <p><?= $item['name'] ?></p>
                        </div>
                    </div>

                <?php } ?>


            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <h3>Our Hardworking <span>Team</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row">

                <?php

                $team_member = $site->team();

                while ($member = $team_member->fetch_assoc()) {
                    ?>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="uploads/team/<?= $member['image'] ?>" class="img-fluid" alt="">
                                <div class="social">

                                    <?= $member['facebook'] ? '<a href=""><i class="icofont-facebook"></i></a>' : '' ?>
                                    <?= $member['twitter'] ? '<a href=""><i class="icofont-twitter"></i></a>' : '' ?>
                                    <?= $member['linkedIn'] ? '<a href=""><i class="icofont-linkedin"></i></a>' : '' ?>
                                    <?= $member['instagram'] ? '<a href=""><i class="icofont-instagram"></i></a>' : '' ?>


                                </div>
                            </div>
                            <div class="member-info">
                                <h4><?= $member['name'] ?></h4>
                                <span><?= $member['role'] ?></span>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </section>
    <!-- End Team Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>F.A.Q</h2>
                <h3>Frequently Asked <span>Questions</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                <?php
                $faqs = $site->faqs();
                $sr = 1;

                while ($faq = $faqs->fetch_assoc()) {
                    ?>


                    <li>
                        <a data-toggle="collapse" class="<?= $sr != 1 ? 'collapsed' : '' ?>" href="#faq<?= $sr ?>">
                            <?= $faq['question'] ?>
                            <i class="icofont-simple-up"></i></a>
                        <div id="faq<?= $sr ?>" class="collapse <?= $sr == 1 ? 'show' : '' ?>" data-parent=".faq-list">
                            <p>
                                <?= $faq['answer'] ?>
                            </p>
                        </div>
                    </li>
                    <?php $sr++;
                } ?>


            </ul>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <h3><span>Contact Us</span></h3>
                <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                    vitae autem.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-6">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>contact@example.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                       data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                                <div class="validate"></div>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                       placeholder="Your Email" data-rule="email"
                                       data-msg="Please enter a valid email"/>
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                   data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                      data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Section -->

</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>BizLand<span>.</span></h3>
                    <p>
                        A108 Adam Street <br> New York, NY 535022<br> United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Social Networks</h4>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/site/vendor/jquery/jquery.min.js"></script>
<script src="assets/site/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/site/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/site/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/site/vendor/counterup/counterup.min.js"></script>
<script src="assets/site/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/site/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/site/vendor/venobox/venobox.min.js"></script>
<script src="assets/site/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/site/js/main.js"></script>

</body>

</html>

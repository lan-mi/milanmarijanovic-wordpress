<?php
/**
 * Template Name: Contact
 */
?>



    <?php get_header(); ?>


    <body>

        <!-- Preloader -->
        <div class="se-pre-con"></div>

        <!-- Overlay fullscreen menu -->
        <div id="overlay-menu">
            <div class="overlay-menu">
                <ul>
                    <li> <a href="http://www.milanmarijanovic.com/Home/">Home</a> </li>
                    <li> <a href="http://www.milanmarijanovic.com/About/">About</a> </li>
                    <li> <a href="http://www.milanmarijanovic.com/Portfolio/">Portfolio</a> </li>
                    <li> <a href="http://www.milanmarijanovic.com/Contact/">Contact</a> </li>
                </ul>
            </div>
            <!-- Overlay fullscreen menu close button -->
            <button aria-label="close button" id="close">&times;</button>
            <!-- Github icon-->
            <div class="github">
                <a href="https://github.com/lan-mi"><img src="<?php echo get_template_directory_uri(); ?>/img/github.png" alt="github" title="GitHub"></a>
            </div>
        </div>

        <div class="body">
            <img src="<?php echo get_template_directory_uri(); ?>/img/114.jpg" class="cover-img">
            <div class="now">
                <div id="menu-toggle" class="menu-toggle">
                    <div class="menu1"></div>
                    <div class="menu2"></div>
                    <div class="menu3"></div>
                </div>
                <div>
                    <!-- Name and border logo -->
                    <div class="name-border">
                        <div class="name">
                            <a href="http://www.milanmarijanovic.com/Home">
                                <h3>Milan Marijanovic</h3>
                            </a>
                        </div>
                        <div class="top-border"></div>
                        <div class="bottom-border"></div>
                    </div>
                </div>
                <!-- Contact form -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 contact-top">
                            <h2>Contact Me</h2>
                        </div>
                        <div class="col-sm-12 contact-left">
                            <div class="phone">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/phone.png">
                                    <br> <a href="callto://+33758267201">+33758267201</a>
                                </p>
                            </div>
                            <div class="envelope">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/envelope.png">
                                    <br> <a href="mailto:milan221088@yahoo.com">milan221088@yahoo.com</a>
                                </p>
                            </div>
                            <div class="linkedin">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin.png">
                                    <br> <a href="https://www.linkedin.com/in/milan-marijanovic-75a08b124/">milan-marijanovic-75a08b124</a>
                                </p>
                            </div>
                            <div class="skype">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/skype.png">
                                    <br> <a href="skype:milanmarijanovic88?call">milanmarijanovic88</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 contact-right">
                            <div id="city">
                                <h4>Based in</h4>
                                <h3>Paris, France</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rights">
            <small>&copy; Copyright <span id="date"></span>. Milan Marijanovic. All Rights Reserved</small>
        </div>

        <?php get_footer(); ?>

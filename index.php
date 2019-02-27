<?php
/*
 * Template Name: Home
 */

get_header(); ?>

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
            <!-- Photos background responsive design -->
            <picture>
                <source media="(max-width: 1024px)" srcset="<?php echo get_template_directory_uri(); ?>/img/223.jpg">
                <source media="(max-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/224.jpg">
                <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/225.jpg">

                <img src="<?php echo get_template_directory_uri(); ?>/img/113.jpg" class="cover-img"> </picture>
            <!-- Icons JS animations -->
            <div id="icon-1">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-1.png" alt="icon-1">
            </div>
            <div id="icon-2">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-2.png" alt="icon-2">
            </div>
            <div id="icon-11">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-11.png" alt="icon-11">
            </div>
            <div id="icon-12">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-12.png" alt="icon-12">
            </div>
            <div id="icon-21">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-21.png" alt="icon-21">
            </div>
            <div id="icon-22">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-22.png" alt="icon-22">
            </div>
            <div id="icon-31">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-31.png" alt="icon-31">
            </div>
            <div id="icon-32">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-32.png" alt="icon-32">
            </div>
            <div id="icon-41">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-41.png" alt="icon-41">
            </div>
            <div id="icon-42">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-42.png" alt="icon-42">
            </div>
            <div id="icon-51">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-51.png" alt="icon-51">
            </div>
            <div id="icon-52">
                <img src="<?php echo get_template_directory_uri(); ?>/img/icon-52.png" alt="icon-52">
            </div>
            <!-- Sandwich menu -->
            <div class="now">
                <div id="menu-toggle" class="menu-toggle">
                    <div class="menu1" id="menu1"></div>
                    <div class="menu2" id="menu2"></div>
                    <div class="menu3" id="menu3"></div>
                </div>
                <!-- Main container text -->
                <div class="container">
                    <div class="row" id="land">
                        <div class="col-xs-8 col-md-8 col-lg-7" id="main-text">
                            <h1>Hi, I'm Milan. Junior Front End Developer</h1>
                            <h3>with passion for <span id="main-animate">...</span></h3>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- Name with border -->
                    <div class="name-border">
                        <div class="top-border"></div>
                        <div class="bottom-border"></div>
                    </div>
                    <h3 id="name"></h3>
                </div>
            </div>
        </div>

    </body>


    <?php get_footer(); ?>

<?php
/**
 * Template Name: About
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
            <!-- Photos background responsive design -->
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
                            <a href="http://www.milanmarijanovic.com/Home/">
                                <h3>Milan Marijanovic</h3>
                            </a>
                        </div>
                        <div class="top-border"></div>
                        <div class="bottom-border"></div>
                    </div>
                </div>
                <div class="about-left">
                    <h3>About</h3>
                    <p>Everything started with few lines of code. That is when my passion for web development was born. Web design and web development help me to satisfy my need for constant self-improvement. At the moment I am working as a part-time freelancer but I want to do what I love for a living, building neat and tested, responsive websites and web applications, with latest technologies, paying attention to every detail.
                    </p>
                </div>
                <div class="about-right">
                    <h3>Skills</h3>
                    <p>My expertise is related to front-end side of the web, with: HTML, CSS, JavaScript, JQuery for coding, Bootstrap as front-end framework, Gulp as JS task runner, Wordpress as CMS platform, Git and GitHub for version control, Sass as CSS preprocessor, Photoshop for design. Also, I’m familiar with back-end: PHP and SQL.
                    </p>
                </div>
            </div>
        </div>
    </body>

    <?php get_footer(); ?>

<?php
/**
 * Template Name: Portfolio
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
            <!-- Cover background photo -->
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
                <div class="container portfolio">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>My Work</h2>
                        </div>
                        <div class="col-sm-12 text-center">
                            <h3>Here are a few examples of my latest projects</h3>
                        </div>
                        <!-- My work - links -->
                        <div class="col-sm-12 text-center">
                            <div class="container-image-a">
                                <div class="layer-a">
                                    <a href="http://www.digital-zeppelin.com" target="_blank">
                                        <h4>Digital<br>Zeppelin</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="container-image-b">
                                <div class="layer-b">
                                    <a href="http://www.nemovisuals.com" target="_blank">
                                        <h4>Nemo<br>Visuals</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="container-image-c">
                                <div class="layer-c">
                                    <a href="http://deljanemanja.com/" target="_blank">
                                        <h4>Delja<br>Nemanja</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="container-image-d">
                                <div class="layer-d">
                                    <a href="http://www.archiveofphotography.com/" target="_blank">
                                        <h4>Archive of<br>Photography</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="container-image-e">
                                <div class="layer-e">
                                    <a href="http://www.timeforcommongood.com/" target="_blank">
                                        <h4>Time for<br>Common Good</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    <?php get_footer(); ?>

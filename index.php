<?php get_header(); ?>
    <main id="content">
        <div class="banner">
            <div class="text-container">
                <h1 class="banner-text" id="changeText"></h1>
            </div>
            <?php
            echo do_shortcode('[smartslider3 slider="1"]');
            ?>
        </div>
        <div class="divider-wrapper">
            <img class="divider" src="wp-content\themes\blankslate\img\divider1.png.png">
        </div>
        <section id="rolam" class="">
            <h1 class="title"><?php echo get_the_title(20); ?></h1>
            <div class="bio-wrapper">
                <?php
                echo get_post_field('post_content', 20);
                ?>
            </div>
        </section>
        <div class="divider-wrapper">
            <img class="divider" src="wp-content\themes\blankslate\img\divider1.png.png">
        </div>
        <section id="gallery" class="fly-in">
            <h1 class="title">Galéria</h1>
            <div class="gallery-wrapper">
                <div class="container wow fadeInUp">
                    <a href="<?php echo get_site_url() ?>/kutyak">
                        <?php
                        echo get_the_post_thumbnail(49);
                        ?>
                        <div class="overlay">
                            <div class="text">Kutyák</div>
                        </div>
                    </a>
                </div>
                <div class="container wow fadeInUp">
                    <a href="<?php echo get_site_url() ?>/portre">
                        <?php
                        echo get_the_post_thumbnail(58);
                        ?>
                        <div class="overlay">
                            <div class="text wow">Portré</div>
                        </div>
                    </a>
                </div>
                <div class="container wow fadeInUp">
                    <a href="<?php echo get_site_url() ?>/auto-es-motor">
                        <?php
                        echo get_the_post_thumbnail(62);
                        ?>
                        <div class="overlay">
                            <div class="text">Autó és motor</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <div class="divider-wrapper">
            <img class="divider" src="wp-content\themes\blankslate\img\divider1.png.png">
        </div>
        <section id="design" class="fly-in">
            <h1 class="title">Design</h1>
            <div class="design-wrapper">
                <div class="container wow fadeInUp">
                    <a href="<?php echo get_site_url() ?>/ceg-design">
                        <?php
                        echo get_the_post_thumbnail(65);
                        ?>
                        <div class="overlay">
                            <div class="text">Cégeknek</div>
                        </div>
                    </a>
                </div>
                <div class="container wow fadeInUp">
                    <a href="<?php echo get_site_url() ?>/kutyas-design">
                        <?php
                        echo get_the_post_thumbnail(69);
                        ?>
                        <div class="overlay">
                            <div class="text">Kutyás design</div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <div class="divider-wrapper">
            <img class="divider" src="wp-content\themes\blankslate\img\divider1.png.png">
        </div>
        <section id="kapcsolat" class="fly-in">
            <h1 class="title">Kapcsolat</h1>
            <div class="kapcsolat-wrapper">
                <?php
                echo get_post_field('post_content', 52);
                ?>
            </div>
        </section>
    </main>
    <script src="<?php echo get_template_directory_uri()?>\JS\changeText.js"></script>
<?php get_footer(); ?>

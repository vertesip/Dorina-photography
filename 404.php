<?php get_header(); ?>
    <main id="content">
        <div class="notfound-content-wrapper">
            <div class="notfound wow fadeInLeft">
                <p><?php esc_html_e('A keresett oldal nem található!', 'blankslate'); ?></p>
            </div>
            <div class="button-wrapper wow fadeInRight">
                <a href="<?php echo get_home_url() ?>"
                <h1 class="backbutton"><- Vissza</h1>
                </a>
            </div>
        </div>
    </main>
<?php get_footer(); ?>
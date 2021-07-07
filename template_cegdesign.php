<?php
/**
 * Template name: CegDesign Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Dorina
 */
?>

<?php get_header(); ?>
<main id="content">
    <div class="gallery-content-wrapper">
        <h1 class="title wow fadeInLeft">Cég design galéria</h1>
        <div class="button-wrapper wow fadeInRight">
            <a href="<?php echo get_home_url() ?>"
            <h1 class="backbutton"><- Vissza</h1>
            </a>
        </div>
        <div class="divider-wrapper wow fadeIn">
            <img class="divider" src="<?php echo get_template_directory_uri()?>\img\divider1.png.png">
        </div>
        <div class="gallery-wrapper wow fadeInUp">
            <div class="gallery">
                <?php echo do_shortcode('[rl_gallery id="156"]'); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>




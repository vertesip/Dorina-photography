</div>
<footer id="footer">
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
    <div class="author">
        <p><a href="#" target="_blank">Design by: Varga Alexandra</a></p>
        <p><a href="http://www.vertesipatrik.com/" target="_blank">Coding by: Vértesi Patrik</a></p>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri()?>\JS\wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="<?php echo get_template_directory_uri()?>\JS\hamburger.js"></script>

</body>
</html>

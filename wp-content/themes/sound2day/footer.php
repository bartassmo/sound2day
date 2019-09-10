<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sound2day
 */

?>

<footer class="footer">
    <div class="container nPadding">
        <div class="footer__container">
            <div class="footer__col">
                <a href="<?php echo site_url(); ?>" class="header__logo"><?php echo getSvgContent(locate_template('dist/img/svg/logo-white.svg')); ?></a>
            </div>
            <div class="footer__col">
                <address class="footer__address">
                    <?php dynamic_sidebar( 'address-footer' ); ?> 
                </address>
            </div>
            <div class="footer__col">
    
            </div>
            <div class="footer__col">
    
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

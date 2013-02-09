<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id="main" div and all content after.
 *
 * @package Shape
 * @since Shape 1.0
 */
?>
</div><!-- #main .site-main -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-info">
    	<?php do_action( 'shape_credits' ); ?>
        <a href="http://wordpress.org" title="<?php esc_attr_e( 'A semantic personal publishing platform', 'shape' ); ?>" rel="external"><?php printf( __( 'Proudly powered by %s', 'shape' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( __( 'Theme: %1$s by %2$s.', 'shape' ), 'Shape', '<a href="http://themeshaper" rel="external">ThemeShaper</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
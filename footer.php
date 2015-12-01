<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hugo_Baeta
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<ul class="site-info">
            <li class="cms-info"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'magnus' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'magnus' ), 'WordPress' ); ?></a></li>
            <li class="copyright-info">Content &copy; <a href="http://hugobaeta.com" rel="author">Hugo Baeta</a></li>            
        </ul><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

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
        <nav id="footer-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #footer-navigation -->
		<ul class="site-info">
            <li class="cms-info">Proudly powered by <a href="http://wordpress.org/>">WordPress</a></li>
            <li class="author-info">Made with Love by <a href="http://hugobaeta.com" rel="author">Hugo Baeta</a></li>            
        </ul><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The Template for displaying single projects.
 *
 * @package Hugo_Baeta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'portfolio-single' ); ?>

		<?php endwhile; // End of the loop. ?>

		<?php the_post_navigation(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

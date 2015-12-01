<?php
/**
 * The template used for displaying projects on index view
 *
 * @package Hugo_Baeta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="portfolio-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php if ( '' != get_the_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'hugobaeta-post-thumbnail' ); ?>
				<?php endif; ?>
				<?php the_title( '<h2 class="project-title">', '</h2>' ); ?>
			</a>
		</div><!-- .portfolio-thumbnail -->
</article><!-- #post-## -->

<?php
/**
 * Template part for displaying single portfolio projects.
 *
 * @package Hugo_Baeta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( '' != get_the_post_thumbnail() ) : ?>
		<?php the_post_thumbnail( 'hugobaeta-project-image' ); ?>
	<?php endif; ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->

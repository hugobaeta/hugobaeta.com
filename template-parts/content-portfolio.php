<?php
/**
 * The template used for displaying projects on portfolio view
 *
 * @package Hugo_Baeta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('project'); ?>>

	<a href="<?php the_permalink(); ?>">

		<?php if ( '' != get_the_post_thumbnail() ) : ?>
            <div class="project-image">
                <?php the_post_thumbnail( 'hugobaeta-project-image' ); ?>
            </div>
		<?php endif; ?>

        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
            <?php the_excerpt(); ?>
        </header><!-- .entry-header -->
	
    </a>

</article><!-- #post-## -->

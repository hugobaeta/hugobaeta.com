<?php
/**
 * Template part for displaying single portfolio projects.
 *
 * @package Hugo_Baeta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php 
    $image_id = get_post_thumbnail_id();
    $url = wp_get_attachment_image_src( $image_id, 'hugobaeta-project-image' ); 
    ?>

    <header class="project-header" style="background-image: url(<?php echo esc_attr( $url[0] ); ?>);">
    	<div class="project-header-content">
    		<?php the_title( '<h1 class="project-title">', '</h1>' ); ?>
    	</div><!-- .project-header-content -->
    </header><!-- .project-header -->

	<div class="entry-content">
        
        <?php the_content(); ?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->

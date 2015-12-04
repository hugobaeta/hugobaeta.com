<?php
/**
 * The template used for displaying projects on portfolio view
 *
 * @package Hugo_Baeta
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('project'); ?>>

        <?php 
        $image_id = get_post_thumbnail_id();
        $url = wp_get_attachment_image_src( $image_id, 'hugobaeta-project-image' ); 
        ?>

        <header class="project-header" style="background-image: url(<?php echo esc_attr( $url[0] ); ?>);">
            <div class="project-header-content">
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                <?php if(get_field('portfolio-project-intro')) {
                    echo '<div class="project-intro">' . get_field('portfolio-project-intro') . '</div>';
                }?>
            </div><!-- .project-header-content -->
        </header><!-- .project-header -->

</article><!-- #post-## -->
<?php
/*
Template Name: Homepage
*
* @package Hugo_Baeta
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( '/template-parts/content', 'home' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>

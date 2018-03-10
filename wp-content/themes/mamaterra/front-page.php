<?php
/**
 * The template for displaying the home page
 *
 * @package mamaterra
 */

get_header(); ?>

<div id="primary" class="content-area">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; // End of the loop.
		?>
</div><!-- #primary -->

<?php
get_footer();
?>
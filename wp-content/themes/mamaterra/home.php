<?php
/* Template Name: home
 * Description: The template for displaying blog posts page
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mamaterra
 */

get_header(); ?>

<div class="content-area">
	<?php
    if ( have_posts() ) :

	    if ( is_home() && ! is_front_page() ) : ?>
			
		<header class="entry-header gradient-green">
	        <h1 class="entry-title"><?php single_post_title(); ?></h1>
		</header>			
		<?php
		endif;
		?>
		<section class="container row">	
            <main class="col-xs-12 col-md-8 col-lg-9">
		<?php

		while ( have_posts() ) : the_post();
        
				get_template_part( 'template-parts/content-listing', get_post_format() );
        

		endwhile;

		
		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>
	         </main>
	         <aside class="col-xs-12 col-md-4 col-lg-3">
		         <?php get_sidebar(); ?>
	         </aside>
	    </section>
</div>

<?php
get_footer();

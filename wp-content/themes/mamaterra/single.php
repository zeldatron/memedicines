<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mamaterra
 */

get_header(); ?>

<div class="content-area">
	<?php while ( have_posts() ) : the_post(); ?>
	<header class="entry-header">
	    <div class="container row">
	        <div class="col-xs-12">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
		
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php mamaterra_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>	
				</div>	
			</div>
	</header><!-- .entry-header -->
    
    <main id="main" <?php post_class('site-main container row'); ?>>
        <div class="col-xs-12 col-md-8 col-lg-9" id="primary">
	
			<?php
	
				get_template_part( 'template-parts/content', get_post_type() );
	
				the_post_navigation();
	
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
	
			endwhile; // End of the loop.
			?>
		</div>
        <div class="col-xs-12 col-md-4 col-lg-3" id="secondary">
           <?php get_sidebar(); ?>
        </div>
    </main><!-- #post-<?php the_ID(); ?> -->
</div><!-- #primary -->
<?php
get_footer();
?>
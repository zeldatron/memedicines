<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mamaterra
 */

?>

<main id="main" <?php post_class('site-main'); ?>>
<?php
	if(!get_field('no_header')):
?>	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
<?php
	endif;
?>


<?php
	if(get_field('page_blocks')):
	    get_template_part( 'template-parts/layout-blocks' );
	else: 
		echo get_field('default_content');
	endif;
?>

</main><!-- #post-<?php the_ID(); ?> -->

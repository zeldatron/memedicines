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
	<?php get_template_part( 'template-parts/layout-blocks' ); ?>
</main><!-- #post-<?php the_ID(); ?> -->

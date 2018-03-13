<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mamaterra
 */

?>
<article class="listing-item minty-fresh-bg <?php if (!get_the_post_thumbnail()) { echo 'no-image'; } ?>">
		<?php if (get_the_post_thumbnail())  { ?>
		<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(); ?></a>
		<?php } ?>
		<div>
		    <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
		    <span class="excerpt"><?php the_excerpt(); ?></span>
		</div>
</article>
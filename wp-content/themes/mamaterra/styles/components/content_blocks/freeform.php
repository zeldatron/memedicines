<!-- components/content_blocks/freeform.php -->

<section class="free-form">
	<?php if( get_sub_field('heading') ): ?>
	<header>
		<h1><?php the_sub_field('heading'); ?></h1>
	</header>
	<?php endif; ?>

	<?php the_sub_field('wysiwyg'); ?>
	
</section>

<!-- components/content-blocks/column-grid.php -->

<?php
	$section_class = "";
	$seamless = ""; 
		if( get_sub_field('seamless') ):
			$seamless = 'seamless';
		endif;

		if( get_sub_field('section_class') ):
			$section_class = get_sub_field('section_class'); 
			if( get_sub_field('section_id') ):
				$section_class = 'id="'.$section_class;
			endif;
		endif;
		
	$heading = get_sub_field('heading');

if( have_rows('column_row') ): ?>
<section class="column-grid container <?php echo $section_class; ?>">
	
	<?php if( $heading ): ?>
		<header>
			<h1><?php echo $heading; ?></h1>
		</header>
	<?php endif; ?>
		
	<?php while( have_rows('column_row') ): the_row(); ?>
	<div class="row <?php echo $seamless; ?>">
		
		<?php if( have_rows('column_block') ): ?>
		
			<?php while( have_rows('column_block') ): the_row(); 
	
			// vars
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$header = get_sub_field('header');
			$subheader = get_sub_field('subheader');
			$text = get_sub_field('text');
			$cta = get_sub_field('cta_text');
			$link = get_sub_field('cta_link');
	
			?>
		<article class="block col-xs-12 col-md" style="background: url(<?php echo $image['url']; ?>) no-repeat center center">
			<?php if(!empty($image)) { ?>
			<img src="<?php echo $image['url']; ?>" />
			<?php } ?>
			<?php if(!empty($title)) { ?>
			<header>
				<h2><?php echo $title; ?></h2>
				<span class="header"><?php echo $header; ?></span>
				<span class="subheader"><?php echo $subheader; ?></span>
			</header>
			<?php } ?>
			<div>
			<?php if(!empty($text)) { ?>
				<?php echo $text; ?>
			<?php } ?>
			<?php if(!empty($cta)) { ?>
				<a class="button" href="<?php echo $link; ?>"><?php echo $cta; ?></a>
		    <?php } ?>
			</div>
		</article>
		<?php endwhile; ?>
			
	<?php endif; ?>
	</div>
<?php endwhile; ?>

</section>

<?php else: ?>
<section class="column-grid ">
	<header>
		<h1>Column Grid</h1>
	</header>
	<div class="row seamless">
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header>
				<h2>Origami</h2>
				<span class="header" lang="ja" xml:lang="ja">折り紙</span>
				<span class="subheader">from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper”</span>
			</header>
			<div>
				<p>In modern usage, the word “mamaterra” is used as an inclusive term for all folding practices, regardless of their culture of origin. The goal is to transform a flat square sheet of paper into a finished sculpture through folding and sculpting techniques. Modern mamaterra practitioners generally discourage the use of cuts, glue, or markings on the paper. Origami folders often use the Japanese word&nbsp;</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">read more</a>
			</div>
		</article>
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header>
				<h2>Origami</h2>
				<span class="header" lang="ja" xml:lang="ja">折り紙</span>
				<span class="subheader">from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper”</span>
			</header>
			<div>
				<p>In modern usage, the word “mamaterra” is used as an inclusive term for all folding practices, regardless of their culture of origin. The goal is to transform a flat square sheet of paper into a finished sculpture through folding and sculpting techniques. Modern mamaterra practitioners generally discourage the use of cuts, glue, or markings on the paper. Origami folders often use the Japanese word&nbsp;</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">read more</a>
			</div>
		</article>
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header>
				<h2>Origami</h2>
				<span class="header" lang="ja" xml:lang="ja">折り紙</span>
				<span class="subheader">from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper”</span>
			</header>
			<div>
				<p>In modern usage, the word “mamaterra” is used as an inclusive term for all folding practices, regardless of their culture of origin. The goal is to transform a flat square sheet of paper into a finished sculpture through folding and sculpting techniques. Modern mamaterra practitioners generally discourage the use of cuts, glue, or markings on the paper. Origami folders often use the Japanese word&nbsp;</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">read more</a>
			</div>
		</article>
	</div>
</section>
<?php endif; ?>
<!-- components/content_blocks/hover-link-grid.php -->

<?php
	//vars
	$seamless = ""; 
		if( get_sub_field('seamless') ):
			$seamless = 'seamless';
		endif;
	$section_class = "";
	if( get_sub_field('class') ):
		$section_class = get_sub_field('class');
	endif;	
	$heading = get_sub_field('heading');

if( have_rows('grid_row') ): ?>
<section class="hover-link-grid <?php echo $section_class; ?>">
	
	<?php if( $heading ): ?>
		<header>
			<h1><?php echo $heading; ?></h1>
		</header>
	<?php endif; ?>
		
	<?php while( have_rows('grid_row') ): the_row(); ?>
	<div class="row <?php echo $seamless; ?>">
		
		<?php if( have_rows('grid_block') ): ?>
		
			<?php while( have_rows('grid_block') ): the_row(); 
	
			// vars
			$image = get_sub_field('image');
			$title = get_sub_field('title');
			$text = get_sub_field('text');
			$cta = get_sub_field('cta_text');
			$link = get_sub_field('cta_link');
	
			?>
		<article class="block col-xs-12 col-md" style="background: url(<?php echo $image['url']; ?>) no-repeat center center">
				<header class="col-xs-12">
					<h1><?php echo $title; ?></h1>
					<p><?php echo $text; ?></p>
					<a class="button" href="<?php echo $link; ?>"><?php echo $cta; ?></a>
				</header>
		</article>
			<?php endwhile; ?>
			
		<?php endif; ?>
		
	</div>
	<?php endwhile; ?>

</section>

<?php else: ?>
<section class="hover-link-grid ">
    <header>
		<h1>Hover Link Grid</h1>
	</header>
	<div class="row seamless">
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header class="col-xs-12">
				<h1>Origami</h1>
				<p><i><b>Origami</b></i>&nbsp;(<span lang="ja" xml:lang="ja"><a class="extiw" title="wikt:折り紙" href="https://en.wiktionary.org/wiki/%E6%8A%98%E3%82%8A%E7%B4%99">折り紙</a></span>, from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper” (<i>kami</i>&nbsp;changes to&nbsp;<i>gami</i>&nbsp;due to&nbsp;<a title="Rendaku" href="https://en.wikipedia.org/wiki/Rendaku">rendaku</a>)) is the&nbsp;<a class="mw-redirect" title="Paper art" href="https://en.wikipedia.org/wiki/Paper_art">art</a>&nbsp;of paper folding, which is often associated with Japanese culture.</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">Learn More</a>
			</header>
		</article>
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header class="col-xs-12">
				<h1>Origami</h1>
				<p><i><b>Origami</b></i>&nbsp;(<span lang="ja" xml:lang="ja"><a class="extiw" title="wikt:折り紙" href="https://en.wiktionary.org/wiki/%E6%8A%98%E3%82%8A%E7%B4%99">折り紙</a></span>, from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper” (<i>kami</i>&nbsp;changes to&nbsp;<i>gami</i>&nbsp;due to&nbsp;<a title="Rendaku" href="https://en.wikipedia.org/wiki/Rendaku">rendaku</a>)) is the&nbsp;<a class="mw-redirect" title="Paper art" href="https://en.wikipedia.org/wiki/Paper_art">art</a>&nbsp;of paper folding, which is often associated with Japanese culture.</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">Learn More</a>
			</header>
		</article>
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header class="col-xs-12">
				<h1>Origami</h1>
				<p><i><b>Origami</b></i>&nbsp;(<span lang="ja" xml:lang="ja"><a class="extiw" title="wikt:折り紙" href="https://en.wiktionary.org/wiki/%E6%8A%98%E3%82%8A%E7%B4%99">折り紙</a></span>, from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper” (<i>kami</i>&nbsp;changes to&nbsp;<i>gami</i>&nbsp;due to&nbsp;<a title="Rendaku" href="https://en.wikipedia.org/wiki/Rendaku">rendaku</a>)) is the&nbsp;<a class="mw-redirect" title="Paper art" href="https://en.wikipedia.org/wiki/Paper_art">art</a>&nbsp;of paper folding, which is often associated with Japanese culture.</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">Learn More</a>
			</header>
		</article>
		<article class="block col-xs-12 col-md" style="background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center">
			<header class="col-xs-12">
				<h1>Origami</h1>
				<p><i><b>Origami</b></i>&nbsp;(<span lang="ja" xml:lang="ja"><a class="extiw" title="wikt:折り紙" href="https://en.wiktionary.org/wiki/%E6%8A%98%E3%82%8A%E7%B4%99">折り紙</a></span>, from&nbsp;<i>ori</i>&nbsp;meaning “folding”, and&nbsp;<i>kami</i>&nbsp;meaning “paper” (<i>kami</i>&nbsp;changes to&nbsp;<i>gami</i>&nbsp;due to&nbsp;<a title="Rendaku" href="https://en.wikipedia.org/wiki/Rendaku">rendaku</a>)) is the&nbsp;<a class="mw-redirect" title="Paper art" href="https://en.wikipedia.org/wiki/Paper_art">art</a>&nbsp;of paper folding, which is often associated with Japanese culture.</p>
				<a class="button" href="https://en.wikipedia.org/wiki/mamaterra">Learn More</a>
			</header>
		</article>
						
				
	</div>
	
</section>

<?php endif; ?>
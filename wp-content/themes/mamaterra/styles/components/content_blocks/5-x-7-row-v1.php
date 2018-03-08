<!-- components/content-blocks/5-x-7-row.php -->

<?php
    // vars
	$section_class = "";
	if( get_sub_field('class') ):
		$section_class = get_sub_field('class');
	endif;
	$image = get_sub_field('image');
	$image = '/wp-content/themes/cr-mamaterra/screenshot.png';
	if( get_sub_field('image') ):
		$img = get_sub_field('image');
		$image = $img['url'];
	endif;
	$title = get_sub_field('title');
	$subtitle = get_sub_field('subtitle');
	$text = get_sub_field('text');
	$cta = get_sub_field('cta_text');
	$link = get_sub_field('cta_link');
	$seamless = ""; 
	if( get_sub_field('seamless') ):
		$seamless = 'seamless';
	endif;
?>

<article class="five-seven-row <?php echo $section_class; ?>">
    <div>
        <div class="row <?php echo $seamless; ?>">
            <section class="col-xs-12 col-lg-7">
    	        <div>
    	            <?php if( $title ): ?>
    	    		<header>
    	    			<h1><?php echo $title; ?></h1>
    	    			<?php if( $subtitle ): ?>
    	    			    <span><?php echo $subtitle; ?></span>
    	    			<?php endif; ?>
    	    		</header>
    		        <?php endif; ?>
    	            <div>
    	                <?php if( $text ): ?>
    					    <p><?php echo $text; ?></p>
    					<?php endif; ?>
    					<?php if( $cta ): ?>
    					    <a class="button" href="<?php echo $link; ?>"><?php echo $cta; ?></a>
    					<?php endif; ?>
    				</div>
    	        </div>
            </section>
            <section class="col-xs-12 col-lg-5" style="background: url(<?php echo $image; ?>) no-repeat center center;">
            </section>
        </div>
    </div>
</article>

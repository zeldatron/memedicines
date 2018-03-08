<!-- components/content_blocks/5-x-7-row-v2.php -->

<?php
    // vars
	$section_class = "";
	if( get_sub_field('class') ):
		$section_class = get_sub_field('class');
	endif;
	$title = "This is the title";
	if( get_sub_field('title') ):
		$title = get_sub_field('title');
	endif;
	$text = "Leggings readymade kickstarter banh mi umami before they sold out cred hella. Four loko iPhone kickstarter tousled cliche, locavore brunch artisan franzen taxidermy salvia readymade swag cred. Sartorial YOLO umami, activated charcoal woke 8-bit yuccie echo park. Next level pour-over artisan beard vinyl lyft bitters lumbersexual vegan woke post-ironic.";
	if( get_sub_field('text') ):
		$text = get_sub_field('text');
	endif;
	$cta = get_sub_field('cta_text');
	$link = get_sub_field('cta_link');
	$seamless = ""; 
	if( get_sub_field('seamless') ):
		$seamless = 'seamless';
	endif;
?>

<section class="five-seven-row v2 <?php echo $section_class; ?>">
    <article>
        <div class="row col-lg-offset-1 col-lg-10  <?php echo $seamless; ?>">
            <header class="col-xs-12 col-lg-5">
                <h1><?php echo $title; ?></h1>
            </header>
            <div class="col-xs-12 col-lg-7">
                <?php if( $text ): ?>
                <p><?php echo $text; ?></p>
    			<?php endif; ?>
    			<?php if( $cta ): ?>
    				<a class="button" href="<?php echo $link; ?>"><?php echo $cta; ?></a>
    			<?php endif; ?>
            </div>
        </div>
    </article>
</section>

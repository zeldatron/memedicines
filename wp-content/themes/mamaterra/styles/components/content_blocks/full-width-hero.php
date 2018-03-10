<!-- components/content_blocks/full-width-hero.php -->

<?php
	//section class
 	$section_class = "";
 	$heading = "";
 	$text = "";
 	$section_class = "";
 	$is_id = false;
	if( get_sub_field('section_class') ):
		$section_class = get_sub_field('section_class'); 
		$is_id = get_sub_field('section_id');
	endif;
	
	//content type
	$content_type = 'image';
	if( get_sub_field('content_type') ):
		$content_type = get_sub_field('content_type');
	endif;
	
	//background carousel hero variables

	
	//background image hero variables
	$background = "style='background: url(/wp-content/themes/cr-mamaterra/screenshot.png) no-repeat center center'";
	if( have_rows('background_image') ): while( have_rows('background_image') ): the_row(); 
		if ( $content_type == 'image'):
		$heading = get_sub_field('heading');
		$subheader = get_sub_field('subheader');
			if( get_sub_field('image') ):
				$background_image = get_sub_field('image'); 
				$url = $background_image['url'];
				$background = "style='background: url(". $url .") no-repeat center center'";
			else: $background = "";
			endif;
			if( have_rows('cta') ): while( have_rows('cta') ): the_row();
				$text = get_sub_field('text');
				$link = get_sub_field('link');
			endwhile;endif;
		endif;
	endwhile;endif;
	
	//background video hero variables
	$background_video = "";
	if( have_rows('background_video') ): while( have_rows('background_video') ): the_row(); 
		if ( $content_type == 'video'):
			$heading = get_sub_field('heading');
			$subheader = get_sub_field('subheader');
			if( get_sub_field('video') ):
				$background_video = get_sub_field('video');
				preg_match('/src="(.+?)"/', $background_video, $matches);
				$src = $matches[1];
				$params = array(
				    'controls'    => 0,
				    'loop'        => 1,
				    'autoplay'    => 1,
				    'showinfo'    => 0,
				    'modestbranding' => 1
				);
				$new_src = add_query_arg($params, $src);
				$background_video = str_replace($src, $new_src, $background_video); 
				$background_video = "<div class='video-background'><div class='video-foreground'>" . $background_video . "</div></div>";
			else: $background_video = "";
			endif;
			if( have_rows('cta') ): while( have_rows('cta') ): the_row();
				$text = get_sub_field('text');
				$link = get_sub_field('link');
			endwhile;endif;
		endif;
	endwhile;endif;
 ?>
	
<?php if( $content_type == 'carousel' ): 

$section_classes = "hero full-width-hero-carousel";
if($is_id){
	$attrs = 'class="' . $section_classes . '" id="' . $section_class . '"';
} else {
	$attrs = 'class="' . $section_classes .' ' . $section_class . '"';
}

?>
<section <?php echo $attrs; ?>>
	
<?php 

if( have_rows('carousel') ): while( have_rows('carousel') ): the_row(); 
    if( have_rows('slide') ): while( have_rows('slide') ): the_row();
		
		$slide_content_type = get_sub_field('slide_content_type');
		if( $slide_content_type == 'image' ):
			$background_image = get_sub_field('background_image');
			$image = $background_image['image'];
			$url = $image['url'];
			//$background_image = "style='background: url(". $url .") no-repeat center center'";
			$background_image = '<img src="' . $url . '" />';
		else: $background_image = "";
		endif;
		$background_video = "";
		if ( $slide_content_type == 'video'):
			$video = get_sub_field('background_video');
			$background_video = $video['video'];
			preg_match('/src="(.+?)"/', $background_video, $matches);
			$src = $matches[1];
			$params = array(
			    'controls'    => 0,
			    'loop'        => 1,
			    'autoplay'    => 1,
			    'showinfo'    => 0,
			    'modestbranding' => 1,
			    'mute'        => 1,
			    'playlist'    => 1,
			);
			$new_src = add_query_arg($params, $src);
			$background_video = str_replace($src, $new_src, $background_video); 
			$background_video = "<div class='video-background'><div class='video-foreground'>" . $background_video . "</div></div>";
			else: $background_video = "";
		endif;?>
	
	
	
	<article class="slide <?php echo $slide_content_type; ?>"  style="background: url('<?php echo $url; ?>') no-repeat center center;height:100vh">
		<div>
		<?php echo $background_video;?>
		</div>
	</article>
<?php 
    endwhile;endif;
endwhile;endif; 
?>
</section>
<?php else: ?>
<section class="hero <?php echo $content_type." ".$section_class; ?>" <?php echo $background; ?>>
	<?php if( get_sub_field('background_video') ):
		echo $background_video;
	endif;?>
	<?php if( $heading || $text ) { ?>
	<header>
    	<h1><?php echo $heading; ?></h1>
    	<?php if( $subheader ): ?>
    		<span><?php echo $subheader; ?></span>
    	<?php endif;?>
    	<?php if($text): ?>
    		<a href="<?php echo $link; ?>" class="button"><?php echo $text; ?></a>
    	<?php endif; ?>
	</header>
	<?php } ?>
</section>
<?php endif;?>
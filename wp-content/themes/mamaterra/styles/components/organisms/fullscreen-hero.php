<!-- components/organisms/fullscreen-hero.php -->

<?php
	//section class
 	$section_class = "";
	if( get_sub_field('section_class') ):
		$section_class = get_sub_field('section_class'); 
		if( get_sub_field('section_id') ):
			$section_class = 'id="'.$section_class;
		endif;
	endif;
	
	//content type
	if( get_sub_field('content_type') ):
		$content_type = get_sub_field('content_type');
	endif;
	
	//background image hero variables
	if( have_rows('background_image') ): while( have_rows('background_image') ): the_row(); 
		$background = "";
		if ( $content_type == 'image'):
			if( get_sub_field('image') ):
				$background_image = get_sub_field('image'); 
				$url = $background_image['url'];
				$background = "style='background: url(". $url .") no-repeat center center'";
			else: $background = "";
			endif;
		endif;
	endwhile;endif;
	
	//background video hero variables
	if( have_rows('background_video') ): while( have_rows('background_video') ): the_row(); 
		$background_video = "";
		if ( $content_type == 'video'):
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
		endif;
	endwhile;endif;
 ?>
	
<?php if( get_sub_field('background_image') ): ?>
<section class="hero <?php echo $content_type." ".$section_class; ?>" <?php echo $background; ?>>
	<?php echo $background_video; ?>
	<header>
    	<h1 class="<?php echo $heading_color; ?>"><?php the_sub_field('content_type'); ?></h1>
    	<?php the_sub_field('image'); ?>
    	<?php if( get_sub_field('subheading') ): ?>
    		<span class="subheadline"><?php the_sub_field('subheading'); ?></span>
    	<?php endif;?>
    	<?php if (get_sub_field('video_link')): ?>
    		<button class="button blue-button watch-video fancybox u-pull-none light-margin-top" data-video="<?php the_sub_field('video_link'); ?>">Watch the video</button>
    	<?php endif;?>
	</header>
	<?php if (get_sub_field('video_link')): ?>
	<div class="twelve columns overview-video" id="overview-video">
    	<div class="overview-container container">
        	<iframe class="vimeo960 hdvideo" src="https://player.vimeo.com/video/<?php the_sub_field('video_link'); ?>?js_api=1&amp;title=0&amp;byline=0&amp;portrait=0"></iframe>
        </div>
    </div>
    <?php endif;?>
</section>
<?php else: ?>
<section class="masthead-layout header no-img <?php echo $bgcolor." ".$subheading ?>">
	<header>
    	<?php if( get_sub_field('heading') ): ?>
    		<h1 class="<?php echo $heading_color; ?>"><?php the_sub_field('heading'); ?></h1>
    	<?php else: ?>
    		<h1><?php the_title(); ?></h1>
    	<?php endif;?>
    	<?php if( get_sub_field('subheading') ): ?>
    		<span class="subheadline"><?php the_sub_field('subheading'); ?></span>
    	<?php endif;?>
	</header>
</section>
<?php endif;?>
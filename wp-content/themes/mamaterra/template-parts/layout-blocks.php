<?php

// check if the flexible content field has rows of data
if( have_rows('content_blocks') ):

     // loop through the rows of data
    while ( have_rows('content_blocks') ) : the_row();
    
		// Fullscreen Hero
        if( get_row_layout() == 'fullscreen_hero' ):
                
        	get_template_part( 'styles/components/content_blocks/full-width-hero' );
        	
        //Hover Link Grid
        elseif( get_row_layout() == 'hover_link_grid' ): 
        	get_template_part( 'styles/components/content_blocks/hover-link-grid' );
        	
        //Column Link Grid
        elseif( get_row_layout() == 'column_grid' ): 
        	get_template_part( 'styles/components/content_blocks/column-grid' );
        	
        // 5 x 7
        elseif( get_row_layout() == '5_x_7_row' ):
                
        	get_template_part( 'styles/components/content_blocks/5-x-7-row' );
        	
        //Free Form
        elseif( get_row_layout() == 'freeform' ): 
        	get_template_part( 'styles/components/content_blocks/freeform' );
        
        else: get_template_part( 'content-none' );

        endif;

    endwhile;
    
    /* Press	
        elseif( get_field('press_release') || get_field('press_year') || get_field('media_gallery') || get_field('contact_content') ):
        	get_template_part( 'template-parts/content-press' );
    // Tech Specs
        elseif( get_field('table') ):
        	get_template_part( 'template-parts/content-techspecs' );
        	
        else: get_template_part( 'template-parts/content-page' );*/



endif;

?>
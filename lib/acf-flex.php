<?php
 
// check if the flexible content field has rows of data
if( have_rows('additional_content') ):
 
     // loop through the rows of data
    while ( have_rows('additional_content') ) : the_row();
 
        if( get_row_layout() == 'faq' ):
 
        	include ('acf-repeater.php');
 
        elseif( get_row_layout() == 'gallery' ): 
 
        	include ('acf-gallery.php');

        elseif( get_row_layout() == 'supporters' ): 
 
            include ('acf-supporter.php');

        elseif( get_row_layout() == 'sidecar_copy' ): 
 
        	include ('acf-copy.php');
 
        endif;
 
    endwhile;
 
else :
 
    // no layouts found
 
endif;
 
?>
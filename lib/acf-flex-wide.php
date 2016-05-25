<?php
 
// check if the flexible content field has rows of data
if( have_rows('additional_content') ):
 
     // loop through the rows of data
    while ( have_rows('additional_content') ) : the_row();
 
        if( get_row_layout() == 'wide_content' ):
 
        	include ('acf-wide-content.php');
 
        endif;
 
    endwhile;
 
else :
 
    // no layouts found
 
endif;
 
?>
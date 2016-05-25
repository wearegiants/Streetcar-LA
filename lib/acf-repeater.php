<?php

// check if the repeater field has rows of data
if( have_rows('faq_item') ):

echo '<div class="panel-group" id="accordion">';

// loop through the rows of data
$i = 1; while ( have_rows('faq_item') ) : the_row(); ?>

<div class="panel panel-default text-center">
	<div class="panel-heading">
		<h3 class="panel-title text-center">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $i; ?>">
				<?php the_sub_field('faq_question'); ?></strong>
			</a>
		</h3>
	</div>
	<div id="collapse_<?php echo $i; ?>" class="panel-collapse collapse">
		<div class="panel-body">
			<p><?php the_sub_field('faq_answer'); ?></p>
		</div>
	</div>
</div>

<?php $i++; endwhile; 

echo '</div>';

else :

// no rows found

endif;

?>
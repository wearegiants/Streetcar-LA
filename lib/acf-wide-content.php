<div class="clearfix">

<div class="col-md-6"><?php the_sub_field('wide_copy'); ?></div>
<div class="col-md-6">
	<?php  $images = get_sub_field('wide_featured_images'); if( $images ): ?>
	<?php foreach( $images as $image ): ?>
	<br>
	<img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
	<?php endforeach; ?>
	<?php endif; ?>
</div>

</div>
<hr>
<div class="clearfix">

<div class="col-md-6"><?php the_sub_field('supporter_description'); ?></div>
<div class="col-md-6">
	<?php  $images = get_sub_field('supporter_gallery'); if( $images ): ?>
	<?php foreach( $images as $image ): ?>
	<div class="logo col-md-4"><img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></div>
	<?php endforeach; ?>
	<?php endif; ?>
</div>

</div>
<hr>
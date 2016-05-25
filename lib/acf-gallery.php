<?php  $images = get_sub_field('image_gallery'); if( $images ): ?>
<?php foreach( $images as $image ): ?>
<br>
<a href="<?php echo $image['caption']; ?>" target="blank">
<img class="img-responsive" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
</a>
<?php endforeach; ?>
<?php endif; ?>
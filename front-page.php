<div id="slider" class="row">
<?php if( have_rows('main_slider','option') ): while ( have_rows('main_slider','option') ) : the_row(); ?>
<?php $image = get_sub_field('main_slider_image'); ?>

  <div>
    <div class="slide">
    <div class="meta text-center">
      <h2><a href="<?php the_sub_field('main_slider_link'); ?>"><?php the_sub_field('main_slider_title'); ?></a></h2>
      <div class="description"><?php the_sub_field('main_slider_description'); ?></div>
    </div>
    <div class="image"><img class="img-responsive" src="<?php echo $image['sizes']['image-huge']; ?>" alt="<?php the_sub_field('main_slider_title'); ?>" /></div>
    </div>
  </div>

<?php endwhile; else : echo 'No Rows' ; endif; ?>
</div>

<div id="about" class="row">
  <div class="col-md-10 col-center text-center">
    <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
    
    <?php endwhile; ?>
  </div>
</div>


<div id="impact" class="row">
  <div class="col-md-10 col-center">  
  <h2 class="section-title text-center"><span><?php the_field('feature_slider_description'); ?></span></h2>

  <?php if( have_rows('feature_slider') ): echo '<div id="impact-slider">'; while ( have_rows('feature_slider') ) : the_row(); ?>
  <?php $icon = get_sub_field('feature_slider_thumbnail'); ?>

  <div class="slide">
  <div class="image">
    <div class="popup"><?php the_sub_field('featured_description'); ?></div>
    <a href="#"><img class="img-responsive" src="<?php echo $icon['sizes']['image-huge']; ?>" /></a>
  </div>
  <h2 class="text-center"><?php the_sub_field('feature_slider_title'); ?></h2>
  </div><!--/Slide-->
  <?php endwhile; echo '</div><!--Impact Slider--> '; ?>
  <?php else : echo 'Bummer, Nothing Here Yet' ; endif; ?>


  </div>
</div><!--Impact-->

<div id="devmap" class="col-md-10 col-center"><div class="row">
  <div class="content col-md-8">
    <div class="holder" data-orientation="horizontal">
      <?php $image1 = get_field('before_image'); ?>
      <?php $image2 = get_field('after_image'); ?>
      <?php if( !empty($image1) ): ?><img class="img-responsive" alt="before" src="<?php the_field('before_image'); ?>" height="1156" width="905" /><?php endif; ?>
      <?php if( !empty($image2) ): ?><img class="img-responsive" alt="after" src="<?php the_field('after_image'); ?>" height="1156" width="905" /><?php endif; ?>
    </div>
  </div>
  <div class="content height col-md-4 text-center">
      <div class="table"><div class="cell">
        <?php the_field('before_after_description'); ?>
      </div></div>
  </div>
</div></div>

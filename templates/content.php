<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title" style="text-align:center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php #get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <div class="entry-thumbnail">
      <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
    </div>
    <?php the_excerpt(); ?>
  </div>
</article>

<style>
  .entry-thumbnail {
    margin-bottom: 20px;
  }
  .entry-thumbnail img {
    display: block;
    max-width: 100%
  }
</style>
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
    <div style="text-align:center"><br><a class="btn green-button" href="<?php the_permalink(); ?>">Read More</a></div>
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
  .green-button {
    color: white;
    background: #29AA50;
  }
  .green-button:hover {
    color: white;
  }
</style>
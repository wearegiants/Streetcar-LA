<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title" style="text-align:center"><?php the_title(); ?></h1>
      <?php # get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <div class="entry-thumbnail">
        <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
      </div>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php #comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

<style>
  .entry-thumbnail {
    margin-bottom: 20px;
  }
  .entry-thumbnail img {
    display: block;
    max-width: 100%
  }
</style>
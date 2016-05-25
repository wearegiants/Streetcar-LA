<?php
/*
Template Name: Downloads
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="col-md-10 col-center text-center">
<?php get_template_part('templates/content', 'page'); ?>
<div class="downloads">
<?php include('lib/acf-flex.php'); ?>
</div>
</div>
<?php endwhile; ?>

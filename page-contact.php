<?php
/*
Template Name: Contact Page
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="col-md-10 col-center">
<?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>

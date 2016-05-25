<?php
/*
Template Name: FAQ
*/
?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="col-md-9 col-center"><?php include('lib/acf-flex.php'); ?></div>
<?php endwhile; ?>

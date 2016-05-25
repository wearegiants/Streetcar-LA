<div class="col-md-11 col-center">
<div class="row">	

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>	
<?php include('lib/acf-flex-wide.php'); ?>

<div class="col-md-6">
<?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>

<div id="page-thumb" class="col-md-6">
<?php include('lib/acf-flex.php'); ?>
</div>

</div>
</div>
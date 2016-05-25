
<div class="page-header text-center">
<h1><span>
	<?php if (is_page()) {
  if (!empty($post->post_parent)) {
   $extradata = $wpdb->get_row("select post_title from wp_posts where ID = " . $post->post_parent);
   echo $extradata->post_title;
  } else {
   echo $post->post_title;
  }
 } else {
  echo "Error";
}
?>
</span></h1>
<?php
if($post->post_parent) {
$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
$titlenamer = get_the_title($post->post_parent);
}

else {
$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
$titlenamer = get_the_title($post->ID);
}
if ($children) { ?>


<ul class="contentnav">
<?php echo $children; ?>
</ul>

<?php } ?>
</div>

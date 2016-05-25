<?php $logo = get_field('site_logo', 'option'); ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">

<div class="row">

  <div id="logo" class="clearfix">
    <div class="col-md-4 col-sm-6 col-xs-10 col-center">
      <a href="/"><img class="img-responsive" src="<?php echo $logo['sizes']['image-huge']; ?>" alt="Los Angeles Streetcar Logo" /></a>
    </div>
  </div>

  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
  </div>

  <nav class="collapse navbar-collapse text-center" role="navigation">
    <?php
    if ( is_front_page() ) {
        if (has_nav_menu('primary_navigation')) : wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav')); endif;
    } else {
        if (has_nav_menu('interior-menu')) : wp_nav_menu(array('theme_location' => 'interior-menu', 'menu_class' => 'nav navbar-nav')); endif;
    }
    ?>
    <?php if (has_nav_menu('social-menu')) : wp_nav_menu(array('theme_location' => 'social-menu', 'menu_class' => 'nav navbar-nav')); endif; ?>
  </nav>

</div>

</header>

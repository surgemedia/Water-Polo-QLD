
<?php get_component([ 'template' => 'atom/footer-scripts' ]); ?>
<footer id="footer" class="content-info">
  <div class="container text-center">
    <?php
      get_component([
              'template' => 'atom/brand',
              'vars' => [
                          'logo' => get_field('logo_long','option'),
                          'width' => 'auto',
                          'height' => '70px',
                          'id' => "footer_logo"
                        ]
        ]);
      ?>
	<span> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br> All Rights Reserved.</span>
  <nav id="footermenu" class="col-md-12 col-sm-12 text-center">
   <?php
    if (has_nav_menu('primary_navigation')) :
       wp_nav_menu(['theme_location' => 'footer_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav list-inline text-center ']);
    endif;
  ?>
  </nav>
  </div>
</footer>

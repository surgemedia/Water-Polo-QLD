<header class="banner hide-print">
  <div id="logowrapper" class="col-md-1 col-xs-12 text-center red-dark-bg padding-4">
    <?php
      get_component([
              'template' => 'atom/brand',
              'vars' => [
                          'logo' => get_field('logo','option'),
                          'width' => '100%',
                          'height' => 'auto',
                          'id' => 'logo'

                        ]
        ]);
      ?>
      </div>
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="toggle-text"></span>
      </button>
  <div id="navbar" class="navbar-collapse collapse">
   
      <nav class="nav-primary col-lg-11 col-lg-offset-1  col-sm-offset-1 col-sm-11 col-md-11 col-md-offset-1 grey-bg">
       <?php
        if (has_nav_menu('primary_navigation')) :
           wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
      ?>

  <div id="loginPopup" class=" red-dark-bg padding-2 hidden-xs hidden-sm">
     <a href="#">Sign In</a>
   </div>
      </nav>
    <nav class="col-lg-11 col-lg-offset-1  col-sm-offset-1 col-sm-11 col-md-10  text-center nav-secondary teal-bg ">
      <?php
        if (has_nav_menu('secondary_navigation')) :
           wp_nav_menu(['theme_location' => 'secondary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
      ?>
    <div id="shopPopup" class=" white-bg padding-2 hidden-xs hidden-sm">
       <a href="<?php echo get_permalink(woocommerce_get_page_id( 'shop' )); ?>"> <i class="icon-shopping-cart"></i></a>
      </div>
    </nav>
    </div>
<ul class="shop-links visible-xs visible-sm">
  <li class="red-dark-bg"><a class="red-dark-bg  padding-2" href="<?php echo get_permalink(woocommerce_get_page_id( 'account' )); ?>">Sign In</a></li>
  <li class="white-bg"><a class="white-bg padding-2" href="<?php echo get_permalink(woocommerce_get_page_id( 'shop' )); ?>"> <i class="icon-shopping-cart"></i></a></li>
</ul>

</header>

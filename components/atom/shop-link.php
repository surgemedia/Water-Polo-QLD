<?php if(class_exists( 'WooCommerce' ) ): ?>
<div id="loginPopup" class=" red-dark-bg padding-2 hidden-xs hidden-sm">
     <a href="#">Sign In</a>
   </div>
      </nav>
<?php endif; ?>
      
    <nav class="col-lg-11 col-lg-offset-1  col-sm-offset-1 col-sm-11 col-md-11 col-md-offset-1  text-center nav-secondary teal-bg ">
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

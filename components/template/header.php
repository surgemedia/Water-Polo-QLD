<header class="banner hide-print">
  <div id="logowrapper" class="col-md-1 col-xs-12 text-center red-dark-bg padding-4">
    <?php 
      get_component([
              'template' => 'atom/brand',
              'vars' => [
                          'logo' => get_field('logo','option'),
                          'width' => '100%',
                          'height' => 'auto',
                        ]
        ]);
      ?>
      </div>
  <div id="navbar" class="">
   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">
      <nav class="nav-primary col-md-11 col-sm-11 grey-bg col-md-offset-1">
       <?php
        if (has_nav_menu('primary_navigation')) :
           wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
      ?>
      
      
   <div id="loginPopup" class=" red-dark-bg padding-2">
     <a href="#">Sign In</a>
   </div>
      </nav>
    <nav class="col-md-11 col-xs-12 text-center nav-secondary teal-bg col-md-offset-1">
      <?php
        if (has_nav_menu('secondary_navigation')) :
           wp_nav_menu(['theme_location' => 'secondary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
      ?>
    <div id="shopPopup" class=" white-bg padding-2">
       <a href=""> <i class="icon-shopping-cart"></i></a>
      </div>
        </nav>
    </div>
    </div>
</div>



</header>
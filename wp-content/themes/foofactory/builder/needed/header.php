<header class="banner">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
   <?php 
  get_component([
        'template' => 'parts/brand',
        'vars' => [
                    'logo' => get_field('logo','option')
                  ]
  ]);
  ?>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <?php
    if (has_nav_menu('primary')) :
       wp_nav_menu(['theme_location' => 'primary', 'menu_class' => 'main-menu']);
    endif;
    ?>
  </div>
</header>
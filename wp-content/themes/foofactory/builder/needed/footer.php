
<footer id="footer" class="content-info clearfix">
  <div class="container">
		 <div class="block-left">
      <p>Proudly developed by</p>  
     <?php 
      get_component([
            'template' => 'parts/brand',
            'vars' => [
                        'logo' => get_field('logo','option')
                      ]
      ]);
      ?>
    </div>
		<div class="block-right"> 
      <div class="info">
        <ul>
          <li>Sydney Display Centre</li>
          <li>xxxx xxx xxx</li>
          <li>1/22 Gadigal Avenue,</li>
          <li>Zetland NSW 2017</li>
        </ul>
      </div>
      <div class="info">
        <ul>
          <li>Brisbane Display Centre</li>
          <li>xxxx xxx xxx</li>
          <li>97 Boundary Street,</li>
          <li>West End QLD 4101</li>
        </ul>
      </div>
      <div class="menu-part">
       <ul class="copyright">
        <li>&copy; Copyright LINK <?php echo date('Y'); ?></li>
       </ul>
       <?php
        if (has_nav_menu('footer')) :
           wp_nav_menu(['theme_location' => 'footer']);
        endif;
        ?>
      </div>
    </div> 
  </div>  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/dist/bundle.css'; ?>" media="screen" title="no title" charset="utf-8">
  <script type="text/javascript" src="<?php echo get_template_directory_uri().'/dist/bundle.js'; ?>" ></script>
</body>
</footer>
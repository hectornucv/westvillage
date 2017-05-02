
<footer id="footer" class="content-info clearfix">
  <div class="container">
		 <?php 
      get_component([
            'template' => 'parts/brand',
            'vars' => [
                        'logo' => get_field('logo','option')
                      ]
      ]);
      ?>
		<span> &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <br> All rights reserved</span> 
    
  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/dist/bundle.css'; ?>" media="screen" title="no title" charset="utf-8">
  <script type="text/javascript" src="<?php echo get_template_directory_uri().'/dist/bundle.js'; ?>" ></script>
</body>
</footer>
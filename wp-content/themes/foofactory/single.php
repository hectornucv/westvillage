<?php wp_head(); ?> 
<?php while ( have_posts() ) : the_post(); ?>
<?php get_component([ 'template' => 'needed/head' ]); ?> 
</head>
<body>
	<div class="banner visible-xs visible-sm" id="mainmenu">
		<nav class="nav-primary">
			<?php
        if (has_nav_menu('primary')) :
           wp_nav_menu(['theme_location' => 'primary', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav ']);
        endif;
        ?>
    </nav>
	</div>
<div id="main">
<?php get_component([ 'template' => 'needed/header' ]); ?>
<?php 
	if (get_field('has_page_heading')) {
				get_component([ 'template' => 'sections/page-heading',
													'vars' => [
																"class" => 'padding-6-top padding-6-bottom background',
																"card" => get_field('card'),
																"background" => get_field('background'),
																]
													 ]);
			}
 ?>
<?php
		// Start the loop.
		
		 	get_component([ 'template' => 'needed/simple-page' ]); 
		
	?>

<?php 	get_component([ 'template' => 'needed/footer' ]); ?>
</div>
<?php endwhile; ?>
	<?php wp_footer(); ?>
</body>
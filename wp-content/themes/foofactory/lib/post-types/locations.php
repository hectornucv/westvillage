<?php
	/*=============================
	=            locations         =
	=============================*/
	$locations = new CPT([
	    'post_type_name' => 'location',
	]);
	$locations->menu_icon("dashicons-groups");
	//Define post type
	$locations->register_taxonomy([
	    'taxonomy_name' => 'location_category',
	]);
	include('fields/locations.php');
	 ?>

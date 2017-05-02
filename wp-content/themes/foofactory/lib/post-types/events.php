<?php
 	/*============================================
	=            CPT - Post Type           =
	============================================*/
	$events = new CPT([
	    'post_type_name' => 'event',
	    'plural' => 'Events',
	]);

	$events->menu_icon("dashicons-calendar-alt");
	//Define post typ
	$events->register_taxonomy([
	    'taxonomy_name' => 'event_category',
	]);
	include('fields/events.php');
	 ?>

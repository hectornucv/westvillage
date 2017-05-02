<div class="molecule related-items">
	<?php
	//debug($vars);
	$vars['args'] = array (
		"post_type" => "any",
		"post__in" => $vars['website_items'],
		"orderby" => "post__in",
	);
	 ?>
	<?php if($vars['feed_type'] == 'feed'){
			// WP_Query arguments
				$vars['args'] = array (
				'post_type'              => array( $vars['website_item_feed'] ),
				'posts_per_page'                  => $vars['number_of_posts'],
				'posts_per_archive_page' => $vars['number_of_posts'],
				'order'                  => 'DESC',
			);
	} ?>
	<?php
	 // The Query
	 $query = new WP_Query( $vars['args'] );
	 // The Loop
	 if ( $query->have_posts() ) {
		 while ( $query->have_posts() ) {
			 $query->the_post();
			 switch (get_post_type()) {
				 case 'staff':
					/*=============================================
				 = Card (Class,Image,Title,Content)
				 = @components
					 + molecule/card
				 =============================================*/
				 get_component([ 'template' => 'molecule/card',
												 'remove_tags'=>['h6'],
												 'vars' => [
															 "class" => 'col-md-6 staff padding-4-top padding-4-bottom ',
															 "title" => get_the_title(),
															 "image" => get_field("image"),
															 "content" => get_the_content(),
															 "button" => [ [
																 						 "class" => "pull-right",
																						 "text" => "More...",
																						 "link" => get_permalink(get_the_id()),
																						 'link_type' => 'internal',
																								 ]
																				 ]
															 ]
													]);
				 break;
				 default:
				 /*=============================================
				 = Card (Class,Image,Title,Subtitle,Content)
				 = @components
					 + molecule/card
				 =============================================*/
				 get_component([ 'template' => 'molecule/card-news',
												 'vars' => [
															 "class" => 'col-md-6 news related-item',
															 "title" => get_the_title(),
															 "image" => get_field("image"),
															 "subtitle" => get_the_date(),
															 "content" => get_truncate(get_the_content(),50,'...'),
															 "button" => [ [
																 							"class" => "pull-right",
																						 "text" => "More...",
																						 "link" => get_permalink(get_the_id()),
																						 'link_type' => 'internal',
																								 ]
																				 ]
															 ]
													]);
							break;
			 } //switch
		 } //while
	 } else {
		 // no posts found
	 }
	 // Restore original Post Data
	 wp_reset_postdata();
			 ?>
 <!-- </div> -->
	  </div>

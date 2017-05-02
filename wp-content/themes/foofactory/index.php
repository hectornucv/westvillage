<?php wp_head(); ?>
<?php get_component([ 'template' => 'needed/head' ]); ?>
</head>
<?php get_component([ 'template' => 'needed/header' ]); ?>
<div class="container padding-5-top">
	<hgroup class="row">
	<h1 class='col-md-9'>News </h1>
	<div class="col-md-3 sidebar">
		<?php get_search_form( true ); ?>
	</div>
      </hgroup>
	<div class="col-md-5 pull-right sidebar">
	<h2 >Categories</h2>
	<div class="category ">
		<?php echo get_the_category_list(); ?>
	</div>
</div>
<div class="col-md-7">
	<?php while (have_posts()) : the_post(); ?>
		<?php switch (get_post_type()) {
				case 'post':
						get_component([ 'template' => 'molecule/card-news-expand',
										'vars' => [ "class" => 'news ',
													"title" => get_the_title(),
													"date" => get_the_date('j M, Y'),
													'comments' => get_comments_number(),
													"image" => get_field("image"),
													"content" => get_truncate(get_the_content(),50,''),
													"button" => [[ "class" => 'btn text-uppercase',
																	"text" => "More...",
																	"internal_link" => get_permalink(),
																	'link_type' => 'internal',
																]]
													]
										]);
				break;
				case 'staff':
						get_component([ 'template' => 'molecule/card',
										'remove_tags'=>['h6'],
										'vars' => [ "class" => 'staff ',
													"title" => get_the_title(),
													"image" => get_field("image"),
													"content" => get_truncate(get_the_content(),25,''),
													"button" => [[ "class" => "pull-right",
																   "text" => "More...",
                                                           "link" => get_permalink(get_the_id()),
                                                           'link_type' => 'internal',
                                                        ]]
        		  						  ]
        		  			]);
         	break;
         	default:
         		get_component([ 'template' => 'molecule/card',
         		 				'vars' => [ "class" => 'news related-item margin-2-bottom',
                                            "title" => get_the_title(),
                     		 				"image" => get_field("image"),
                                            "subtitle" => get_the_date('j F, Y'),
                                            "content" => 'To find out more about this page, click More...',
                                            "button" => [[ "class" => "pull-right",
                                                            "text" => "More...",
                                                            "link" => get_permalink(get_the_id()),
                                                            'link_type' => 'internal',
                                                        ]]
                                        ]
         		 			]);
         	break;
} //switch
?>
		<?php endwhile; ?>
	</div>
</div>
<?php 	get_component([ 'template' => 'needed/footer' ]); wp_footer(); ?>

<?php //debug($vars); ?>
<section class="page-heading <?php echo $vars['class'] ?>" style="background-image:url(<?php echo $vars["background"]; ?>)">

	<?php

			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ elements/card-header
			=============================================*/
			get_component([ 'template' => 'elements/card',
											'remove_tags'=> $vars['card']['remove_elements'],
											'vars' => [
														"class" => 'container page-heading-card',
														"subtitle" => $vars['card']["subtitle"],
														"title" => $vars['card']["title"],
														"image" => $vars['card']["image"],
														"card_background" => $vars['card']["card_background"],
														"image_top" => $vars['card']["image_top"],
														"content" => apply_filters('the_content',  $vars['card']["content"]),
														"button" => $vars['card']['button']
														]
											 ]);
	 ?>

</section>

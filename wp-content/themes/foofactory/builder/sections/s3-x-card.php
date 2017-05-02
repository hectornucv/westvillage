<?php 
	unset($element_file);
	unset($element_vars);
 	//debug($vars);
 ?>

<article class="first card" >
	<div class="wrapper">
	
	 <p class="title"><?php echo $vars['first_card']["title"]?></p>
		
	<?php if(isset($vars['first_card']["content"]) && strlen($vars['first_card']["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars['first_card']["content"]); ?>
		<?php } ?>

	</div>
</article>
<article class="second card" >
	<div class="wrapper">
	
	 <p class="title"><?php echo $vars['second_card']["title"]?></p>
		
	<?php if(isset($vars['second_card']["content"]) && strlen($vars['second_card']["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars['second_card']["content"]); ?>
		<?php } ?>

	</div>
</article>
<article class="third card" >
	<div class="wrapper">
	
	 <p class="title"><?php echo $vars['third_card']["title"]?></p>
		
	<?php if(isset($vars['third_card']["content"]) && strlen($vars['third_card']["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars['third_card']["content"]); ?>
		<?php } ?>

	</div>
</article>
<article class="general-content">
<div class="wrapper">
<?php if(isset($vars["image"]) && strlen($vars["image"]) > 0) { ?>
	<img class="img-responsive" src="<?php echo $vars["image"]?>" alt=""></img>
	<?php } ?>

	<hgroup>
		<h2><?php echo $vars["title"]?></h2>
	</hgroup>

	<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php } ?>

	
		<?php 
		if(isset($vars["button"])){
		get_component([
								'template' => 'parts/button-list',
								'vars' => $vars['button']	
								]);
		} else {
			if(isset($vars["button_list"]['button'])){
				get_component([
								'template' => 'parts/button-list',
								'vars' => $vars["button_list"]['button']
								]);
			}
		};
		?>


		</div>
</article>
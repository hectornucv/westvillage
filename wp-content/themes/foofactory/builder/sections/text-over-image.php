<?php 
	unset($element_file);
	unset($element_vars);
 ?>
<article class="background" style="background-image: url('<?php echo $vars["image"]?>');">
	<div class="wrapper">
		<hgroup>
			<h2><?php echo $vars["title"]?></h2>
			<h3><?php echo $vars["subtitle"]?></h3>
		</hgroup>

	<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
	<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php } ?>

	</div>
</article>
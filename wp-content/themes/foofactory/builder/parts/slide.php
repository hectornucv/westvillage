<div class="slide <?php echo $vars['class'] ?> ">
  <img alt="<?php echo $vars['title']; ?>" class="" src="<?php echo $vars['img']; ?>" width="auto"></img>
  <div class="wrapper">
	  <p class="text-center title">
  	  <?php echo $vars['title'] ?>
  	</p>
  	<?php if(isset($vars["content"]) && strlen($vars["content"]) > 0) { ?>
		<?php echo apply_filters('the_content',  $vars["content"]); ?>
		<?php } ?>
  </div>
</div>
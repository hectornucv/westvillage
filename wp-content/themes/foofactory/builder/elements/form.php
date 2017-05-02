
<div class=" molecule form <?php echo $vars['class'] ?>">
		<h2><?php echo $vars["title"]?></h2>
		<p><?php echo apply_filters('the_content',  $vars["content"]); ?></p>
		<?php if( function_exists( 'ninja_forms_display_form' ) ) { ninja_forms_display_form( $vars["form"]['id'] );}
		?>
</div>

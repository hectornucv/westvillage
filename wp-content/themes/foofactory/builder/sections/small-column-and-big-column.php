<?php
/*=====================================
=            Get Files            =
=====================================*/
//debug($vars);
?>
<?php 
	unset($element_file);
	unset($element_vars);?>

	
	<div class="col-md-4">
		<?php get_picker($vars['columns'][0]);?> 
	</div>

	<div class="col-md-8">
		<?php get_picker($vars['columns'][1]);?> 
	</div>

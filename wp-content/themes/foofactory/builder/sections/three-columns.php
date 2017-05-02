<?php
/*=====================================
=            Get Files            =
=====================================*/
//debug($vars);
?>
<?php 
	unset($element_file);
	unset($element_vars);

	foreach ($vars['columns'] as $column) {?>
		<div class="col-md-4">
			<?php get_picker($column);?> 
		</div>
<?php	}
?>
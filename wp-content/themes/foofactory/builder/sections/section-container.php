<?php 
	//debug($vars);
	unset($element_file);
	unset($element_vars);

	foreach ($vars['element'] as $content) {
		
			$element_file = $content['acf_fc_layout']; //get file
			unset($content['acf_fc_layout']); // remove file from array leveling only vars
			$element_vars = $content;
			get_component([
		 		'template' => 'elements/'.$element_file,
		 		'remove_tags' => $content['remove_elements'],
		 		'vars' => $element_vars
				]);

				unset($element_file);
				unset($element_vars);
		
	}
?>

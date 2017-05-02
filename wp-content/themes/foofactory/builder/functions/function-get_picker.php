<?php 
	function get_picker($vars){
		for ($i=0; $i < sizeof($vars['element']); $i++) {
			$element_file = $vars['element'][$i]['acf_fc_layout']; //get file
			// $vars['element'][$i]['class'] .= ' col-md-12 ';
			get_component([
				'template' => 'elements/'.$element_file,
				'remove_tags' => $vars['element'][$i]['remove_elements'],
				'vars' => $vars['element'][$i]
				]);
		}
	}
?>
<?php  ?>
 	<?php 
		unset($element_file);
		unset($element_vars);
		for ($i=0; $i < sizeof($vars['element']); $i++) { 
			$element_file = $vars['element'][$i]['acf_fc_layout'];
			$remove_elements = $vars['element'][$i]['remove_elements']; //get file
			 //get file
			$vars['element'][0]['class'] = 'col-md-12';
			unset($vars['element'][$i]['acf_fc_layout']); // remove file from array leveling only vars
			$element_vars = $vars['element'][$i];
			get_component([
		 		'template' => 'molecule/'.$element_file,
		 		'remove_tags' => $remove_elements,
		 		'vars' => $element_vars
				]);

				unset($element_file);
				unset($element_vars);
		}
				unset($i);
		
		 ?>

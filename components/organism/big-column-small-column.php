<?php
	/*=====================================
	=            Get Files            =
	=====================================*/
	// debug($vars);
	$element_file_1 = $vars['1_element']['element'][0]['acf_fc_layout']; //get file
	$element_file_2 = $vars['2_element']['element'][0]['acf_fc_layout']; //get file
	if(isset($vars['1_element']['element'][0]['acf_fc_layout'])){
		unset($vars['1_element']['element'][0]['acf_fc_layout']); // remove file from array leveling only vars
		$element_vars_1 = $vars['1_element']['element'][0];
	}
	if(isset($vars['2_element']['element'][0]['acf_fc_layout'])){
		unset($vars['2_element']['element'][0]['acf_fc_layout']); // remove file from array leveling only vars
		$element_vars_2 = $vars['2_element']['element'][0];
	}
	/*==================================
	=            Setup Vars            =
	==================================*/
	?>
		<div class="col-md-8 hidden-xs hidden-sm">
	<?php
	get_component([
	 'template' => 'molecule/'.$element_file_1,
	 'vars' => $element_vars_1
			]);
			?>
	</div>
			
			<div class="col-md-4 col-xs-12">
	<?php
	//Element 2
	get_component([
	 'template' => 'molecule/'.$element_file_2,
	 'vars' => $element_vars_2
			]);
		?>
	</div>

	<div class="col-sm-12 visable-xs visable-sm hidden-md hidden-lg">
	<?php
	get_component([
	 'template' => 'molecule/'.$element_file_1,
	 'vars' => $element_vars_1
			]);
			?>
	</div>
	<?php
	unset($element_file_1);
	unset($element_file_2);
	unset($element_vars_1);
	unset($element_vars_2);

 ?>

<?php
	 // debug($vars);
	/*=====================================
	=            Get Files            =
	=====================================*/
	$element_file_1 = $vars['1_element']['element'][0]['acf_fc_layout']; //get file
	$element_file_2 = $vars['2_element']['element'][0]['acf_fc_layout']; //get file



	unset($vars['1_element']['element'][0]['acf_fc_layout']); // remove file from array leveling only vars
	unset($vars['2_element']['element'][0]['acf_fc_layout']); // remove file from array leveling only vars



	/*==================================
	=            Setup Vars            =
	==================================*/
	$element_vars_1 = $vars['1_element']['element'][0];
	$element_vars_2 = $vars['2_element']['element'][0];


	?>
	<div class="col-md-3 col-xs-12">

		<?php
	//Element 3
	get_component([
	 'template' => 'molecule/events',
	 'vars' => [
	 					'id' => $vars['featured_event']->ID,
	 					'class' => 'white-bg',
	 					'title' => get_the_title($vars['featured_event']->ID),
	 					'start_datetime' => get_field('start_datetime',$vars['featured_event']->ID),
	 					'end_datatime' => get_field('end_datatime',$vars['featured_event']->ID),
	 					'options' => get_field('options',$vars['featured_event']->ID),
	 					'location' => get_field('location',$vars['featured_event']->ID),
	 					'venue_name' => get_field('venue_name',$vars['featured_event']->ID),
	 					'contact_information' => get_field('contact_information',$vars['featured_event']->ID),
	 					'name' => get_field('name',$vars['featured_event']->ID),
	 					'phone' => get_field('phone',$vars['featured_event']->ID),
	 					'email' => get_field('email',$vars['featured_event']->ID),
	 					'external_ticket' => get_field('external_ticket',$vars['featured_event']->ID),
	 					]
			]);
		?>
		</div>
	<div class="col-md-3 col-xs-12">
	<?php
	//Element 1
	get_component([
	 'template' => 'molecule/'.$element_file_1,
	 'remove_tags' => $vars['1_element']['element'][0]['remove_elements'],

	 'vars' => $element_vars_1
			]);
	?>
	</div>
	<div class="col-md-3 col-xs-12">

	<?php
	//Element 2
	get_component([
	 'template' => 'molecule/'.$element_file_2,
	 'remove_tags' => $vars['1_element']['element'][0]['remove_elements'],
	 'vars' => $element_vars_2
			]);
		?>
		</div>


	<div class="col-md-3 col-xs-12">
	<?php
	//Element 4
		get_component([
	 'template' => 'molecule/social-feeds',
	 'vars' => [
	 'facebook' => $vars['facebook'],
	 'twitter' => $vars['twitter'],
	 						]
			]);
	?>
	</div>
	<?php
	unset($element_file_1);
	unset($element_file_2);
	unset($element_file_3);
	unset($element_file_4);


	unset($element_vars_1);
	unset($element_vars_2);
	unset($element_vars_3);
	unset($element_vars_4);



 ?>

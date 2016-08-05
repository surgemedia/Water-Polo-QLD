<section <?php echo $vars['section_id'].' '.$vars['section_classes'].' '.$vars['section_style'] ?>>

<?php

			get_component([ 'template' => 'molecule/image',
												'vars' => [
															"class" => 'col-md-2 pull-left',
															"image" => $vars['1_image'],
															"image_position" => $vars['1_image_position']
												]
											 ]);
?>
<?php
		// debug($vars);
			/*=============================================
			= Card (Class,Image,Title,Content)
			= @components
				+ molecule/card-img-side
			=============================================*/
			get_component([ 'template' => 'molecule/card',
							'remove_tags' =>  $vars['card_remove_elements'],
											'vars' => [
														"class" => 'col-md-8 card',
														"title" => $vars["card_title"],
														"subtitle" => $vars["card_subtitle"],
														"content" => apply_filters('the_content',  $vars["card_content"]),
														"image" => $vars['card_image'],
														"button" => $vars['button']
														]
											 ]);

			
?>
<?php

			get_component([ 'template' => 'molecule/image',
												'vars' => [
															"class" => 'col-md-2 pull-right',
															"image" => $vars['2_image'],
															"image_position" => $vars['2_image_position']
												]
											 ]);
?>
</section>
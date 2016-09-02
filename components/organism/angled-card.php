<?php
		// debug($vars);
			/*=============================================
			= Card (Class,Image,Title,Content)
			= @components
				+ molecule/card-img-side
			=============================================*/
			get_component([ 'template' => 'molecule/image',
												'vars' => [
															"class" => 'col-md-2 pull-left',
															"image" => $vars['left']['image'],
															"image_position" => $vars['left']['']
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
														"title" => $vars["card"]['title'],
														"subtitle" => $vars["card"]["subtitle"],
														"content" => apply_filters('the_content',  $vars["card"]["content"]),
														"image" => $vars['card']['image'],
														"button" => $vars['card']['button']
														]
											 ]);
?>
<?php
			get_component([ 'template' => 'molecule/image',
												'vars' => [
															"class" => 'col-md-2 pull-right',
															"image" => $vars['right']['image'],
															"image_position" => $vars['right']['']
												]
											 ]);
?>

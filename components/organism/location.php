
	<?php
	//debug($vars);
				/*=============================================
				=    Map (Class,Description)
				= @components
					+ molecule/map
				=============================================*/
				get_component([ 'template' => 'molecule/map',
												'vars' => [
															"class" => 'map text-center row ',
															"places" => $vars['places']

															]
												 ]);
	?>
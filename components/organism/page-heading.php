<section class="page-heading <?php echo $vars['class'] ?>" style="background-image:url(<?php echo $vars["background"]; ?>)">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			// if(is_array($vars['button'])){
			// 	$vars['button_array'] = get_component([
			// 													'template' => 'atom/link',
			// 													'return_string' => true,
			// 													'vars' => [
			// 																"class" => 'btn text-uppercase pull-left',
			// 																"text" => $vars['button'][0]['text'],
			// 																"link" => $vars['button'][0]['link'],
			// 																'toggle' => ''
			// 																]
			// 													]);
														
			// }
			get_component([ 'template' => 'molecule/card',
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => $vars["subtitle"],
														"title" => $vars["title"],
														"image" => $vars["image"],
														"content" => apply_filters('the_content',  $vars["content"]),
														"button" => $vars['button']
														]
											 ]);
	 ?>

</section>
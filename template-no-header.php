<?php
/**
 * Template Name: No Page Heading
 */
?>
<?php if ( ! post_password_required() ) { ?>
<div class="">
<?php
$layout_builder = get_field('layout');
//is there block?
if(isset($layout_builder[0])){
foreach ($layout_builder as $key => $value) {
	$section_file = $value['acf_fc_layout'];
	if(isset($section_file)){
	unset($value['acf_fc_layout']); //of section
	//Section Options
	$value["section"] = $section_file;
	$value['section_data'] = get_section_options($value);
	//Call file for display
	echo '<section '.$value['section_data'].'>';
			get_component([
						'template' => 'organism/'.$section_file,
						'vars' => $value
			]);

				}
		echo '</section>';

		unset($section_file);
	}
} else {
	if(is_cart() OR is_woocommerce() OR is_checkout()) {
		get_component([
						'template' => 'template/simple-page',
						'vars' => []
			]);
	} else {
	get_component([
						'template' => 'template/no-section-warning',
						'vars' => []
			]);
	}
}
 ?>
</div>
<?php 
	}else{
	 get_component([
								'template' => 'template/simple-page',
								'vars' => []
					]);
	}
 ?>     
<?php 

	$vars['front_page'] = get_option('page_on_front');
	$vars['builder'] = get_field('layout',$vars['front_page']);
	foreach ($vars['builder'] as $key => $layout) {

		if($layout['acf_fc_layout'] == 'contact'){					
			//Section Options
			$layout["section"] = $layout['acf_fc_layout'];
			$layout['section_data'] = get_section_options($layout);

			//Call file for display
			echo '<section '.$layout['section_data'].'>';
					get_component([
								'template' => 'organism/contact',
								'vars' => $layout
					]);
						
			echo '</section>';
			
		}
	}
	$vars['front_page'] = get_option('page_on_front');
	$vars['builder'] = get_field('layout',$vars['front_page']);
	foreach ($vars['builder'] as $key => $layout) {

		if($layout['acf_fc_layout'] == 'slider'){					
			//Section Options
			$layout["section"] = $layout['acf_fc_layout'];
			$layout['section_data'] = get_section_options($layout);

			//Call file for display
			echo '<section '.$layout['section_data'].'>';
					get_component([
								'template' => 'organism/slider',
								'vars' => $layout
					]);
						
			echo '</section>';
			
		}
	} 

?>
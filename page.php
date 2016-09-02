
<?php

if (is_front_page()){ ?>
<?php
	get_component([ 'template' => 'organism/homepage-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => 'padding-4',
														"element" => get_field('slides')

														]
											 ]);
 ?>
<?php }else{ ?>
<?php
	
	$heading_gap = "heading-gap";
	if(get_field('heading-gap') === false){
		$heading_gap = "heading-gap-top";
	}
	get_component([ 'template' => 'organism/page-heading',
											'remove_tags'=> get_field('remove_elements'),
											'vars' => [
														"class" => '',
														"title" => get_field('title'),
														"subtitle" => get_field('subtitle'),
														"content" => get_field('content'),
														"background" => get_field('background'),
														"image" => get_field('image'),
														"button" => get_field('button_list_button'),
														 "heading-gap" => $heading_gap

														]
											 ]);
	unset($heading_gap);
 ?>
<?php } ?>
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





	if(is_realy_woocommerce_page ()) {
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

<?php 
if (!is_front_page()){
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
}	
?>


</div>

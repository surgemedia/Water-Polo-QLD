
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
	// debug(get_post_meta(get_the_id()));
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

														]
											 ]);
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

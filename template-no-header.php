<?php
/**
 * Template Name: No Page Heading
 */
?>
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

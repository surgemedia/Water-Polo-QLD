<section class="page-heading club <?php echo $vars['class'] ?>" style="background-image:url(<?php echo get_field('additional_image'); ?>)">

<div class="text-center container border-top ">
</div>

<div class="teal-bg">
<div class="container">
	<?php
		//Navigation
 			get_component([
              'template' => 'atom/button-list',
              'vars' => [

										[
											"class" => 'btn blue text-uppercase margin-0-top',
											"text" => "Back to News",
											"internal_link" => '/news',
											'link_type' => 'internal',
											'disabled' => false
										],
										[
											"class" => 'btn blue text-uppercase margin-0-top pull-right',
											"text" => "Next",
											"internal_link" => get_permalink(get_next_post()->ID),
											'link_type' => 'internal',
											'disabled' => (!get_next_post()) ? true : false
										],
										]
              ]);
?>
</div>
</div>
<div class="white-bg margin-0-top margin-10-bottom padding-5-bottom">

	<?php
			/*=============================================
			=    Card Header (Class,Subtitle,Title,Content)
			= @components
				+ molecule/card-header
			=============================================*/
			get_component([ 'template' => 'molecule/card',
											'remove_tags' => ['img'],
											'vars' => [
														"class" => 'card container padding-4',
														"subtitle" => $vars["subtitle"],
														"title" => get_the_title(),
														"content" => apply_filters('the_content',  get_the_content()),
														"button" => $vars['button']
														]
											 ]);
	 ?>
	 </div>
</section>
      
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

?>
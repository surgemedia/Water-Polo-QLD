<?php if ( ! post_password_required() ) { ?>
<section class="page-heading club <?php echo $vars['class'] ?>" style="background-image:url(<?php echo get_field('additional_image'); ?>)">

<div class="text-center container padding-4-bottom padding-4-top">
<img id="club_logo" class="img-circle col-sm-4 col-md-offset-4" src="<?php echo get_field('logo'); ?>" alt="">
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
											"text" => "Back",
											"internal_link" => '/',
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
	 <?php 

$link = get_field('register_link');

if( !empty($link) ):
?>
	 <div class="text-center container padding-4-bottom">
<a class="btn red-dark" href="<?php echo get_field('register_link'); ?>">Register Now</a>
 </div>
<?php endif; ?>
	 <?php 

$location = get_field('map');

if( !empty($location) ):
?>
	 <div class="text-center container">
	
 <h4><strong>Location</strong></h4>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
</div>
	
 </div>
<?php endif; ?>
<?php 
		$website = get_field('website');
		if( !empty($website) ):
	?>
	<div class="text-center container">
		<h4 class="text-center"><strong>Website</strong></h4>
		<p>
		<a href="<?php the_field('website'); ?>"><?php echo explode('//',get_field('website'))[1]; ?></a>
		</p>
	</div>
	<?php endif; ?>
 </div>
</section>
<?php }else{
 get_component([
							'template' => 'template/simple-page',
							'vars' => []
				]);
} ?>
      
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
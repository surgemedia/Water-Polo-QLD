<?php if ( ! post_password_required() ) { ?>
<section class="page-heading club <?php echo $vars['class'] ?>" style="background-image:url(<?php echo get_field('additional_image'); ?>)">
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
														// "button" => $vars['button']
														]
											 ]);
	 ?>

	 <?php 


$location = get_field('location');
?>
<div class="time-info">
	<ul class="list-inline">
		<li><strong>Start Date: </strong><?php echo (new DateTime(get_field("start_datetime")))->format('d M, Y (g:i a)'); ?></li>
		<li><strong>End Date: </strong><?php echo (new DateTime(get_field("end_datetime")))->format('d M, Y (g:i a)') ?></li>
	</ul>
</div>

<?php
switch (get_field("show")) {
	case 'Map':
		
		if( !empty($location) ):
		?>
			 <div class="text-center container">
				<h4><strong>Location: </strong><?php echo get_field("venue_name") ?></h4>
				<div class="acf-map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
			 </div>
		<?php endif; 
		break;
	default:?>
			<div class="text-center container">
				<h4><strong>The Venue: </strong><?php echo get_field("venue_name") ?></h4>
				<h4><strong>Address: </strong><?php echo $location['address']; ?></h4>
			</div>
		<?php
		break;
		}
 
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
 
	<div class="contact-info">
		<h3>Contact Information</h3>
		<ul class="list-unstyled">
			<?php if (!empty(get_field("name"))): ?>
				<li><strong>Name: </strong><?php echo get_field("name");?></li>
			<?php endif ?>
			<?php if (!empty(get_field("phone"))): ?>
				<li><strong>Phone: </strong><?php echo get_field("phone");?></li>
			<?php endif ?>
			<?php if (!empty(get_field("email"))): ?>
				<li><strong>Email: </strong><?php echo get_field("email");?></li>
			<?php endif ?>
			<?php if (!empty(get_field("external_ticket"))): ?>
				<li><strong>External Ticket Location: </strong><?php echo get_field("external_ticket");?></li>
			<?php endif ?>
		</ul>
	</div>

 </div>
</section>
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

?>
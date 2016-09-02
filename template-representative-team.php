<?php
/**
 * Template Name: Representative Team
 */
?>
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


<?php //debug($vars); ?>

<section class="">
	<div>
	 <ul class="nav nav-tabs" role="tablist">
	 <?php $vars['loop_size'] = sizeof($vars['tabs']); ?>
	 <?php for ($i=0; $i < $vars['loop_size']; $i++) { 
	 		$vars['tabs'][$i]['slug'] = rand(); ?>
	    <li role="presentation" class="col-lg-3 col-sm-6 col-xs-12">
				
				<?php 
				get_component([ 'template' => 'molecule/card',
	                      'remove_tags'=>['h6','img'],
	                      'vars' => [
	                            "class" => '',
	                            "title" => $vars['tabs'][$i]['title'],
	                            "content" => truncate($vars['tabs'][$i]['excerpt'],20,"",false),
	                            "button" => array(
	                                ["text" => "Read More",
	                                 "extra-data" => "aria-controls='home' role='tab' data-toggle='tab'",
	                                 "link" => "#".$vars['tabs'][$i]['slug']
	                                ]
	                              )
	                               
	                            ]
	                       ]); ?>
				
	
	
	
	    	
	    </li>
		<?php  } unset($i); ?>
	  </ul>
		
	  <!-- Tab panes -->
	  <div class="tab-content">
	    <?php for ($i=0; $i < $vars['loop_size']; $i++) {  ?>
	      <div role="tabpanel" class="tab-pane <?php //if($i == 0){echo 'active'; } ?>" id="<?php echo $vars['tabs'][$i]['slug']; ?>">
	      <a href="#" class="close-tab"><i class="glyphicon glyphicon-remove"></i></a>
	
	      <?php 
	      //debug($vars['tabs'][$i]['card']);
	      get_component([ 'template' => 'molecule/card',
	                            'remove_tags'=>$vars['tabs'][$i]['card']['remove_elements'],
	                            'vars' => [
	                                  "class" => $vars['tabs'][$i]['card']['class'],
	                                  "title" => $vars['tabs'][$i]['card']['title'],
	                                  "subtitle" => $vars['tabs'][$i]['card']['subtitle'],
	                                  "content" => $vars['tabs'][$i]['card']['content'],
	                                  "button" => $vars['tabs'][$i]['card']['button'],
	                                     
	                                  ]
	                             ]); ?>
	            <div class="show-reveal">
	                             
	            </div>                 
	      </div>
	    <?php } ?>
	  </div>
	</div>
</section>
<?php //} ?>



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
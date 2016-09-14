<article class="<?php echo $vars['class'] ?>  molecule events">
<div class="wrapper">

	<hgroup>
		<h1><?php echo $vars["title"]?></h1>

		<h6><?php echo date("j F Y", strtotime($vars["start_datetime"])); ?></h6>
	</hgroup>
		<?php 
		get_component([
			                                'template' => 'atom/link',
			                                'return_string' => false,
			                                'vars' => [
																						"class" => 'btn text-uppercase',
																						"text" => "Read More",
																						"url" => get_permalink()
																						]
			                                ]);

		?>
<div class="<?php echo $vars['class'] ?> event-list">
		<?php

			  // WP_Query arguments
			$args = array (
			  "post_type" => "event",
			  "posts_per_page" => 4
			);
			//F j, Y g:i a

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
			  while ( $query->have_posts() ) {
			    $query->the_post();
			     /*=============================================
			      = Card (Class,Image,Title,Content)
			      = @components
			        + molecule/card
			      =============================================*/
			      get_component([ 'template' => 'atom/text',
			      								
			                      'vars' => [
			                            "class" => 'col-md-12 text-link text-left',
			                            "content" => date("d/m", strtotime(get_field('start_datetime'))).' '.get_the_title(),
			                            ]
			                       ]);
			  }
			} else {
			  // no posts found
			}

			// Restore original Post Data
			wp_reset_postdata();
			    ?>
		<?php 
		get_component([
			                                'template' => 'atom/link',
			                                'vars' => [
																						"class" => '',
																						"text" => "CLICK HERE for more events",
																						"url" => get_permalink(get_id_from_slug('events'))
																						]
			                                ]);

		?>
	</div>
</article>


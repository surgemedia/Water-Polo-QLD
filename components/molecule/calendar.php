<?php 
		
 ?>
<article class="<?php echo $vars['class'] ?>  molecule calendar">
<select id="type_selector">
  <option value="all">All</option>
  <?php 
  	$categories=array(); //Cateregories inclueded in Calendar Page
			foreach ($vars['calendar_categories'] as $key => $value) {
				array_push($categories,$value->slug);?>
  	<option value="<?php echo $value->slug;?>"><?php echo $value->name;?></option>
		
		<?php	}  ?>
</select>
<?php $vars['target'] = 'calendar'.rand(); ?>
<?php //Required Fullcalendar; http://bootsnipp.com/snippets/xa95R  ?>
<div id="<?php echo $vars['target']; ?>"></div>
<script type="text/javascript">
  var events_<?php echo $vars['target']; ?> = [
	<?php 
				
			
			// debug($categories);
			// WP_Query arguments
			$args = array (
				'post_type' => 'event' ,
				'tax_query' => array(
				     array(
									'taxonomy' => 'event_category',
									'field'    => 'slug',
								  'terms'    => $categories
								    )
				)
			);

			// The Query
			$query = new WP_Query( $args );

			// The Loop
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					$start = new DateTime(get_field('start_datetime'));
					$end = new DateTime(get_field('end_datetime'));
					if(empty($end)){
						$end=$start;
					}
					?>
					{
						id: <?php echo get_the_id(); ?>,
		        title: '<?php echo get_the_title(); ?>',
		        start:  new Date('<?php echo $start->format('Y-m-d H:i:s')?>'),
		        end:  new Date('<?php echo $end->format('Y-m-d H:i:s')?>'),
		        url: '<?php echo get_permalink(); ?>',
		        category:[<?php 
							$post_terms = wp_get_post_terms(get_the_id(),'event_category'); //getting Post's terms
							
							foreach ($post_terms as $term) {
								echo "'".$term->slug."',";
							}
							
		         ?>],
		        allDay: false
		      },

				<?php	}
				} else {
					// no posts found
				}

			// Restore original Post Data
				wp_reset_postdata();
			?>
		];
		jQuery( document ).ready(function() {
			renderCalendar('#<?php echo $vars['target']; ?>',events_<?php echo $vars['target']; ?>);
			jQuery('#type_selector').on('change',function(){
          jQuery('#<?php echo $vars['target']; ?>').fullCalendar('rerenderEvents');
      });
		});
</script>
</article>
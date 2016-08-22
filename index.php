<?php
	get_component([ 'template' => 'organism/page-heading',
											'remove_tags'=> get_field('remove_elements',get_option( 'page_for_posts' )),
											'vars' => [
														"class" => '',
														"title" => get_field('title',get_option( 'page_for_posts' )),
														"subtitle" => get_field('subtitle',get_option( 'page_for_posts' )),
														"content" => get_field('content',get_option( 'page_for_posts' )),
														"background" => get_field('background',get_option( 'page_for_posts' )),
														"image" => get_field('image',get_option( 'page_for_posts' )),
														"button" => get_field('button_list_button',get_option( 'page_for_posts' )),

														]
											 ]);
 ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
 <?php get_component([ 'template' => 'molecule/card',
			                      'vars' => [
			                            "class" => 'col-md-3 style1 teal-bg min-height',
			                            "title" => get_the_title(),
			                            "image" => get_field("image"),
			                            "content" => get_truncate(get_the_content(),25,''),
			                            "button" => [[
                                        "class" => 'btn text-uppercase',
                                        "text" => "Read More",
                                        "internal_link" => get_permalink(),
                                        'link_type' => 'internal',
                                            ]]
                                      
			                            ]
			                       ]);
			 	 ?>
<?php endwhile; ?>
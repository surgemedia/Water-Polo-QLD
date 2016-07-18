 <?php 
 	/*============================================
	=            CPT - Post Type           =
	============================================*/
	if($cpt_enabled['events']){
	$events = new CPT([
	    'post_type_name' => 'event',
	    'plural' => 'Events',
	]);

	$events->menu_icon("dashicons-calendar-alt");
	//Define post typ
	$events->register_taxonomy([
	    'taxonomy_name' => 'event_category',
	]);
	
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array (
	'key' => 'group_578841618363e',
	'title' => 'Events',
	'fields' => array (
		array (
			'key' => 'field_578842026fa71',
			'label' => 'Start : Date/time',
			'name' => 'start_datetime',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 40,
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'd/m/Y g:i a',
			'first_day' => 1,
		),
		array (
			'key' => 'field_578842286fa72',
			'label' => 'End : Date/time',
			'name' => 'end_datatime',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 40,
				'class' => '',
				'id' => '',
			),
			'display_format' => 'd/m/Y g:i a',
			'return_format' => 'd/m/Y g:i a',
			'first_day' => 1,
		),
		array (
			'key' => 'field_5788590a9bc2d',
			'label' => 'Options',
			'name' => 'options',
			'type' => 'checkbox',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 20,
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'All Day' => 'All Day',
				'No End Time' => 'No End Time',
				'Hide Map' => 'Hide Map',
			),
			'default_value' => array (
			),
			'layout' => 'vertical',
			'toggle' => 0,
		),
		array (
			'key' => 'field_5788580c4f3c6',
			'label' => 'Location Information',
			'name' => 'location',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_class' => 'dashicons-location',
		),
		array (
			'key' => 'field_5788435c2593e',
			'label' => 'Location',
			'name' => 'location',
			'type' => 'google_map',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
		array (
			'key' => 'field_578843472593d',
			'label' => 'Venue Name',
			'name' => 'venue_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => 50,
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_578858404f3c7',
			'label' => 'Contact Information',
			'name' => 'contact_information',
			'type' => 'accordion',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_class' => 'dashicons-phone',
		),
		array (
			'key' => 'field_57884676b076a',
			'label' => 'Name',
			'name' => 'name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5788467ab076b',
			'label' => 'Phone',
			'name' => 'phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_5788468cb076c',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
		array (
			'key' => 'field_57884413b0768',
			'label' => 'External Ticket location',
			'name' => 'external_ticket',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'readonly' => 0,
			'disabled' => 0,
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'event',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
	}
/*=============================
=            Testimonials            =
=============================*/

	if($cpt_enabled['testimonials']){
	$testimonials = new CPT([
	    'post_type_name' => 'testimonial',
	]);
	$testimonials->menu_icon("dashicons-editor-quote");
	//Define post type
	$testimonials->register_taxonomy([
	    'taxonomy_name' => 'testimonial_category',
	]);
	}

/*=============================
=            TEAMS            =
=============================*/

	if($cpt_enabled['representative_teams']){
	$testimonials = new CPT([
	    'post_type_name' => 'representative_team',
	]);
	$testimonials->menu_icon("dashicons-nametag");
	//Define post type
	$testimonials->register_taxonomy([
	    'taxonomy_name' => 'representative_teams_category',
	]);
	}



	/*=============================
	=            CLUBS            =
	=============================*/
	if($cpt_enabled['clubs']){
	$testimonials = new CPT([
	    'post_type_name' => 'club',
	]);
	$testimonials->menu_icon("dashicons-groups");
	//Define post type
	$testimonials->register_taxonomy([
	    'taxonomy_name' => 'club_category',
	]);
	if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_578877343cec9',
	'title' => 'Clubs',
	'fields' => array (
		array (
			'key' => 'field_5788773b5fa5a',
			'label' => 'Logo',
			'name' => 'logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_578877525fa5b',
			'label' => 'Additional Image',
			'name' => 'additional_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array (
			'key' => 'field_578877e25fa5c',
			'label' => 'Map',
			'name' => 'map',
			'type' => 'google_map',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'club',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
	}
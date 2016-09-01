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
	    'plural' => 'event categories',
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
	    'plural' => 'testimonial categories',

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
	    'plural' => 'Representative Teams categories',

	]);
	}

/*=============================
=            TEAMS            =
=============================*/

	if($cpt_enabled['galleries']){
	$testimonials = new CPT([
	    'post_type_name' => 'gallery',
	    'plural' => 'Galleries',

	]);
	$testimonials->menu_icon("dashicons-format-gallery");
	//Define post type

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
	// $testimonials->register_taxonomy([
	//     'taxonomy_name' => 'club_category',
	//     'plural' => 'Club categories',


	// ]);
	}
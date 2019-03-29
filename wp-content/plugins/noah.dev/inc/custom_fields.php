<?
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5c9e623ca76f7',
	'title' => 'Project Selection',
	'fields' => array(
		array(
			'key' => 'field_5c9e624acdf4f',
			'label' => 'Project',
			'name' => 'project',
			'type' => 'relationship',
			'instructions' => 'Select the project that this post is associated with.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'slug',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'elements' => '',
			'min' => '',
			'max' => 1,
			'return_format' => 'id',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'left',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
<?
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_65e11c14c9e0c',
	'title' => 'How To List',
	'fields' => array(
		array(
			'key' => 'field_65e11c1ddfe35',
			'label' => 'List Style',
			'name' => 'list_style',
			'aria-label' => '',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'numeric' => 'Num Icon',
				'check' => '✓ Icon',
			),
			'default_value' => 'numeric',
			'return_format' => 'value',
			'allow_null' => 0,
			'layout' => 'horizontal',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'lb/how-to-list',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
) );
} );


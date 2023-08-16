<?/* Options page with settings for
- disclaimer in footer */
add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
	'key' => 'group_64dcad0005b06',
	'title' => 'Template Settings',
	'fields' => array(
		array(
			'key' => 'field_64dcacfec6eee',
			'label' => 'Footer disclaimer',
			'name' => 'sett_footer_disclaimer',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'tpl-settz',
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

add_action( 'acf/init', function() {
	acf_add_options_page( array(
	'page_title' => 'Template Settings',
	'menu_slug' => 'tpl-settz',
	'position' => '',
	'redirect' => false,
) );
} );


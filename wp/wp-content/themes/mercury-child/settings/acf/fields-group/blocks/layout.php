<?
add_action('acf/include_fields', function () {
  if (! function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_66ccee19c6355',
    'title' => 'Layout',
    'fields' => array(
      array(
        'key' => 'field_66ccf0cb2524a',
        'label' => 'Variant',
        'name' => 'variant',
        'aria-label' => '',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'thin-content' => 'Thin Content',
          'full-content' => 'Full Size Content',
          'with-sidebar' => 'With Sidebar',
        ),
        'default_value' => 'thin-content',
        'return_format' => 'value',
        'multiple' => 0,
        'allow_null' => 0,
        'ui' => 0,
        'ajax' => 0,
        'placeholder' => '',
        'allow_custom' => 0,
        'search_placeholder' => '',
      ),
      array(
        'key' => 'field_66ccee1aa0d7b',
        'label' => 'Widget',
        'name' => 'widget_id',
        'aria-label' => '',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_66ccf0cb2524a',
              'operator' => '==',
              'value' => 'with-sidebar',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'default_sidebar' => 'Default Sidebar',
          'secondary_sidebar' => 'Listing Sidebar',
        ),
        'default_value' => false,
        'return_format' => 'value',
        'multiple' => 0,
        'allow_null' => 0,
        'ui' => 0,
        'ajax' => 0,
        'placeholder' => '',
        'allow_custom' => 0,
        'search_placeholder' => '',
      ),
      array(
        'key' => 'field_66ccf24bfb29e',
        'label' => 'Background Color',
        'name' => 'background_color',
        'aria-label' => '',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'white' => 'White',
          'gray' => 'Gray',
        ),
        'default_value' => false,
        'return_format' => 'value',
        'multiple' => 0,
        'allow_null' => 0,
        'ui' => 0,
        'ajax' => 0,
        'placeholder' => '',
        'allow_custom' => 0,
        'search_placeholder' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/layout',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'left',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
    'acfe_display_title' => '',
    'acfe_autosync' => '',
    'acfe_form' => 0,
    'acfe_meta' => '',
    'acfe_note' => '',
  ));
});

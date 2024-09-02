<?
add_action('acf/include_fields', function () {
  if (! function_exists('acf_add_local_field_group')) {
    return;
  }

  $icons = [];

    foreach (ICON_LIST as $k => $v) {  
    $icons[$k] = '<i class="icon-' . $k . '"></i> ' . $v;  
    }

  acf_add_local_field_group(array(
    'key' => 'group_66d48cacd4d07',
    'title' => 'Link With Icon List',
    'fields' => array(
      array(
        'key' => 'field_66d48cadb017e',
        'label' => 'List',
        'name' => 'list',
        'aria-label' => '',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'acfe_repeater_stylised_button' => 0,
        'layout' => 'table',
        'pagination' => 0,
        'min' => 0,
        'max' => 0,
        'collapsed' => '',
        'button_label' => 'Add Row',
        'rows_per_page' => 20,
        'sub_fields' => array(
          array(
            'key' => 'field_66d48d6cb017f',
            'label' => 'Icon',
            'name' => 'icon',
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
            'choices' => $icons,
            'default_value' => false,
            'return_format' => 'value',
            'multiple' => 0,
            'allow_custom' => 0,
            'search_placeholder' => '',
            'allow_null' => 0,
            'ui' => 1,
            'ajax' => 1,
            'placeholder' => '',
            'parent_repeater' => 'field_66d48cadb017e',
          ),
          array(
            'key' => 'field_66d48d84b0180',
            'label' => 'Link',
            'name' => 'link',
            'aria-label' => '',
            'type' => 'acfe_advanced_link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => '',
            'taxonomy' => '',
            'parent_repeater' => 'field_66d48cadb017e',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/link-with-icon-list',
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

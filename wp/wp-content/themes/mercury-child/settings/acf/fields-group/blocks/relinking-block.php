<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_66ae39e172e4f',
    'title' => 'Block: Relinking Block',
    'fields' => array(
      array(
        'key' => 'field_66ae39fa4061b',
        'label' => 'Relinking List',
        'name' => 'relinking_list',
        'aria-label' => '',
        'type' => 'post_object',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'relinking_block',
        ),
        'post_status' => '',
        'taxonomy' => '',
        'return_format' => 'id',
        'multiple' => 0,
        'save_custom' => 0,
        'save_post_status' => 'publish',
        'acfe_bidirectional' => array(
          'acfe_bidirectional_enabled' => '0',
        ),
        'allow_null' => 0,
        'bidirectional' => 0,
        'ui' => 1,
        'bidirectional_target' => array(),
        'save_post_type' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/relinking-list',
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

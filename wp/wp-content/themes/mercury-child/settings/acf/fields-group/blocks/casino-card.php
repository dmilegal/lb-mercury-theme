<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_65f08387312b8',
    'title' => 'Casino Card',
    'fields' => array(
      array(
        'key' => 'field_65f083875c1e2',
        'label' => 'Casino',
        'name' => 'casino',
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
          0 => 'casino',
        ),
        'post_status' => array(
          0 => 'publish',
          1 => 'draft',
        ),
        'taxonomy' => '',
        'return_format' => 'id',
        'multiple' => 0,
        'allow_null' => 0,
        'bidirectional' => 0,
        'ui' => 1,
        'bidirectional_target' => array(),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/casino-card',
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
  ));
});

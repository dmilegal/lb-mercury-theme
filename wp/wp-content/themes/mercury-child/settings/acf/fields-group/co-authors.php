<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_65a6cbe25552f',
    'title' => 'Co-Authors',
    'fields' => array(
      array(
        'key' => 'field_65a6ccad8d098',
        'label' => 'Co-Authors',
        'name' => 'co-authors',
        'aria-label' => '',
        'type' => 'user',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'role' => '',
        'return_format' => 'id',
        'multiple' => 1,
        'allow_null' => 0,
        'bidirectional' => 0,
        'bidirectional_target' => array(),
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
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'news',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
});

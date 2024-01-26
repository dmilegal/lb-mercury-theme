<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_65b37a86de300',
    'title' => 'Casino Selection',
    'fields' => array(
      array(
        'key' => 'field_65b37a87cc50b',
        'label' => 'Casino List',
        'name' => 'casino_list',
        'aria-label' => '',
        'type' => 'relationship',
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
        ),
        'taxonomy' => '',
        'filters' => array(
          0 => 'search',
          1 => 'post_type',
          2 => 'taxonomy',
        ),
        'return_format' => 'id',
        'min' => '',
        'max' => '',
        'elements' => '',
        'bidirectional' => 0,
        'bidirectional_target' => array(),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'page_template',
          'operator' => '==',
          'value' => 'page-templates/selection.php',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
});

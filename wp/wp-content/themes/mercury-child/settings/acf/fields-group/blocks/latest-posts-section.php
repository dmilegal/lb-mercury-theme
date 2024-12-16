<?
add_action('acf/include_fields', function () {
  if (! function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_67475695dc1f0',
    'title' => 'Latest Posts Section',
    'fields' => array(
      array(
        'key' => 'field_674756963c8ba',
        'label' => 'Title',
        'name' => 'title',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'maxlength' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_674756aa3c8bb',
        'label' => 'Custom posts',
        'name' => 'enable_custom_posts',
        'aria-label' => '',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_6747574d3c8bc',
        'label' => 'Posts',
        'name' => 'custom_posts',
        'aria-label' => '',
        'type' => 'relationship',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_674756aa3c8bb',
              'operator' => '==',
              'value' => '1',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'post_type' => array(
          0 => 'post',
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
        'acfe_bidirectional' => array(
          'acfe_bidirectional_enabled' => '0',
        ),
        'min' => 1,
        'max' => 3,
        'elements' => '',
        'bidirectional' => 0,
        'bidirectional_target' => array(),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/latest-posts-section',
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

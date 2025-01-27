<?
add_action('acf/include_fields', function () {
  if (! function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_66fd92fcd3396',
    'title' => 'Card Setting',
    'fields' => array(
      array(
        'key' => 'field_66fd92fdb758d',
        'label' => 'Card Custom Title',
        'name' => 'card_custom_title',
        'aria-label' => '',
        'type' => 'text',
        'instructions' => 'Custom Title for the review cards',
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
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'casino',
        ),
      ),
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'bookmaker',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
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

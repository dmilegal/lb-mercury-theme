<?
add_action('acf/include_fields', function () {
  if (! function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_67448e8c99d19',
    'title' => 'Container Size',
    'fields' => array(
      array(
        'key' => 'field_67448e8d8d92b',
        'label' => 'Container Size',
        'name' => 'container_size',
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
          'sm' => 'sm',
          'md' => 'md',
        ),
        'default_value' => 'md',
        'return_format' => 'value',
        'multiple' => 0,
        'allow_custom' => 0,
        'placeholder' => '',
        'search_placeholder' => '',
        'allow_null' => 0,
        'ui' => 0,
        'ajax' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/text-banner',
        ),
      ),
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/hero-features-banner',
        ),
      ),
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/feature-grid',
        ),
      ),
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/latest-posts-section',
        ),
      ),
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/contact-info-section',
        ),
      ),
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'lb/team-section',
        ),
      ),
    ),
    'menu_order' => 100,
    'position' => 'side',
    'style' => 'seamless',
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

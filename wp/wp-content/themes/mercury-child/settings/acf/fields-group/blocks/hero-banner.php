<?
add_action('acf/include_fields', function () {
  if (! function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_66cf9a1c7981e',
    'title' => 'Hero Banner',
    'fields' => array(
      array(
        'key' => 'field_66cf9a1c1685b',
        'label' => 'Custom Title',
        'name' => 'custom_title',
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
        'key' => 'field_66cfaab195e44',
        'label' => 'Subtitle',
        'name' => 'subtitle',
        'aria-label' => '',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'acfe_textarea_code' => 0,
        'maxlength' => '',
        'rows' => '',
        'placeholder' => '',
        'new_lines' => '',
      ),
      array(
        'key' => 'field_66cf9aac1685c',
        'label' => 'Content',
        'name' => 'content',
        'aria-label' => '',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'acfe_textarea_code' => 0,
        'maxlength' => '',
        'rows' => '',
        'placeholder' => '',
        'new_lines' => '',
      ),
      array(
        'key' => 'field_66cf9ab31685d',
        'label' => 'Relinking Block',
        'name' => 'relinking_block',
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
      array(
        'key' => 'field_66cfa0f9487a1',
        'label' => 'Text Align',
        'name' => 'text_align',
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
          'left' => 'Left',
          'center' => 'Center',
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
        'key' => 'field_66cfa118487a2',
        'label' => 'Show Published Date',
        'name' => 'show_published_date',
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
        'key' => 'field_42coi11856gew',
        'label' => 'Show Author',
        'name' => 'show_author',
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
        'key' => 'field_66cfa36a7e0c4',
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
        'default_value' => 'white',
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
          'value' => 'lb/hero-banner',
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

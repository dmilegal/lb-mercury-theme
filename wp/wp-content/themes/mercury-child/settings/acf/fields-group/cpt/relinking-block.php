<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_6694fb7f85483',
    'title' => 'Relinking block',
    'fields' => array(
      array(
        'key' => 'field_66950673edc69',
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
        'key' => 'field_6695067eedc6a',
        'label' => 'Theme',
        'name' => 'theme',
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
          'with-icon' => 'Icon list',
          'with-image' => 'Image List',
          'with-arrow' => 'Arrow List',
          'only-text' => 'Text List',
          'with-primary-image' => 'Primary Image List',
          'block-links' => 'Block Links',
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
        'key' => 'field_66a6681e87b09',
        'label' => 'Enable Limit',
        'name' => 'enable_limit',
        'aria-label' => '',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '!=',
              'value' => 'with-primary-image',
            ),
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '!=',
              'value' => 'block-links',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '50',
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
        'key' => 'field_66950f4cedc6b',
        'label' => 'Number to Show',
        'name' => 'number_to_show',
        'aria-label' => '',
        'type' => 'number',
        'instructions' => 'If not specified, the default count will be used',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_66a6681e87b09',
              'operator' => '==',
              'value' => '1',
            ),
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '!=',
              'value' => 'with-primary-image',
            ),
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '!=',
              'value' => 'block-links',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'min' => 0,
        'max' => '',
        'placeholder' => '',
        'step' => '',
        'prepend' => '',
        'append' => '',
      ),
      array(
        'key' => 'field_66aacfe9b1740',
        'label' => 'Only On Mobile Slider',
        'name' => 'only_mobile_slider',
        'aria-label' => '',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '==',
              'value' => 'with-primary-image',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 1,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_6694fb7fedc65',
        'label' => 'List',
        'name' => 'list',
        'aria-label' => '',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '!=',
              'value' => 'block-links',
            ),
          ),
        ),
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
            'key' => 'field_66950032edc67',
            'label' => 'Icon',
            'name' => 'icon',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_6695067eedc6a',
                  'operator' => '==',
                  'value' => 'with-icon',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'id',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'preview_size' => 'medium',
            'uploader' => '',
            'acfe_thumbnail' => 0,
            'parent_repeater' => 'field_6694fb7fedc65',
          ),
          array(
            'key' => 'field_66a937638cb64',
            'label' => 'Image',
            'name' => 'image',
            'aria-label' => '',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_6695067eedc6a',
                  'operator' => '==',
                  'value' => 'with-image',
                ),
              ),
              array(
                array(
                  'field' => 'field_6695067eedc6a',
                  'operator' => '==',
                  'value' => 'with-primary-image',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'id',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
            'preview_size' => 'medium',
            'uploader' => '',
            'acfe_thumbnail' => 0,
            'parent_repeater' => 'field_6694fb7fedc65',
          ),
          array(
            'key' => 'field_66acbe1fd0ad7',
            'label' => 'Link',
            'name' => 'link',
            'aria-label' => '',
            'type' => 'group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_66acbe1fd0add',
                'label' => 'Link Type',
                'name' => 'link_type',
                'aria-label' => '',
                'type' => 'button_group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'choices' => array(
                  'post-link' => 'Post Link',
                  'tax-link' => 'Taxonomy Link',
                ),
                'default_value' => 'post-link',
                'return_format' => 'value',
                'allow_null' => 0,
                'layout' => 'horizontal',
              ),
              array(
                'key' => 'field_66acbe1fd0ade',
                'label' => 'Post Link',
                'name' => 'post_link',
                'aria-label' => '',
                'type' => 'post_object',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_66acbe1fd0add',
                      'operator' => '==',
                      'value' => 'post-link',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'post_type' => '',
                'post_status' => '',
                'taxonomy' => '',
                'return_format' => 'id',
                'multiple' => 0,
                'allow_null' => 0,
                'bidirectional' => 0,
                'ui' => 1,
                'bidirectional_target' => array(),
                'save_custom' => 0,
                'save_post_type' => '',
                'save_post_status' => '',
              ),
              array(
                'key' => 'field_66acbe1fd0adf',
                'label' => 'Taxonomy Link',
                'name' => 'taxonomy_link',
                'aria-label' => '',
                'type' => 'acfe_taxonomy_terms',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                  array(
                    array(
                      'field' => 'field_66acbe1fd0add',
                      'operator' => '==',
                      'value' => 'tax-link',
                    ),
                  ),
                ),
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'taxonomy' => '',
                'allow_terms' => '',
                'allow_level' => '',
                'field_type' => 'select',
                'default_value' => array(),
                'return_format' => 'id',
                'ui' => 0,
                'allow_null' => 0,
                'multiple' => 0,
                'save_terms' => 0,
                'load_terms' => 0,
                'choices' => array(),
                'ajax' => 0,
                'placeholder' => '',
                'search_placeholder' => '',
                'layout' => '',
                'toggle' => 0,
                'allow_custom' => 0,
                'other_choice' => 0,
              ),
            ),
            'acfe_seamless_style' => 0,
            'acfe_group_modal' => 0,
            'acfe_group_modal_close' => 0,
            'acfe_group_modal_button' => '',
            'acfe_group_modal_size' => 'large',
            'parent_repeater' => 'field_6694fb7fedc65',
          ),
          array(
            'key' => 'field_669510ab59d36',
            'label' => 'Custom title',
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
            'parent_repeater' => 'field_6694fb7fedc65',
          ),
        ),
      ),
      array(
        'key' => 'field_66aca18c0ae46',
        'label' => 'Block List',
        'name' => 'block_list',
        'aria-label' => '',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_6695067eedc6a',
              'operator' => '==',
              'value' => 'block-links',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'acfe_repeater_stylised_button' => 0,
        'layout' => 'block',
        'pagination' => 0,
        'min' => 0,
        'max' => 0,
        'collapsed' => '',
        'button_label' => 'Add Row',
        'rows_per_page' => 20,
        'sub_fields' => array(
          array(
            'key' => 'field_66aca1cc0ae48',
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
            'parent_repeater' => 'field_66aca18c0ae46',
          ),
          array(
            'key' => 'field_66aca7da0ae49',
            'label' => 'Link List',
            'name' => 'link_list',
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
            'layout' => 'table',
            'pagination' => 0,
            'min' => 0,
            'max' => 0,
            'collapsed' => '',
            'button_label' => 'Add Row',
            'rows_per_page' => 20,
            'sub_fields' => array(
              array(
                'key' => 'field_66acbda4e14c9',
                'label' => 'Link',
                'name' => 'link',
                'aria-label' => '',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                  array(
                    'key' => 'field_66acbda4e14cf',
                    'label' => 'Link Type',
                    'name' => 'link_type',
                    'aria-label' => '',
                    'type' => 'button_group',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                      array(
                        array(
                          'field' => 'field_66950673edc69',
                          'operator' => '!=empty',
                        ),
                      ),
                    ),
                    'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'choices' => array(
                      'post-link' => 'Post Link',
                      'tax-link' => 'Taxonomy Link',
                    ),
                    'default_value' => 'post-link',
                    'return_format' => 'value',
                    'allow_null' => 0,
                    'layout' => 'horizontal',
                  ),
                  array(
                    'key' => 'field_66acbda4e14d0',
                    'label' => 'Post Link',
                    'name' => 'post_link',
                    'aria-label' => '',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                      array(
                        array(
                          'field' => 'field_66acbda4e14cf',
                          'operator' => '==',
                          'value' => 'post-link',
                        ),
                      ),
                    ),
                    'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'post_type' => '',
                    'post_status' => '',
                    'taxonomy' => '',
                    'return_format' => 'id',
                    'multiple' => 0,
                    'allow_null' => 0,
                    'bidirectional' => 0,
                    'ui' => 1,
                    'bidirectional_target' => array(),
                    'save_custom' => 0,
                    'save_post_type' => '',
                    'save_post_status' => '',
                  ),
                  array(
                    'key' => 'field_66acbda4e14d1',
                    'label' => 'Taxonomy Link',
                    'name' => 'taxonomy_link',
                    'aria-label' => '',
                    'type' => 'acfe_taxonomy_terms',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                      array(
                        array(
                          'field' => 'field_66acbda4e14cf',
                          'operator' => '==',
                          'value' => 'tax-link',
                        ),
                      ),
                    ),
                    'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'taxonomy' => '',
                    'allow_terms' => '',
                    'allow_level' => '',
                    'field_type' => 'select',
                    'default_value' => array(),
                    'return_format' => 'id',
                    'ui' => 0,
                    'allow_null' => 0,
                    'multiple' => 0,
                    'save_terms' => 0,
                    'load_terms' => 0,
                    'choices' => array(),
                    'ajax' => 0,
                    'placeholder' => '',
                    'search_placeholder' => '',
                    'layout' => '',
                    'toggle' => 0,
                    'allow_custom' => 0,
                    'other_choice' => 0,
                  ),
                ),
                'acfe_seamless_style' => 0,
                'acfe_group_modal' => 0,
                'acfe_group_modal_close' => 0,
                'acfe_group_modal_button' => '',
                'acfe_group_modal_size' => 'large',
                'parent_repeater' => 'field_66aca7da0ae49',
              ),
              array(
                'key' => 'field_66aca8410ae4b',
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
                'parent_repeater' => 'field_66aca7da0ae49',
              ),
            ),
            'acfe_repeater_stylised_button' => 0,
            'parent_repeater' => 'field_66aca18c0ae46',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'relinking_block',
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
    'acfe_display_title' => '',
    'acfe_autosync' => '',
    'acfe_form' => 0,
    'acfe_meta' => '',
    'acfe_note' => '',
  ));
});
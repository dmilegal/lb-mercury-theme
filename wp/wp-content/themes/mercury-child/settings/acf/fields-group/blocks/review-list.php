<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  $params = getReviewListGroupParams('_block');
  $params['location'] = array(
    array(
      array(
        'param' => 'block',
        'operator' => '==',
        'value' => 'lb/casino-list',
      ),
    ),
  );

  $params['fields'][0]['sub_fields'] = [
    array(
      'key' => 'field_66fb48ceb3cff4',
      'label' => 'Listing',
      'name' => '',
      'aria-label' => '',
      'type' => 'tab',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
      'selected' => 0,
    ),
    array(
      'key' => 'field_65d677e68edce_block',
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
      'key' => 'field_643ta27b45kda_block',
      'label' => 'Show Post Info',
      'name' => 'show_post_info',
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
      'key' => 'field_888fg54b17kga_block',
      'label' => 'Show Bonus Category Filter',
      'name' => 'show_bonus_category_filter',
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
      'key' => 'field_65f0a10fa39d9',
      'label' => 'Card Variant',
      'name' => 'card_variant',
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
        'default' => 'Default',
        'compact-review-bonus' => 'Compact review bonus',
        'bonus-card' => 'Bonus card',
      ),
      'default_value' => 'default',
      'return_format' => 'value',
      'multiple' => 0,
      'allow_null' => 0,
      'ui' => 0,
      'ajax' => 0,
      'placeholder' => '',
    ),
    ...$params['fields'][0]['sub_fields']
  ];

  acf_add_local_field_group($params);
});

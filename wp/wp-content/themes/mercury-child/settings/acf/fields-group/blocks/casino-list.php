<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  $params = getCasinoListGroupParams('_block');
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
        'compact-casino-bonus' => 'Compact casino bonus',
      ),
      'default_value' => 'default',
      'return_format' => 'value',
      'multiple' => 0,
      'allow_null' => 0,
      'ui' => 0,
      'ajax' => 0,
      'placeholder' => '',
    ),
    array(
      'key' => 'field_65f0a27ba39da',
      'label' => 'Disable pagination',
      'name' => 'disable_pagination',
      'aria-label' => '',
      'type' => 'true_false',
      'instructions' => 'Attention! The entire list will be displayed at once.',
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
    ...$params['fields'][0]['sub_fields']
  ];

  acf_add_local_field_group($params);
});

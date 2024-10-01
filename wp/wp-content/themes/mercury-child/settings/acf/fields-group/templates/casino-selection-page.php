<?
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  $params = getReviewListGroupParams('_tpl');
  
  $params['location'] = array(
    array(
      array(
        'param' => 'page_template',
        'operator' => '==',
        'value' => 'page-templates/selection.php',
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
        'width' => '200px',
        'class' => '',
        'id' => '',
      ),
      'placement' => 'top',
      'endpoint' => 0,
      'selected' => 0,
    ),
    array(
      'key' => 'field_65d677e68edce',
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
      'key' => 'field_643ta27b45kda',
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
    ...$params['fields'][0]['sub_fields']
  ];

  acf_add_local_field_group($params);
});

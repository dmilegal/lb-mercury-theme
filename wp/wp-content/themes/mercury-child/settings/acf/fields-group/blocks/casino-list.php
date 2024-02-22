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

  acf_add_local_field_group($params);
});

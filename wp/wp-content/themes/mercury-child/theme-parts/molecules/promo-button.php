<?
$id = $args['id'] ?? uniqid('tp');

get_template_part('theme-parts/atoms/button', null, [
  ...$args,
  'className' => 'lb-promo-button ' . ($args['className'] ?? ''),
  'data' => [
    'code' => $args['code'] ?? '',
    'text' => __('Copied!', 'mercury-child')
  ],
  'aria' => [
    'describedby' => $id
  ]
]);
/*get_template_part('theme-parts/atoms/tooltip', null, [
  'content' => __('Copied!', 'mercury-child'),
  'size' => 'sm',
  'id' => $id,
]);*/


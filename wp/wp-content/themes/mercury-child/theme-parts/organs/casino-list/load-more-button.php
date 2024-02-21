<?
get_template_part('theme-parts/atoms/button', null, [
	'size' => 'xl',
	'variant' => 'outlined',
	'content' => __('Show more', 'mercury-child'),
  'className' => 'lb-casino-list__load-more',
  'is_loading' => true,
  'data' => [
    'current-page' => $args['current_page'] ?? '',
    'total-pages' =>  $args['total_pages'] ?? '',
    'query' => $args['query_string'] ?? '',
  ]
]);

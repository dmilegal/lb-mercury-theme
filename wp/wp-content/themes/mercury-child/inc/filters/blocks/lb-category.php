<?
add_filter('block_categories_all', function ($categories) {

  return [[
    'slug'  => 'lb-main',
    'title' => 'LB Blocks'
  ], ...$categories];
});

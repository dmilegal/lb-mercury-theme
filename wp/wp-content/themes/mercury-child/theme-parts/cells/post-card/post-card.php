<?
$variant = $args['variant'] ?? 'default';

get_template_part("theme-parts/cells/post-card/$variant", null, [
  ...$args
]);

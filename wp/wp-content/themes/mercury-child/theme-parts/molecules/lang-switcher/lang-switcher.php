<?
$variant = $args['variant'] ?? 'default';

if ($variant == 'default') {
  get_template_part("theme-parts/molecules/lang-switcher/$variant", null, [
    ...$args
  ]);
}
<?
$className = $args['className'] ?? '';
$icon = $args['icon'] ?? '';

get_template_part('theme-parts/molecules/featured-icon', null, [
  'tag' => 'button',
  'size' => 'md',
  'className' => classNames('lb-slider-nav lb-slider-nav--theme_rsm', $className),
  'variant' => 'contained-light',
  'color' => 'gray',
  'icon' => $icon
]);

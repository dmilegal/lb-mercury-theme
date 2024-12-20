<?
$className = $args['className'] ?? '';
$color = $args['color'] ?? 'gray';
$icon = $args['icon'] ?? '';
$variant = $args['variant'] ?? 'outlined';
$size = $args['size'] ?? 'md';

switch ($icon) {
  case 'facebook':
    $icon = 'icon-facebook-solid';
    break;
  case 'twitter':
    $icon = 'icon-twitter-solid';
    break;
  case 'linkedin':
    $icon = 'icon-linkedin-solid';
    break;
  case 'instagram':
    $icon = 'icon-instagram';
    break;
  case 'link':
    $icon = 'icon-link';
    break;
  default:
    # code...
    break;
}

?>
<? get_template_part('theme-parts/atoms/button', null, [
  ...$args,
  'className' => classNames($className, 'lb-social-link not-prose', 'lb-social-link--color_' . $color),
  'prefix' => '<i class="' . $icon  . '"></i>',
  'variant' => $variant,
  'size' => $size
]); ?>
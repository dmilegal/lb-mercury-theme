<?
$className = $args['className'] ?? '';
$color = $args['color'] ?? 'gray';
$icon = $args['icon'] ?? '';

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
  default:
    # code...
    break;
}

?>
<? get_template_part('theme-parts/atoms/button', null, [
  'variant' => 'outlined',
  'className' => classNames($className, 'lb-social-link', 'lb-social-link--color_' . $color),
  'prefix' => '<i class="' . $icon  . '"></i>',
  ...$args
]); ?>
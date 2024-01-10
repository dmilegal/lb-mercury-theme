<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
/**
 * 2xs | xs | sm | md | lg | xl | 2xl
 */
$size = $args['size'] ?? '';

$icon = $args['icon'] ?? 'circle';
$rounded = $args['rounded'] ?? false;
/**
 * contained | contained-light | contained-dark | outlined | outlined-bold
 */
$variant = $args['variant'] ?? 'contained';
$color = $args['color'] ?? 'primary';

?>
<div class=" <?= classNames(
                'lb-featured-icon',
                'icon-' . $icon,
                $size ? 'lb-featured-icon--size_' . $size : '',
                'lb-featured-icon--variant_' . $variant,
                'lb-featured-icon--color_' . $color,
                [
                  'lb-featured-icon--rounded' => $rounded
                ]

              ) ?>">
  <i class="<?= 'icon-' . $icon ?> lb-featured-icon__icon"></i>
</div>
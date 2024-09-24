<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'aria'])));
?>
<a class="<?= classNames("lb-link-with-icon", $className) ?>" <?= $attrsStr ?>>
  <? if ($icon)
  get_template_part('theme-parts/molecules/featured-icon', null, [
    'size' => '2xl',
    'variant' => 'contained-lightest',
    'color' => 'gray',
    'icon' => $icon,
    'className' => 'lb-link-with-icon__icon',
  ]); ?>
  <span class="lb-link-with-icon__title" ><?= $title ?></span>
</a>
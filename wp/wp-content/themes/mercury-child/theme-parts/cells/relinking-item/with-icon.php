<?
$className = $args['className'] ?? '';
$title = $args['title'] ?? '';
$icon = $args['icon'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id', 'title', 'data', 'aria', 'hidden', 'style'])));
?>
<a <?= $attrsStr ?> class="<?= classNames("lb-relinking-item", "lb-relinking-item--theme_with-icon", $className) ?>">
  <? if ($icon) {
    echo wp_get_attachment_image($icon, [24, 24], true, [
      'class' => 'lb-relinking-item__icon',
      'width' => 24,
      'height' => 24
    ]);
  } ?>
  <span class="lb-relinking-item__text"><?= $title ?></span>
</a>
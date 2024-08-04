<?
$className = $args['className'] ?? '';
$title = $args['title'] ?? '';
$icon = $args['icon'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id', 'title', 'data', 'aria', 'hidden', 'style'])));
?>
<a <?= $attrsStr ?> class="<?= classNames("not-prose", "lb-relinking-item", "lb-relinking-item--theme_with-icon", $className) ?>">
  <? if ($icon) { ?>
    <span class="lb-relinking-item__icon-frame">
      <?= wp_get_attachment_image($icon, [128, 128], false, [
        'class' => 'lb-relinking-item__icon'
      ]); ?>
    </span>
  <? } ?>
  <span class="lb-relinking-item__text"><?= $title ?></span>
</a>
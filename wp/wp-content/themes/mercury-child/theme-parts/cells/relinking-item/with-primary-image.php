<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$link = $args['href'] ?? '';
$image = $args['image'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id', 'title', 'data', 'aria', 'hidden', 'style'])));

?>
<a <?= $attrsStr ?> data-wp-interactive="relinkingItem" class="<?= classNames("not-prose", "lb-relinking-item", "lb-relinking-item--theme_with-primary-image", $className) ?>">
  <? if ($image) { ?>
    <span class="lb-relinking-item__primary-frame">
      <?= wp_get_attachment_image($image, [260, 260], false, [
        'class' => 'lb-relinking-item__primary-image',
      ]); ?>
    </span>
  <? } ?>
  <span class="lb-relinking-item__text"><?= $title ?></span>
</a>
<?
$className = $args['className'] ?? '';
$title = $args['title'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id', 'title', 'data', 'aria', 'hidden', 'style'])));
?>
<a <?= $attrsStr ?> class="<?= classNames("not-prose", "lb-relinking-item", "lb-relinking-item--theme_with-arrow", $className) ?>">
  <span class="lb-relinking-item__text"><?= $title ?></span>
  <i class="icon-chevron-right lb-relinking-item__arrow"></i>
</a>
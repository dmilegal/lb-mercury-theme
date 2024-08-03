<?
$className = $args['className'] ?? '';
$title = $args['title'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id', 'title', 'data', 'aria', 'hidden', 'style'])));
?>
<a <?= $attrsStr ?> class="<?= classNames("not-prose", "lb-relinking-item", "lb-relinking-item--theme_only-text", $className) ?>">
  <span class="lb-relinking-item__text"><?= $title ?></span>
</a>
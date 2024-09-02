<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$icon = $args['icon'] ?? '';
$title = $args['title'] ?? '';
$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'aria'])));
?>
<div class="<?= classNames("lb-link-with-icon", $className) ?>">
  <i class="icon-<?= $icon ?>"></i>
  <a href="<?= $link ?>" class="lb-link-with-icon__link" <?= $attrsStr ?>><?= $title ?></a>
</div>
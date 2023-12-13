<?
$className = $args['className'] ?? '';
$style = $args['className'] ?? '';
/**
 * sm | md | lg | xl | 2xl
 */
$size = $args['size'] ?? 'md';
$color = $args['color'] ?? 'brand-600';
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$tag = $href ? 'a' : 'button';

$additionalAttrs = [];

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['style', 'href', 'target', 'rel'])));

?>
<<?= $tag ?> class="<?= classNames('lbc-button', $className, $size) ?>" <?= $attrsStr ?>>
  <? if ($prefix) { ?>
    <span class="lbc-button__prefix">
      <?= $prefix ?>
    </span>
  <? } ?>
  <? if ($content) { ?>
    <span class="lbc-button__content">
      <?= $content ?>
    </span>
  <? } ?>
</<?= $tag ?>>
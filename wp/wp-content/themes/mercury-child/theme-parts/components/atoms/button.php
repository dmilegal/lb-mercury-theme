<?
$className = $args['className'] ?? '';
$style = $args['className'] ?? '';
/**
 * sm | md | lg | xl | 2xl
 */
$size = $args['size'] ?? 'md';
$color = $args['color'] ?? 'brand';
/**
 * primary | secondary | 'outlined | text | inline
 */
$variant = $args['variant'] ?? 'primary';
$flat = $args['flat'] ?? false;
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$tag = $href ? 'a' : 'button';

$additionalAttrs = [];

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel'])));

?>

<<?= $tag ?> class="<?= classNames(
                      'lbc-button',
                      $className,
                      'lbc-button--size_' . $size,
                      'lbc-button--color_' . $color,
                      'lbc-button--variant_' . $variant,
                    ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
                                                    $style
                                                  ) ?>">
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
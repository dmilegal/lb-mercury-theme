<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
/**
 * sm | md | lg
 */
$size = $args['size'] ?? 'md';
/**
 * light | medium | dark
 */
$theme = $args['theme'] ?? 'medium';
$color = $args['color'] ?? 'primary';
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$postfix = $args['postfix'] ?? '';
$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$tag = $href ? 'a' : 'div';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));
?>
<<?= $tag ?> class="<?= classNames(
                      'lb-badge',
                      $className,
                      'lb-badge--size_' . $size,
                      'lb-badge--color_' . $color,
                      'lb-badge--theme_' . $theme,
                      [
                        'lb-badge--only_icon' => !$content && !!($prefix || $postfix)
                      ]
                    ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
                                                    $style
                                                  ) ?>">
  <? if ($prefix) { ?>
    <span class="lb-badge__prefix">
      <?= $prefix ?>
    </span>
  <? } ?>
  <? if ($content) { ?>
    <span class="lb-badge__content">
      <?= $content ?>
    </span>
  <? } ?>
  <? if ($postfix) { ?>
    <span class="lb-badge__postfix">
      <?= $postfix ?>
    </span>
  <? } ?>
</<?= $tag ?>>
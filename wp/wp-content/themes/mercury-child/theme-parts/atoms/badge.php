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
$color = $args['color'] ?? get_theme_mod('main_ui_color');
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$postfix = $args['postfix'] ?? '';
$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$tag = $href ? 'a' : 'div';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel'])));
?>
<<?= $tag ?> class="<?= classNames(
                      'lbc-badge',
                      $className,
                      'lbc-badge--size_' . $size,
                      'lbc-badge--color_' . $color,
                      'lbc-badge--theme_' . $theme,
                      [
                        'lbc-badge--only_icon' => !$content && !!($prefix || $postfix)
                      ]
                    ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
                                                    $style
                                                  ) ?>">
  <? if ($prefix) { ?>
    <span class="lbc-badge__prefix">
      <?= $prefix ?>
    </span>
  <? } ?>
  <? if ($content) { ?>
    <span class="lbc-badge__content">
      <?= $content ?>
    </span>
  <? } ?>
  <? if ($postfix) { ?>
    <span class="lbc-badge__postfix">
      <?= $postfix ?>
    </span>
  <? } ?>
</<?= $tag ?>>
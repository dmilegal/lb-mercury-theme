<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
/**
 * sm | md | lg | xl | 2xl
 */
$size = $args['size'] ?? 'md';
$color = $args['color'] ?? get_theme_mod('main_ui_color');
/**
 * primary | secondary | outlined | text | inline
 */
$variant = $args['variant'] ?? 'primary';
$flat = $args['flat'] ?? false;
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$postfix = $args['postfix'] ?? '';
$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$tag = $href ? 'a' : 'button';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));

?>

<<?= $tag ?> class="
  <?= classNames(
    'lb-button',
    $className,
    'lb-button--size_' . $size,
    'lb-button--color_' . $color,
    'lb-button--variant_' . $variant,
    [
      'lb-button--display_icon' => !$content && !!($prefix || $postfix)
    ]

  ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
        $style
      ) ?>">
  <? if ($prefix) { ?>
    <span class="lb-button__prefix">
      <?= $prefix ?>
    </span>
  <? } ?>
  <? if ($content) { ?>
    <span class="lb-button__content">
      <?= $content ?>
    </span>
  <? } ?>
  <? if ($postfix) { ?>
    <span class="lb-button__postfix">
      <?= $postfix ?>
    </span>
  <? } ?>
</<?= $tag ?>>
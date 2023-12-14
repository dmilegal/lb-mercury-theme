<?
if (!function_exists('getButtonVariantContained')) {
  function getButtonVariantContained($color)
  {
    [$colorName, $colorOffset] = splitColor($color);

    $style = '';

    if (!$colorOffset) return $style;

    $style .= "--lbc-button--background--color: var(
    --wp--preset--color--$colorName-$colorOffset
  );";
    $style .= "--lbc-button--background--color--hover: var(
    --wp--preset--color--$colorName-" . ($colorOffset == 900 ? $colorOffset - 100 : floor(floor(($colorOffset + 100) / 100) * 100)) . ");";
    $style .= "--lbc-button--background--color--disabled: var(
    --wp--preset--color--$colorName-" . ($colorOffset <= 200 ? ($colorOffset == 25 ? 50 : 25) : 200) . "
  );";

    $style .= "--lbc-button--color: var(--wp--preset--color--" . getContrastTextColor($color) . ");";
    $style .= "--lbc-button--color--disabled: var(--wp--preset--color--" . ($colorOffset <= 200 ? $colorName . '-300' : 'white') . ");";

    $style .= "--lbc-button--outline--color--focus: var(--wp--preset--color--$colorName-100);";

    return $style;
  }
}

if (!function_exists('getButtonVariantOutlined')) {
  function getButtonVariantOutlined($color)
  {
    [$colorName, $colorOffset] = splitColor($color);

    $style = '';

    if (!$colorOffset) return $style;

    $style .= "--lbc-button--background--color--hover: var(--wp--preset--color--$colorName-" . ($colorOffset == 50 ? 25 : 50) . ");";

    $style .= "--lbc-button--border--color: var(--wp--preset--color--$colorName-300);";
    $style .= "--lbc-button--border--color--disabled: var(--wp--preset--color--$colorName-200);";

    $style .= "--lbc-button--color: var(--wp--preset--color--$colorName-$colorOffset);";
    $style .= "--lbc-button--color--hover: var(
    --wp--preset--color--$colorName-" . ($colorOffset == 900 ? $colorOffset - 100 : floor(floor(($colorOffset + 100) / 100) * 100)) . ");";
    $style .= "--lbc-button--color--disabled: var(--wp--preset--color--$colorName-" . ($colorOffset == 300 ? 200 : 300) . ");";

    $style .= "--lbc-button--outline--color--focus: var(--wp--preset--color--$colorName-100);";

    return $style;
  }
}

if (!function_exists('getButtonVariantText')) {
  function getButtonVariantText($color)
  {
    [$colorName, $colorOffset] = splitColor($color);

    $style = '';

    if (!$colorOffset) return $style;

    $style .= "--lbc-button--background--color--hover: var(--wp--preset--color--$colorName-50);";

    $style .= " --lbc-button--color: var(--wp--preset--color--$colorName-$colorOffset);";

    return $style;
  }
}

if (!function_exists('getButtonVariantInline')) {
  function getButtonVariantInline($color)
  {
    [$colorName, $colorOffset] = splitColor($color);

    $style = '';

    if (!$colorOffset) return $style;

    $style .= " --lbc-button--color: var(--wp--preset--color--$colorName-$colorOffset);";

    $style .= "--lbc-button--color--hover: var(
    --wp--preset--color--$colorName-" . ($colorOffset == 900 ? $colorOffset - 100 : floor(floor(($colorOffset + 100) / 100) * 100)) . ");";

    return $style;
  }
}

$className = $args['className'] ?? '';
$style = $args['className'] ?? '';
/**
 * sm | md | lg | xl | 2xl
 */
$size = $args['size'] ?? 'md';
$color = $args['color'] ?? 'brand-600';
/**
 * contained | outlined | text | inline
 */
$variant = $args['variant'] ?? 'contained';
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
<div class="lbc-button-wrapper" style="<?= classNames(
              $variant == 'contained' ? getButtonVariantContained($color) : '',
              $variant == 'outlined' ? getButtonVariantOutlined($color) : '',
              $variant == 'text' ? getButtonVariantText($color) : '',
              $variant == 'inline' ? getButtonVariantInline($color) : '',
            ) ?>">
  <<?= $tag ?> class="<?= classNames(
                        'lbc-button',
                        $className,
                        'lbc-button--size_' . $size,
                        'lbc-button--color_' . $color,
                        'lbc-button--variant_' . $variant,
                      ) ?>" <?= $attrsStr ?> style="<?= classNames(
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
</div>
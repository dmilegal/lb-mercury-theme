<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
/**
 * sm | md | lg | xl | 2xl
 */
$size = $args['size'] ?? 'md';
$color = $args['color'] ?? 'primary';
/**
 * contained | contained-light | outlined | text | inline
 */
$variant = $args['variant'] ?? 'contained';
$flat = $args['flat'] ?? false;
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$postfix = $args['postfix'] ?? '';
$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$isLoadingBtn =  $args['is_loading'] ?? false;

$tag = $href ? 'a' : 'button';

$is_preview = $args['is_preview'] ?? false;

$isInline = $args['is_inline'] ?? true;

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id', 'title', 'data', 'aria'])));

?>

<<?= $tag ?> class="<?= classNames(
                      'lb-button',
                      $className,
                      'lb-button--size_' . $size,
                      'lb-button--color_' . $color,
                      'lb-button--variant_' . $variant,
                      [
                        'lb-button--display_icon' => !$content && !!($prefix || $postfix),
                        'lb-button--display_block' => !$isInline
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
  <? } elseif ($is_preview) { ?>
    <span class="lb-button__content" style="opacity: 0.75">
      Fill text field
    </span>
  <? } ?>

  <? if ($postfix) { ?>
    <span class="lb-button__postfix">
      <?= $postfix ?>
    </span>
  <? } ?>
  <? if ($isLoadingBtn) { ?>
    <span class="lb-button__loading">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: rgba(255, 255, 255, 0); display: block;" width="200px" height="200px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
        <circle cx="50" cy="50" fill="none" stroke="currentColor" stroke-width="10" r="35" stroke-dasharray="164.93361431346415 56.97787143782138">
          <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
        </circle>
      </svg>
    </span>
  <? } ?>
</<?= $tag ?>>
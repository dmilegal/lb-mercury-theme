<?
use Shared\Theme\LbThemeService;

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
$color = $args['color'] ?? LbThemeService::getMainGroupColor();
$content = $args['content'] ?? '';
$prefix = $args['prefix'] ?? '';
$postfix = $args['postfix'] ?? '';
$labelContent = $args['label']['content'] ?? '';
$labelPosition = $args['label']['position'] ?? 'left';

$href = $args['href'] ?? null;
$target = $args['target'] ?? null;
$rel = $args['rel'] ?? null;

$tag = $href ? 'a' : 'div';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['href', 'target', 'rel', 'id'])));


ob_start();
get_template_part('theme-parts/atoms/badge', null, [
  'size' => $size,
  'prefix' => $labelPosition == 'left' ? $prefix : '',
  'postfix' => $labelPosition == 'right' ? $postfix : '',
  'theme' => $theme,
  'color' => $color,
  'content' => $labelContent,
  'className' => 'lb-badge-group__label'
]);
$labelBadge = ob_get_contents();
ob_end_clean();


?>
<<?= $tag ?> class="<?= classNames(
                      'lb-badge-group',
                      $className,
                      'lb-badge-group--size_' . $size,
                      'lb-badge-group--color_' . $color,
                      'lb-badge-group--theme_' . $theme,
                      'lb-badge-group--align_' . $labelPosition,
                    ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
                                                    $style
                                                  ) ?>">


  <?
  if ($labelPosition == 'left')
    echo $labelBadge;
  get_template_part('theme-parts/atoms/badge', null, [
    'size' => $size,
    'prefix' => $labelPosition == 'left' ? '' : $prefix,
    'postfix' => $labelPosition == 'right' ? '' : $postfix,
    'color' => $color,
    'content' => $labelContent,
    'className' => 'lb-badge-group__container'
  ]);
  if ($labelPosition == 'right')
    echo $labelBadge;
  ?>

</<?= $tag ?>>
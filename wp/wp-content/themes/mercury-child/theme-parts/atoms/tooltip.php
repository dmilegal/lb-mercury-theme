<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';
$id = $args['id'] ?? '';
// 'sm' | 'md'
$size = $args['size'] ?? 'md';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip([ 'title', 'data', 'aria'])));

?>
<div id="<?= $id ?>" role="tooltip" class="<?= classNames(
    'lb-tooltip',
    'lb-tooltip--size_' . $size,
    'lb-tooltip--hidden',
    $className,
  ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
        $style
      ) ?>">
  <?= $content ?>
</div>
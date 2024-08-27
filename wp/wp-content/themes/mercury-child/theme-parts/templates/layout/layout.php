<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$variant = $args['variant'] ?? 'only-content';
$content = $args['content'] ?? '';
$widgetId = $args['widget_id'] ?? '';
$backgroundColor = $args['background_color'] ?? 'white';
$isPreview = $args['is_preview'] ?? false;

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['style'])));

?>
<div class="<?= classNames("lb-ui-layout", "lb-ui-layout--variant_$variant", "lb-ui-layout--color_$backgroundColor", "lb-ui-layout--pad_md", $className) ?>" <?= $attrsStr ?>>
  <div class="lb-ui-layout__content">
    <div class="lb-ui-layout__inner prose-headings prose-content prose-spaces prose-colors">
      <?= $content ?>
    </div>
    <? if ($widgetId && $variant === 'with-sidebar' && !$isPreview) { ?>
      <div class="lb-ui-layout__sidebar">
      [_lb_sidebar name='<?= $widgetId ?>']
      </div>
    <? } ?>
  </div>
</div>
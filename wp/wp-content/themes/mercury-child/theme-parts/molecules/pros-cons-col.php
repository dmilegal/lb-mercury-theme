<?
$className = $args['className'] ?? '';
$content = $args['content'] ?? '';
$title = $args['title'] ?? '';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['id', 'style'])));
?>
<div class="<?= classNames(
              'lb-pros-cons-col',
              $className,
            ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
                                            $style
                                          ) ?>">
  <div class="lb-pros-cons-col__title">
    <strong><?= esc_html($title) ?></strong>
  </div>
  <div class="lb-pros-cons-col__content">
    <?= $content ?>
  </div>
</div>
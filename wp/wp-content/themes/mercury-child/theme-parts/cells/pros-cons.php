<?
$className = $args['className'] ?? '';
$content = $args['content'] ?? '';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['id', 'style'])));
?>
<div class="<?= classNames(
              'lb-pros-cons',
              $className,
            ) ?>" <?= $attrsStr ?> style="<?= stylesValue(
                                            $style
                                          ) ?>">
  <?= $content ?>
</div>
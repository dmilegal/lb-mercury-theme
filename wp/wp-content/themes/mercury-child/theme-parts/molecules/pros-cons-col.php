<?
$className = $args['className'] ?? '';
$content = $args['content'] ?? '';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['id', 'style'])));
?>
<div class="<?= classNames(
              'lb-pros-cons-col',
              $className,
            ) ?>" <?= $attrsStr ?>>

  <div class="lb-pros-cons-col__content">
    <?= $content ?>
  </div>
</div>
<?
$className = $args['className'] ?? '';
$content = $args['content'] ?? '';
$title = $args['title'] ?? '';
// 'adv' | 'dis'
$type = $args['type'] ?? 'adv';

$attrsStr = getAttributesString(array_intersect_key($args, array_flip(['id', 'style'])));
?>
<div class="<?= classNames(
              'lb-pros-cons-col not-prose',
              $className,
              [
                'lb-pros-cons-col--adv' => $type === 'adv',
                'lb-pros-cons-col--dis' => $type === 'dis',
              ]
            ) ?>" <?= $attrsStr ?>>
  <? if ($title) { ?>
    <div class="lb-pros-cons-col__title">
      <strong><?= esc_html($title) ?></strong>
    </div>
  <? } ?>
  <div class="lb-pros-cons-col__content">
    <?= $content ?>
  </div>
</div>
<?
$title = $args['title'] ?? '';
$content = $args['content'] ?? '';
$icon_id = $args['icon_id'] ?? '';
$variant = $args['variant'] ?? 'contained';
?>

<div class="<?= classNames("lb-feature-grid-item", [
  "lb-feature-grid-item__variant--$variant"
]) ?>">
  <?= wp_get_attachment_image($icon_id, [128, 128], null, [
    'class' => 'lb-feature-grid-item__icon',
    'loading' => 'lazy'
  ]) ?>
  <? if ($title) { ?>
    <div class="lb-feature-grid-item__title">
      <?= $title ?>
    </div>
  <? } ?>
  <? if ($content) { ?>
    <div class="lb-feature-grid-item__content">
      <?= $content ?>
    </div>
  <? } ?>
</div>
<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$content = $args['content'] ?? '';

if (!$content) return;
?>

<div class="<?= classNames('lb-text-banner', 'not-prose', $className) ?>" style="<?= $style ?>">
  <div class="<?= classNames('lb-text-banner__container') ?>">
    <?= $content ?>
  </div>
</div>
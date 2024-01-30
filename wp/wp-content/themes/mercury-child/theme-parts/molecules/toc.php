<?
$variant = $args['variant'] ?? 'default';
if (shortcode_exists('ez-toc')) { ?>
  <div class="<?= classNames('lb-toc', 'lb-toc--variant_' . $variant) ?>">
    <?= do_shortcode('[ez-toc]'); ?>
  </div>
<? } ?>
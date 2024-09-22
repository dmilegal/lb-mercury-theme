<?
$className = $args['className'] ?? '';
$variant = $args['variant'] ?? 'default';
$isCollapsible = $args['is_collapsible'] ?? false;

if (shortcode_exists('ez-toc')) { ?>
  <? if ($isCollapsible) { ?>
    <div class="<?= classNames("lb-dropdown lb-dropdown--inline lb-dropdown--state_opened", $className) ?>">
      <button class="lb-dropdown__header">
        <?= __('Table of contents', 'mercury-child') ?>
        <i class="icon-minus-circle lb-dropdown__ico lb-dropdown__ico--opened"></i>
        <i class="icon-plus-circle lb-dropdown__ico lb-dropdown__ico--closed"></i>
      </button>
      <div class="lb-dropdown__content not-prose">
        <div class="<?= classNames('lb-toc', 'lb-toc--variant_' . $variant) ?>">
          [ez-toc]
        </div>
      </div>
    </div>
  <? } else { ?>
    <div class="<?= classNames('lb-toc not-prose', 'lb-toc--variant_' . $variant, $className) ?>">
      <div class="not-prose">
        [ez-toc]
      </div>
    </div>
  <? } ?>

<? } ?>
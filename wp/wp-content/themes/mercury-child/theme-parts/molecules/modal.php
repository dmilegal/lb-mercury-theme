<?
$id = $args['id'] ?? "";
$title = $args['title'] ?? "";
$subtitle = $args['subtitle'] ?? "";
$content = $args['content'] ?? "";
$className =  $args['className'] ?? "";
?>
<div class="<?= classNames("lb-modal__overlay", $className) ?>" id="<?= $id ?>">
  <div class="lb-modal__content">
    <button class="lb-modal__close" aria-label="<?= __('close', 'mercury-child') ?>" data-close>
      <i class="icon-x"></i>
    </button>
    <? if ($title || $subtitle) { ?>
      <header class="lb-modal__header">
        <? if ($title) { ?>
          <div class="lb-modal__title">
            <?= $title ?>
          </div>
        <? } ?>
        <? if ($subtitle) { ?>
          <div class="lb-modal__subtitle">
            <?= $subtitle ?>
          </div>
        <? } ?>
      </header>
    <? } ?>
    <? if ($content) { ?>
      <div class="lb-modal__body">
        <?= $content ?>
      </div>
    <? } ?>
  </div>
</div>
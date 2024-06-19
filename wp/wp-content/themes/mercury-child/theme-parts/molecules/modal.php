<?
$id = $args['id'] ?? "";
$title = $args['title'] ?? "";
$subtitle = $args['subtitle'] ?? "";
$content = $args['content'] ?? "";
?>
<div class="modal__overlay" id="<?= $id ?>">
  <div class="modal__content">
    <button class="modal__close" data-close>&times;</button>
    <? if ($title || $subtitle) { ?>
      <header class="modal__header">
        <? if ($title) { ?>
          <div class="modal__title">
            <?= $title ?>
          </div>
        <? } ?>
        <? if ($subtitle) { ?>
          <div class="modal__subtitle">
            <?= $subtitle ?>
          </div>
        <? } ?>
      </header>
    <? } ?>
    <? if ($content) { ?>
      <div class="modal__body">
        <?= $content ?>
      </div>
    <? } ?>
  </div>
</div>
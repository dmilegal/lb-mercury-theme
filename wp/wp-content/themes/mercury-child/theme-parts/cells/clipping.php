<?
$content = $args['content'] ?? '';
?>
<div class="lb-clipping">
  <div class="lb-clipping__content">
    <?= $content ?>
  </div>
  <div class="lb-clipping__actions">
    <div>
      <button class="lb-clipping__toggle lb-clipping__toggle--more"><?= __('Read more', 'mercury-child') ?><i class="lb-clipping__ico icon-chevron-down"></i></button>
    </div>
    <div>
      <button class="lb-clipping__toggle lb-clipping__toggle--less"><?= __('Read less', 'mercury-child') ?><i class="lb-clipping__ico icon-chevron-up"></i></button>
    </div>
  </div>
</div>
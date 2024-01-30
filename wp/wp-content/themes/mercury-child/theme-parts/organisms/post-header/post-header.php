<?
global $post;
?>
<div class="lb-post-header">
  <div class="lb-post-header__block lb-post-header__block--toc lb-dropdown lb-dropdown--inline lb-dropdown--state_opened lb-post-header__block--on_md">
    <button class="lb-dropdown__header">
      <?= __('Table of contents', 'mercury-child') ?>
      <i class="icon-minus-circle lb-dropdown__ico lb-dropdown__ico--opened"></i>
      <i class="icon-plus-circle lb-dropdown__ico lb-dropdown__ico--closed"></i>
    </button>
    <div class="lb-dropdown__content">
      <? get_template_part('theme-parts/molecules/toc', null, [
        'variant' => 'contrast'
      ]); ?>
    </div>
  </div>
</div>
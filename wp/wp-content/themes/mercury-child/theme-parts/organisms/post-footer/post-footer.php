<?
global $post;

$contributorIds = get_field('co-authors');
$authorId = $post->post_author;
?>
<div class="lb-post-footer">
  <div class="lb-post-footer__block lb-post-footer__block--taxs">
    <div class="lb-post-footer__block-content">
      <? get_template_part('theme-parts/molecules/tag-list', null, [
        'post_id' => get_the_ID()
      ]); ?>
    </div>
  </div>

  <? if ($contributorIds) { ?>
    <div class="lb-post-footer__block lb-post-footer__block--contributors">
      <div class="lb-post-footer__block-title">
        <?= __('Contributors', 'mercury-child') ?>
      </div>
      <div class="lb-post-footer__block-content">
        <? get_template_part('theme-parts/organs/contributor-list', null, [
          'user_ids' => $contributorIds,
          'size' => 'lg',
          'orient' => 'hr'
        ]); ?>
      </div>
    </div>
  <? } ?>
  <div class="lb-post-footer__block lb-post-footer__block--soc">
    <div class="lb-post-footer__block-content">
      <? get_template_part('theme-parts/cells/share-links', null, [
        'title' => get_the_title(),
        'link' => get_permalink(),
      ]); ?>
    </div>
  </div>
</div>
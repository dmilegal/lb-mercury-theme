<?php

/**
 * Advantages Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$block_opts = getCommonBlockProps($block, $post_id, $is_preview);

$title = get_field('title');
$users = get_field('members');

?>
<div <?= $block_opts['anchor'] ?>class="<?= $block_opts['class_name']['container'] ?> our-team-section">
  <? if ($title) { ?>
    <div class="our-team-title box-100 relative">
      <h2><?= esc_html($title) ?></h2>
    </div>
  <? } ?>
   <div class="our-team-list">
    <? 
    if ($users)
      foreach ($users as $user_id) {
        get_template_part( 'theme-parts/member-block', null,  ['id' => $user_id] );
      } ?>
  </div>
  <? if ((!$users || !count($users)) && $is_preview) {?>
    <div class="our-team-editor-placeholder">
      <h2>Please select users</h2>
    </div>
  <? } ?>
</div>

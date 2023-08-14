<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Support custom "anchor" values.
$block_opts = getCommonBlockProps();

// Load values and assign defaults.
$pros_list = get_field('pros') ?: [];
$cons_list = get_field('cons') ?: [];

?>
<div <?= $block_opts['anchor'] ?>class="<?= $block_opts['class_name'] ?>is-layout-flex wp-container-3 wp-block-columns">
  <div class="is-layout-flow wp-block-column">
    <div class="space-pros box-100 relative">
      <div class="space-pros-ins relative">
        <div class="space-pros-title box-100 relative">
          <strong>Pros:</strong>
        </div>
        <div class="space-pros-description box-100 relative">
          <? if (count($pros_list)) { ?>
          <ul>
            <? foreach ($pros_list as $item) {?>
              <li><?= esc_html($item['text']) ?></li>
            <?} ?>
          </ul>
          <? } ?>
        </div>
      </div>
    </div>
  </div>
  <div class="is-layout-flow wp-block-column">
    <div class="space-cons box-100 relative">
      <div class="space-cons-ins relative">
        <div class="space-cons-title box-100 relative">
          <strong>Cons:</strong>
        </div>
        <div class="space-pros-description box-100 relative">
        <? if (count($cons_list)) { ?>
          <ul>
            <? foreach ($cons_list as $item) {?>
              <li><?= esc_html($item['text']) ?></li>
            <?} ?>
          </ul>
          <? } ?>
        </div>
      </div>
    </div>
  </div>
</div>
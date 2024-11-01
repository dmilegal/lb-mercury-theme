<?php

/**
 * Blockquote Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */
$block_opts = getCommonBlockProps($block, $post_id, $is_preview, get_field('block_hide_on_desktop'), get_field('block_hide_on_mobile'));

if ($is_preview || !$post_id) { ?>
  <div>
    <p>TOC: No preview available.</p>
  </div>
<? } else { ?>
    <? get_template_part(
      'theme-parts/molecules/toc',
      null,
      [
        ...$block_opts,
        'header_label' => get_field('header_label'),
        'display_header_label' => get_field('display_header_label'),
        'toggle_view' => get_field('toggle_view'),
        'initial_view' => get_field('initial_view'),
        // 'display_counter' => get_field('display_counter'),
        // 'post_types' => get_field('post_types'),
        // 'post_in' => get_field('post_in'),
        'device_target' => get_field('device_target'),
        // 'view_more' => get_field('view_more'),
      ]
    ); ?>
<? }

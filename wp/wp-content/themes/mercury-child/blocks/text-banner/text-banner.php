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

$block_opts = getCommonBlockProps($block, $post_id, $is_preview);
$allowed_blocks = array('core/paragraph'/*, 'core/heading', 'core/image'*/);

get_template_part('theme-parts/cells/text-banner', null, [
  ...$block_opts,
  'content' => '<InnerBlocks templateLock="false" allowedBlocks="' . esc_attr(wp_json_encode($allowed_blocks)) . '" />',
]);

<?php

/**
 * Logo & Text Block Template.
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

$allowed_blocks = array('lb/logo-text-media', 'lb/logo-text-content');

$template = array(
  array('lb/logo-text-media', array(
    'lock' => array(
      'move'   => true,
      'remove' => true,
    ),
  )),
  array('lb/logo-text-content', array(
    'lock' => array(
      'move'   => true,
      'remove' => true,
    ),
  )),
);

?>
<div class="<?= classNames("lb-logo-text", $block_opts['className']) ?>">
  <InnerBlocks templateLock="all" class="lb-logo-text__inner" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
</div>
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

$allowed_blocks = array('lb/sidebar-block-title', 'core/paragraph', 
'core/heading', 'lb/contributor-list', 'lb/share-links', 'lb/toc');
$template = array(
  array('lb/sidebar-block-title')
);
$isBordered = get_field('is_bordered');

?>
<div class="<?= classNames("lb-sidebar-block", [
              'lb-sidebar-block--bordered' => $isBordered,
            ])  ?>">
  <InnerBlocks templateLock="false" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
</div>
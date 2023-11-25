<?php

/**
 * Pros & Cons Block Template.
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

$pros_list = get_field('pros') ?: [];
$cons_list = get_field('cons') ?: [];
$allowed_blocks = array('core/pros-cons-col');
$template = array(
  array('acf/pros-cons-col', array('lock' => array(
    'remove' => true,
),), array(array('acf/advantages'))),
  array('acf/pros-cons-col', array('lock' => array(
    'remove' => true,
),), array(array('acf/disadvantages'))),
);

?>
<div <?= $block_opts['anchor'] ?>class="<?= $block_opts['class_name']['container'] ?>">
  <InnerBlocks parentContainer="true" className="wp-container-3 is-layout-flex wp-block-columns" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
</div>
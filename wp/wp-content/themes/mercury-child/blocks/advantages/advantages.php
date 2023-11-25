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
$allowed_blocks = array('core/list');
$template = array(
	array('core/list', array(
  ), array(
    array('core/list-item', array(
      'placeholder' => __( 'Enter Advantages...' ),
    )
  ))),
);
?>
<div <?= $block_opts['anchor'] ?>class="<?= $block_opts['class_name']['container'] ?> space-pros-ins relative">
  <? if ($title) { ?>
    <div class="space-pros-title box-100 relative">
      <strong><?= esc_html($title) ?></strong>
    </div>
  <? } ?>
    <InnerBlocks className="space-pros-description box-100 relative" allowedBlocks="<?= esc_attr( wp_json_encode( $allowed_blocks ) ) ?>" template="<?= esc_attr( wp_json_encode( $template ) ) ?>" />
</div>

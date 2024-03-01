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

$listStyle = get_field('list_style') ?? 'numeric';
$allowed_blocks = array('lb/step-list-item');
$template = array(
  array('lb/step-list-item', array(
    'data' => [
      'list_style' => $listStyle
    ]
  ))
);
$listTag = $listStyle == 'numeric' ? 'ol' : 'ul';

?>
<<?= $listTag ?> class="<?= classNames("lb-step-list", [
                          "is-list-ico-check" => $listStyle == 'check'
                        ])  ?>">
  <InnerBlocks templateLock="false" allowedBlocks="<?= esc_attr(wp_json_encode($allowed_blocks)) ?>" template="<?= esc_attr(wp_json_encode($template)) ?>" />
</<?= $listTag ?>>
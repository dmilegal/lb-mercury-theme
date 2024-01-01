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

$enableAuthor = get_field('enable_author');

if ($enableAuthor) {
  $authorId = get_field('author');
} else {
  $cite = get_field('cite');
}

$allowed_blocks = array('core/paragraph');

get_template_part( 'theme-parts/atoms/blockquote', null, [
  'content' => '<InnerBlocks parentContainer="false" allowedBlocks="'. esc_attr(wp_json_encode($allowed_blocks)) .'" />',
	...$block_opts,
  'cite' => $cite,
  'author_id' => $authorId
 ] );
?>

<?

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
$allowed_blocks = array('core/paragraph');


get_template_part('theme-parts/cells/hero-banner', null, [
  ...$block_opts,
  'post_id' => $post_id,
  'enable_published_date' => get_field('show_published_date'),
  'color' => get_field('background_color'),
  'subtitle' => '<InnerBlocks allowedBlocks="'. esc_attr(wp_json_encode($allowed_blocks)) .'" />',
  'is_preview' => $is_preview
]);

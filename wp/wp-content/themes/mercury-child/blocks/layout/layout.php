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
$variant = get_field('variant');
$backgroundColor = get_field('background_color');
$widgetId = get_field('widget_id');
$blockSpacingSize = get_field('block_spacing_size');

get_template_part('theme-parts/templates/layout/layout', null, [
  ...$block_opts,
  'content' => '<InnerBlocks />',
  'background_color' => $backgroundColor,
  'widget_id' => $widgetId,
  'variant' => $variant,
  'hide_sidebar_on_mobile'  => !!get_field('hide_sidebar_on_mobile'),
  'block_spacing_size' => $blockSpacingSize,
  'is_preview' => $is_preview
]);

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


$postType = get_field('post_type') ?? 'casino';
$customTitle = get_field('custom_title') ?? '';

if ($postType === 'casino') {
  $postId = get_field('casino') ?? null;
} else {
  $postId = get_field('bookmaker') ?? null;
} 

if ($postId)
  get_template_part('theme-parts/cells/review-card/review-card', null, [
    ...$block_opts,
    'post_id' => $postId,
    'post_type' => $postType,
    'custom_title' => $customTitle,
    'hide_footer' => true
  ]);
else if ($is_preview) { ?>
  <h3 style="padding: 24px 0; text-align: center;">Please select review post</h3>
<? } ?>
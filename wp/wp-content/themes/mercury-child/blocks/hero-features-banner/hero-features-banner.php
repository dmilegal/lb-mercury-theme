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

get_template_part('theme-parts/cells/hero-features-banner', null, [
  ...$block_opts,
  'title' =>  get_field('title') ?? get_the_title(),
  'subtitle' => get_field('subtitle'),
  'features_list' => get_field('features_list'),
  'feature_image' => get_field('feature_image'),
]);

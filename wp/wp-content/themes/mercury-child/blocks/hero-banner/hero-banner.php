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
$relinkingBlockId = get_field('relinking_block');
$relinkingBlockHtml = '';

if ($relinkingBlockId) {
  ob_start();
  get_template_part('theme-parts/organs/relinking-list/relinking-list', null, [
    ...getRelinkingPostOpts($relinkingBlockId)
  ]);

  $relinkingBlockHtml = (string) ob_get_clean();
}

get_template_part('theme-parts/cells/hero-banner', null, [
  ...$block_opts,
  //'post_id' => $post_id,
  'title' =>  get_field('custom_title') ?: get_the_title(),
  'subtitle' => get_field('subtitle') ?: '',
  'align' => get_field('text_align') ?: 'center',
  'text_content' => get_field('content') ?: '',
  'enable_published_date' => !!get_field('show_published_date'),
  'show' => get_field('show_author') ?: true,
  'color' => get_field('background_color') ?: 'white',
  'footer_content' => $relinkingBlockHtml,
]);

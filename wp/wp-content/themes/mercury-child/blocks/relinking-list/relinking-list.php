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

if (get_field('relinking_list'))
  get_template_part('theme-parts/organs/relinking-list/relinking-list', null, [
    ...$block_opts,
    ...getRelinkingPostOpts(get_field('relinking_list'))
  ]);
else if ($is_preview) { ?>
  <h3 style="padding: 24px 0; text-align: center;"><?= __("Please select a relinking block", "mercury-child") ?></h3>
<? } ?>
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

get_template_part('theme-parts/molecules/link-with-icon-list', null, [
  ...$block_opts,
  'list' => array_map(function ($item) {
    $title = $item['link']['title'] ?? '';

    if (!$title && isset($item['link']['name']))
      $title = $item['link']['name'];
    

    return [
      'icon' => $item['icon'] ?? '',
      'title' =>  $title,
      'href' => $item['href'] ?? '',
      'target' => $item['target'] ?? '',
      'rel' => $item['rel'] ?? '',
    ];
  }, get_field('list'))
]);

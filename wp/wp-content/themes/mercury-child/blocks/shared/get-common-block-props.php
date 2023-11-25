<?
function getCommonBlockProps($block, $post_id, $is_preview = false)
{
  $anchor = '';
  if (!empty($block['anchor']))
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';

  $class_name = get_block_class($block, $post_id, $is_preview);

  return [
    'anchor' => $anchor,
    'class_name' => $class_name
  ];
};

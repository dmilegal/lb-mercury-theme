<?
function getCommonBlockProps($block, $post_id, $is_preview = false)
{
  $anchor = '';
  if (!empty($block['anchor']))
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';

  $class_name = getBlockClass($block, $post_id, $is_preview);

  return [
    'id' => $anchor,
    'className' => $class_name
  ];
};

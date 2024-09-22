<?
function getCommonBlockProps($block, $post_id, $is_preview = false, $block_hide_on_desktop = false, $block_hide_on_mobile = false)
{
  $anchor = '';
  if (!empty($block['anchor']))
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';

  $class_name = getBlockClass($block, $post_id, $is_preview);

  if ($block_hide_on_desktop) {
    $class_name[0] .= ' wp-block-hide-on-desktop';
  } elseif ($block_hide_on_mobile) {
    $class_name[0] .= ' wp-block-hide-on-mobile';
  }

  return [
    'id' => $anchor,
    'className' => $class_name
  ];
};

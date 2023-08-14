<?
function getCommonBlockProps()
{
  $anchor = '';
  if (!empty($block['anchor']))
    $anchor = 'id="' . esc_attr($block['anchor']) . '" ';


  $class_name = 'testimonial-block';
  if (!empty($block['className']))
    $class_name .= ' ' . $block['className'];

  if (!empty($block['align']))
    $class_name .= ' align' . $block['align'];

  return [
    'anchor' => $anchor,
    'class_name' => esc_attr($class_name)
  ];
};

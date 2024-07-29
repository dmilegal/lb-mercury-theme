<?
function relinkingListTransform($list)
{
  return array_map('relinkingListItemTransform', $list);
}

function relinkingListItemTransform($item)
{
  return [
    'key' => uniqid(),
    'link' => get_permalink($item['link']),
    'title' => $item['custom_title'] ?? $item['custom_title'] ? $item['custom_title'] : get_the_title($item['link'])
  ];
}

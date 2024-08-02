<?
function relinkingListTransform($list)
{
  return array_map(fn ($item) => relinkingListItemTransform($item), $list);
}

function relinkingListItemTransform($item)
{
  $params = [
    'href' => isset($item['link']) ? (is_numeric($item['link']) ? get_permalink($item['link']) : $item['link']) : '',
    'title' => $item['custom_title'] ?? $item['custom_title'] ? $item['custom_title'] : get_the_title($item['link'])
  ];

  if (isset($item['icon'])) {
    $params['icon'] = $item["icon"] ?? '';
  }

  if (isset($item['image'])) {
    $params['image'] = $item["image"] ?? '';
  }

  return $params;
}


function relinkingListParams($args)
{
  $params = [
    'prepared' => true,
  ];

  $params['theme'] = $args['theme'] ?? 'only-text';
  $params['gap'] = $args['gap'] ?? 'md';
  $params['title'] = $args['title'] ?? '';
  $params['className']  = $args['className'] ?? '';
  $params['style']  = $args['style'] ?? '';
  $params['list'] = relinkingListTransform($args['list'] ?? []);
  $params['only_mobile_slider'] = $args['only_mobile_slider'] ?? false;


  if (
    (($params['theme'] === 'with-icon' ||
      $params['theme'] === 'with-image' ||
      $params['theme'] === 'with-arrow' ||
      $params['theme'] === 'only-text') && !$params['only_mobile_slider'])
  ) {
    $params['theme_list'] = $args['theme_list'] ?? 'grid';

    if ($params['theme'] === 'with-primary-image') {
      $params['gap'] = $args['gap'] ?? 'lg';
    }

    if ($params['theme_list'] === 'grid') {
      if ($params['theme'] === 'with-icon' || $params['theme'] === 'with-image') {
        $params['col_count'] = $args['col_count'] ?? 4;
      } elseif ($params['theme'] === 'with-arrow') {
        $params['col_count'] = $args['col_count'] ?? 3;
      } elseif ($params['theme'] === 'with-primary-image') {
        $params['col_count'] = $args['col_count'] ?? 5;
      } elseif ($params['theme'] === 'only-text') {
        $params['col_count'] = $args['col_count'] ?? 'auto';
      }
    }
  } elseif ($params['theme'] === 'with-primary-image') {
    $params['theme_list'] = $args['theme_list'] ?? 'slider';
    $params['gap'] = $args['gap'] ?? 'lg';
    $params['col_count'] = $args['col_count'] ?? 5;
  }

  if ($params['theme'] != 'with-large-image' && $params['theme'] != 'block-links') {
    $params['enable_limit'] = $args['enable_limit'] ?? false;
    $params['number_to_show'] = $params['enable_limit'] ? ($args['number_to_show'] ?? $args['number_to_show'] ?: 8) : 0;
    $params['list_tail'] = $params['number_to_show'] ? array_slice($params['list'], $params['number_to_show'], count($params['list'])) : [];
    $params['limited_list'] = $params['number_to_show'] ? array_slice($params['list'], 0, $params['number_to_show']) : $params['list'];
    $params['is_limited'] = $params['number_to_show'] && $params['number_to_show'] < count($params['list']);
  }

  return $params;
}

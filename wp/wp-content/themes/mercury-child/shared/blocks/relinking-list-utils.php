<?
function relinkingListTransform($list)
{
  return array_map(fn ($item) => relinkingListItemTransform($item), $list);
}

function relinkingGroupListTransform($groupList)
{
  return array_map(fn ($group) => [
    ...$group,
    'link_list' => array_map(fn ($item) => relinkingListItemTransform($item), $group['link_list'] ?? [])
  ], $groupList);
}

function relinkingListItemTransform($item)
{
  $params = [
    ...linkItemTransform($item['link'] ?? [], $item['custom_title'] ?? '')
  ];

  if (isset($item['icon'])) {
    $params['icon'] = $item["icon"] ?? '';
  }

  if (isset($item['image'])) {
    $params['image'] = $item["image"] ?? '';
  }

  return $params;
}

function linkItemTransform($link, $custom_title = '')
{
  $params = [
    'href' => '',
    'title' => ''
  ];

  if (!isset($link) || !$link) return $params;

  if ($link['link_type'] == 'post-link') {
    $params['href'] = isset($link['post_link']) ? (is_numeric($link['post_link']) ? get_permalink($link['post_link']) : $link['post_link']) : '';

    if ($custom_title) {
      $params['title'] = $custom_title;
    } elseif (isset($link['post_link']) && is_numeric($link['post_link'])) {
      $params['title'] = get_the_title($link['post_link']);
    }
  } elseif ($link['link_type'] == 'tax-link') {

    $params['href'] = '';
    if (isset($link['taxonomy_link'])) {
      if (is_numeric($link['taxonomy_link'])) {
        $term = get_term($link['taxonomy_link']);
        $params['href'] =  get_term_link($term->term_id, $term->taxonomy);
      } else {
        $params['href'] = $link['taxonomy_link'];
      }
    }

    if ($custom_title) {
      $params['title'] = $custom_title;
    } elseif (isset($link['taxonomy_link']) && is_numeric($link['taxonomy_link'])) {
      $params['title'] = get_term($link['taxonomy_link'])->name;
    }
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
  $params['title_size'] = $args['title_size'] ?? 'lg';
  $params['title_color'] = $args['title_color'] ?? 'dark';
  $params['className']  = $args['className'] ?? '';
  $params['style']  = $args['style'] ?? '';
  $params['list'] = [];
  $params['block_list'] = [];
  $params['only_mobile_slider'] = $args['only_mobile_slider'] ?? false;

  if (isset($args['list']) && $args['list']) {
    $params['list'] = relinkingListTransform($args['list']);
    unset($params['block_list']);
  } elseif (isset($args['block_list']) && $args['block_list']) {
    $params['block_list'] = relinkingGroupListTransform($args['block_list']);
    unset($params['list']);
  }

  if (
    (($params['theme'] === 'with-icon' ||
      $params['theme'] === 'with-image' ||
      $params['theme'] === 'with-arrow' ||
      $params['theme'] === 'only-text') && !$params['only_mobile_slider'])
  ) {
    if ($params['theme'] === 'only-text') {
      $params['title_size'] = 'md';
    }
    
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
  } elseif ($params['theme'] === 'block-links') {
    $params['theme_list'] = $args['theme_list'] ?? 'block-list';
    $params['gap'] = $args['gap'] ?? 'md';
    $params['col_count'] = $args['col_count'] ?? 5;
    $params['title_color'] = 'light';
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

function getRelinkingPostOpts($id) {
  return [
    'title' => get_field('title', $id),
    'enable_limit' => get_field('enable_limit', $id),
    'number_to_show' => get_field('number_to_show', $id),
    'list' => get_field('list', $id),
    'block_list' => get_field('block_list', $id),
    'theme' => get_field('theme', $id),
    //'enable_slider' => get_field('enable_slider'),
    'only_mobile_slider' => get_field('only_mobile_slider', $id),
  ];
}
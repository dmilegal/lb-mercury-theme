<?
$style = $args['style'] ?? 'default';
$queryArgs = $args['query_args'] ?? [];
/*
[
  'casino_id' => number
][]
*/
$casinoListFull = $args['casino_list'] ?? [];
$casinoIds = array_map(fn ($p) => $p['casino_id'], $casinoListFull);
$postsPerPage = $args['posts_per_page'] ?? 0;

if (!$queryArgs) {
  $queryArgs = array(
    'post_type'      => 'casino',
    'no_found_rows'  => false,
    'post_status'    => ['draft', 'publish', 'private'],
  );

  if ($casinoIds) {
    $queryArgs['post__in'] = $casinoIds;
    $queryArgs['orderby'] = 'post__in';
  }

  if ($postsPerPage) {
    $queryArgs['posts_per_page'] = $postsPerPage;
  }
}

if ($queryArgs) {
  global $wp_query;
  $wp_query = new WP_Query([...$queryArgs, 'no_found_rows' => false]);

  if ($wp_query->have_posts()) {
    $casinoList = [];
    while ($wp_query->have_posts()) : $wp_query->the_post();
      $id = get_the_ID();
      $params = array_values(array_filter($casinoListFull, fn ($c) => $c['casino_id'] == $id));
      $casinoList[] = ['casino_id' => $id, ...($params ? $params[0] : [])];

    endwhile;

    $maxPages = $wp_query->max_num_pages;
    $currentPage = $queryArgs['paged'] ?? 1;

    get_template_part("theme-parts/organs/casino-list/$style", null, [
      ...$args,
      'casino_list' => $casinoList,
      'casino_list_full' => $casinoListFull,
      'total_pages' => $maxPages,
      'current_page' => $currentPage,
      'query_args' => $queryArgs,
    ]);

    wp_reset_query();
  }
}

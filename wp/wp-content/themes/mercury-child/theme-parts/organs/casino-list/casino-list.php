<?
$theme = $args['theme'] ?? 'default';
$queryArgs = $args['query_args'] ?? [];

if ($queryArgs) {
  $casino_query = new WP_Query($queryArgs);

  if ($casino_query->have_posts()) {
    $postIds = [];
    while ($casino_query->have_posts()) : $casino_query->the_post();
      $postIds[] = get_the_ID();
    endwhile;

    $maxPages = $casino_query->max_num_pages;
    $currentPage =  $wp_query->current_page;

    get_template_part("theme-parts/organs/casino-list/$theme", null, [
      'post_ids' => $postIds,
      'total_pages' => $maxPages,
      'current_page' => $currentPage,
      ...$args
    ]);
  }
}

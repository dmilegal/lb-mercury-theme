<?
$theme = $args['theme'] ?? 'default';
$queryArgs = $args['query_args'] ?? [];

if ($queryArgs) {
  global $wp_query;
  $wp_query = new WP_Query([...$queryArgs, 'no_found_rows' => false]);

  if ($wp_query->have_posts()) {
    $postIds = [];
    while ($wp_query->have_posts()) : $wp_query->the_post();
      $postIds[] = get_the_ID();
    endwhile;

    $maxPages = $wp_query->max_num_pages;
    $currentPage = $queryArgs['paged'] ?? 1;
    
    get_template_part("theme-parts/organs/casino-list/$theme", null, [
      'post_ids' => $postIds,
      'total_pages' => $maxPages,
      'current_page' => $currentPage,
      ...$args
    ]);

    wp_reset_query();
  }
}

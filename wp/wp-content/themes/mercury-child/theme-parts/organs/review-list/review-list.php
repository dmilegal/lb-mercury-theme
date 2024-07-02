<?
$style = $args['style'] ?? 'default';
$queryArgs = $args['query_args'] ?? [];
$disablePagination = $args['disable_pagination'] ?? false;

$postType = $args['post_type'] ?? 'casino';
$reviewListFull = array_map(function ($p) use ($postType) {
  $item = [...$p];

  if ($postType === 'casino')
    $item['post_id'] = $p['casino_id'];
  else {
    $item['post_id'] = $p['bookmaker_id'];
  };

  unset($item['casino_id']);
  unset($item['bookmaker_id']);
  return $item;
}, $args['casino_list'] ?? []);
$reviewIds = array_map(fn ($p) => $p['post_id'], $reviewListFull);

$postsPerPage = $args['posts_per_page'] ?? 0;


if (!$queryArgs) {
  $queryArgs = array(
    'post_type'      => $postType,
    'no_found_rows'  => false,
    'post_status'    => ['draft', 'publish', 'private'],
  );

  if ($disablePagination) {
    $queryArgs['posts_per_page'] = -1;
  }

  if ($reviewIds) {
    $queryArgs['post__in'] = $reviewIds;
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
    $reviewList = [];
    while ($wp_query->have_posts()) : $wp_query->the_post();
      $id = get_the_ID();
      $params = array_values(array_filter($reviewListFull, fn ($c) => $c['post_id'] == $id));
      $reviewList[] = ['post_id' => $id, ...($params ? $params[0] : [])];

    endwhile;

    $refReviewList = array_map(fn ($i) => $i['post_id'], array_values(array_filter($reviewListFull, fn ($c) => !!getBrandExternalLink($c['post_id']))));

    $maxPages = $wp_query->max_num_pages;
    $currentPage = $queryArgs['paged'] ?? 1;

    get_template_part("theme-parts/organs/review-list/$style", null, [
      ...$args,
      'post_type' => $postType,
      'review_list' => $reviewList,
      'review_list_full' => $reviewListFull,
      'ref_review_list' => $refReviewList,
      'total_pages' => $maxPages,
      'current_page' => $currentPage,
      'query_args' => $queryArgs,
      'disable_pagination' => $disablePagination
    ]);

    wp_reset_query();

    if ($refReviewList && get_field("enable_modal_ref_list", "options"))
      add_action('wp_footer', fn () => get_template_part('/theme-parts/cells/ref-review-modal-tpl'));
  }
}

<?
$style = $args['style'] ?? 'default';
$queryArgs = $args['query_args'] ?? [];
$disablePagination = $args['disable_pagination'] ?? false;
$enableSortByBonusCategory = $args['enable_sort_by_bonus_category'] ?? false;
$postsPerPage = $args['posts_per_page'] ?? 0;
$reviewList = $args['casino_list'] ?? [];
$showDulicate =  $args['show_dulicate'] ?? false;
$postType = $args['post_type'] ?? 'casino';
$bonusCategory = $args['bonus_category'] ?? false;
$showPostInfo = $args['show_post_info'] ?? false;
$showBonusCategoryFilter = $args['show_bonus_category_filter'] ?? false;

[$reviewList, $reviewListFull, $refReviewList, $maxPages, $currentPage, $queryArgs] = getReviewData(
  $postType,
  $queryArgs,
  $reviewList,
  $disablePagination,
  $postsPerPage,
  $bonusCategory,
);

$bonusCategories = [];
if (!$enableSortByBonusCategory) {
  $bonusCategories = array_unique(
    array_filter(
      array_map(fn($i) => $i['bonus_category'], $reviewListFull),
      fn($id) => !!$id
    )
  );
}

if ($reviewList) {
  get_template_part("theme-parts/organs/review-list/$style", null, [
    ...$args,
    'post_type' => $postType,
    'review_list' => $reviewList,
    'review_list_full' => $reviewListFull,
    'ref_review_list' => $refReviewList,
    'show_post_info' => $showPostInfo,
    'show_bonus_category_filter' => $showBonusCategoryFilter,
    'filter' => [
      'bonus_categories' => $bonusCategories
    ],
    'total_pages' => $maxPages,
    'current_page' => $currentPage,
    'query_args' => $queryArgs,
    'disable_pagination' => $disablePagination
  ]);

  if ($refReviewList && get_field("enable_modal_ref_list", "options"))
    add_action('wp_footer', fn() => get_template_part('/theme-parts/cells/ref-review-modal-tpl'));
}

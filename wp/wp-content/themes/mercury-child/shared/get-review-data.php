<?
function getReviewData($postType = 'casino', $queryArgs = [], $reviewList = [], $disablePagination = false, $postsPerPage = 0, $listingBonusCategory = false)
{
  global $wp_query;

  $reviewListFull = array_map(function ($p) use ($postType, $listingBonusCategory) {
    $item = [...$p];
    $realBonusCategories = [];

    if (empty($item['bonus_category']) && !empty($listingBonusCategory)) {
      $item['bonus_category'] = $listingBonusCategory;
    }

    if (!empty($item['bonus'])) {
      $realBonusCategories = array_map(fn($term)  => $term->term_id, aces_get_bonus_categories($item['bonus']));
      if (
        $realBonusCategories && $item['bonus_category'] &&
        !in_array($item['bonus_category'], $realBonusCategories)
      ) {
        $item['bonus_category'] = $realBonusCategories[0];
      } elseif (!$realBonusCategories) {
        $item['bonus_category'] = null;
      }
    }


    if ($postType === 'casino')
      $item['post_id'] = $p['casino_id'];
    else {
      $item['post_id'] = $p['bookmaker_id'];
    };

    unset($item['casino_id']);
    unset($item['bookmaker_id']);
    return $item;
  }, $reviewList);
  $reviewIds = array_map(fn($p) => $p['post_id'], $reviewListFull);

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

  $wp_query = new WP_Query([...$queryArgs, 'no_found_rows' => false]);

  if ($wp_query->have_posts()) {
    $reviewList = [];
    while ($wp_query->have_posts()) : $wp_query->the_post();
      $id = get_the_ID();
      $params = array_values(array_filter($reviewListFull, fn($c) => $c['post_id'] == $id));
      $reviewList[] = ['post_id' => $id, ...($params ? $params[0] : [])];

    endwhile;

    $refReviewList = array_map(fn($i) => $i['post_id'], array_values(array_filter($reviewListFull, fn($c) => !!getBrandExternalLink($c['post_id']))));

    $maxPages = $wp_query->max_num_pages;
    $currentPage = $queryArgs['paged'] ?? 1;

    wp_reset_query();

    return [$reviewList, $reviewListFull, $refReviewList, $maxPages, $currentPage, $queryArgs];
  }

  return [[], [], 0, 1];
}

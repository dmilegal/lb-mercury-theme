<?
$theme = $args['theme'] ?? 'fullwidth';
$list_theme = $args['list_theme'] ?? 'default';
$queryArgs = $args['query_args'] ?? [];
$title = $args['title'] ?? '';
$reviewList = $args['review_list'] ?? [];
$reviewListFull = $args['review_list_full'] ?? [];
$refReviewList = $args['ref_review_list'] ?? [];
$totalPages = $args['total_pages'] ?? 1;
$currentPage = $args['current_page'] ?? 1;
$disablePagination = $args['disable_pagination'] ?? false;
$cardVariant = $args['card_variant'] ?? 'default';
$postType = $args['post_type'] ?? 'casino';
$asyncLoading = $args['async_loading'] ?? false;
$showLicenseText = $args['show_license_ar_text_for_listing'] ?? false;
$licenseText = get_field("license_ar_text_for_listing", "option");
$istingBonusCategory = $args['bonus_category'] ?? false;
$filterParams = $args['filter'] ?? [];
$showPostInfo = $args['show_post_info'] ?? false;
$showBonusCategoryFilter = $args['show_bonus_category_filter'] ?? false;

if ($reviewList || $asyncLoading) {
?>
  <div data-type="<?= $postType ?>" data-ref-items="<?= esc_attr(json_encode($refReviewList)) ?>" class="<?= classNames("lb-review-list", "lb-review-list--theme_$theme", "lb-review-list--card-variant_$cardVariant") ?>">
    <div class="lb-review-list__wrapper">
      <div class="lb-review-list__inner">
        <? if ($showBonusCategoryFilter && $filterParams && isset($filterParams['bonus_categories']) && $filterParams['bonus_categories']) { ?>
          <? get_template_part('theme-parts/organs/review-list/bonus-category-filter', null, [
            'bonus_categories' => $filterParams['bonus_categories']
          ]); ?>
        <? } ?>
        <?php if ($title || ($licenseText && $showLicenseText)) { ?>
          <div class="lb-review-list__heading prose-headings prose-colors">
            <? if ($title) { ?>
              <h2 class="lb-review-list__title"><?php echo esc_html($title); ?></h2>
              <?
              if ($showPostInfo)
                get_template_part('theme-parts/organs/post-info', null);
              ?>
            <? } ?>
            <? if ($licenseText && $showLicenseText) { ?>
              <div class="lb-review-list__subtitle">
                <?= $licenseText ?>
              </div>
            <? } ?>

          </div>
        <?php } ?>
        <div class="lb-review-list__list lb-review-list__list--theme_<?= $list_theme ?>">
          <? if ($asyncLoading) { ?>
            <div class="lb-review-list__loading">
              <img class="lb-review-list__loading-ico" width="45" height="45" src="<?= get_stylesheet_directory_uri() ?>/img/loading.svg">
            </div>
          <? } ?>
          <? foreach ($reviewList as $reviewItem) {
            get_template_part('theme-parts/cells/review-card/review-card', null, [
              'card_variant' => $cardVariant,
              'post_type' => $postType,

              ...$reviewItem,
            ]);
          } ?>
        </div>
        <?
        if ($currentPage < $totalPages && !$disablePagination) { ?>
          <div class="lb-review-list__actions">
            <?= get_template_part("theme-parts/organs/review-list/load-more-button", null, [
              'query_string' => http_build_query([
                'query' => $queryArgs,
                'full_list' => $reviewListFull,
                'card_variant' => $cardVariant,
                'post_type' => $postType
              ]),
              'total_pages' => $totalPages,
              'current_page' => $currentPage
            ]); ?>
          </div>
        <? } ?>
      </div>
    </div>

  </div>
<? } ?>
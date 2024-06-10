<?
$theme = $args['theme'] ?? 'fullwidth';
$queryArgs = $args['query_args'] ?? [];
$title = $args['title'] ?? '';
$reviewList = $args['review_list'] ?? [];
$reviewListFull = $args['review_list_full'] ?? [];
$totalPages = $args['total_pages'] ?? 1;
$currentPage = $args['current_page'] ?? 1;
$disablePagination = $args['disable_pagination'] ?? false;
$cardVariant = $args['card_variant'] ?? 'default';
$postType = $args['post_type'] ?? 'casino';
$showLicenseText = $args['show_license_ar_text_for_listing'] ?? false;
$licenseText = get_field("license_ar_text_for_listing", "option");

if ($reviewList) {
?>

  <div class="<?= classNames("lb-review-list", "lb-review-list--theme_$theme", "lb-review-list--card-variant_$cardVariant") ?>">
    <div class="lb-review-list__wrapper">
      <div class="lb-review-list__inner">
        <?php if ($title || ($licenseText && $showLicenseText)) { ?>
          <div class="lb-review-list__heading prose-headings prose-colors">
            <? if ($title) { ?>
              <h2 class="lb-review-list__title"><?php echo esc_html($title); ?></h2>
            <? } ?>
            <? if ($licenseText && $showLicenseText) { ?>
              <div class="lb-review-list__subtitle">
                <?= $licenseText ?>
              </div>
            <? } ?>
          </div>
        <?php } ?>
        <div class="lb-review-list__list">
          <? foreach ($reviewList as $reviewItem) {
            get_template_part('theme-parts/cells/review-card/review-card', null, [
              'card_variant' => $cardVariant,
              'post_type' => $postType,
              ...$reviewItem
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
<?
$theme = $args['theme'] ?? 'fullwidth';
$queryArgs = $args['query_args'] ?? [];
$title = $args['title'] ?? '';
$casinoList = $args['casino_list'] ?? [];
$casinoListFull = $args['casino_list_full'] ?? [];
$totalPages = $args['total_pages'] ?? 1;
$currentPage = $args['current_page'] ?? 1;
$disablePagination = $args['disable_pagination'] ?? false;
$cardVariant = $args['card_variant'] ?? 'default';

if ($casinoList) {
?>

  <div class="<?= classNames("lb-casino-list", "lb-casino-list--theme_$theme", "lb-casino-list--card-variant_$cardVariant") ?>">
    <div class="lb-casino-list__wrapper">
      <div class="lb-casino-list__inner">
        <?php if ($title) { ?>
          <div class="lb-casino-list__heading prose-headings">
            <h2 class="lb-casino-list__title"><?php echo esc_html($title); ?></h2>
            <div class="lb-casino-list__subtitle">
              <? get_template_part('theme-parts/organs/post-info', null); ?>
            </div>
          </div>
        <?php } ?>
        <div class="lb-casino-list__list">
          <? foreach ($casinoList as $casino) {
            get_template_part('theme-parts/cells/casino-card/casino-card', null, [
              'card_variant' => $args['card_variant'],
              ...$casino
            ]);
          } ?>
        </div>
        <?
        if ($currentPage < $totalPages && !$disablePagination) { ?>
          <div class="lb-casino-list__actions">
            <?= get_template_part("theme-parts/organs/casino-list/load-more-button", null, [
              'query_string' => http_build_query(['query' => $queryArgs, 'full_list' => $casinoListFull]),
              'total_pages' => $totalPages,
              'current_page' => $currentPage
            ]); ?>
          </div>
        <? } ?>
      </div>
    </div>

  </div>
<? } ?>
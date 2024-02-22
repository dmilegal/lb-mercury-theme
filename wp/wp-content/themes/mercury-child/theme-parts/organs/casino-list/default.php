<?
$theme = $args['theme'] ?? 'fullwidth';
$queryArgs = $args['query_args'] ?? [];
$title = $args['title'] ?? '';
$casinoList = $args['casino_list'] ?? [];
$casinoListFull = $args['casino_list_full'] ?? [];
$totalPages =  $args['total_pages'] ?? 1;
$currentPage =  $args['current_page'] ?? 1;

if ($casinoList) {
?>
  <div class="<?= classNames("lb-casino-list", "lb-casino-list--theme_$theme") ?>">
    <div class="lb-casino-list__inner">
      <?php if ($title) { ?>
        <div class="lb-casino-list__title prose-headings">
          <h2><?php echo esc_html($title); ?></h2>
        </div>
      <?php } ?>
      <div class="lb-casino-list__list">
        <? foreach ($casinoList as $casino) {
          get_template_part('theme-parts/cells/casino-card', null, [...$casino]);
        } ?>
      </div>
      <?
      if ($currentPage < $totalPages) { ?>
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
<? } ?>
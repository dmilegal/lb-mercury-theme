<?
$queryArgs = $args['query_args'] ?? [];
$title = $args['title'] ?? '';
$postIds = $args['post_ids'] ?? [];
$totalPages =  $args['total_pages'] ?? 1;
$currentPage =  $args['current_page'] ?? 1;

if ($postIds) {
?>
  <div class="lb-casino-list">
    <div class="lb-casino-list__inner">
      <?php if ($title) { ?>
        <div class="lb-casino-list__title">
          <span><?php echo esc_html($title); ?></span>
        </div>
      <?php } ?>
      <div class="lb-casino-list__list">
        <? foreach ($postIds as $postId) {
          get_template_part('theme-parts/cells/casino-card', null, ['casino_id' => $postId]);
        } ?>
      </div>
      <? if ($currentPage < $totalPages) { ?>
        <div class="lb-casino-list__actions">
          <?= get_template_part("theme-parts/organs/casino-list/load-more-button", null, [
            'query_string' => http_build_query($queryArgs),
            'total_pages' => $totalPages,
            'current_page' => $currentPage
          ]); ?>
        </div>
      <? } ?>
    </div>
  </div>
<? } ?>
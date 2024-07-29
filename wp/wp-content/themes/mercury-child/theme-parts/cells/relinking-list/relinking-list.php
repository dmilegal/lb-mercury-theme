<?
$theme = $args['theme'] ?? 'simple-text';
$title = $args['title'] ?? '';
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$enableLimit = $args['enable_limit'] ?? false;
$limit = $enableLimit ? ($args['number_to_show'] ?? $args['number_to_show'] ?: 8) : 0;
$list = relinkingListTransform($args['list'] ?? []);
$limitedList = $limit ? array_slice($list, 0, $limit) : $list;
$listTail = $limit ? array_slice($list, $limit, count($list)) : [];
$itemTheme = $args['theme'] ?? 'only-text';
$isLimited = count($limitedList) < count($list);

ob_start();
?>
<section data-wp-interactive="relinkingList" <?= wp_interactivity_data_wp_context([
                                                'list' => $limitedList,
                                                'listTail' => $listTail,
                                                'limit' => $limit,
                                                'isLimited' => $isLimited
                                              ]); ?> class="<?= classNames("lb-relinking-list", "lb-relinking-list--theme_$theme", $className) ?>" style="<?= stylesValue($style) ?>">
  <? if ($title) { ?>
    <header class="lb-relinking-list__header">
      <h2 class="lb-relinking-list__title"><?= $title ?></h2>
    </header>
  <? } ?>
  <div class="<?= classNames("lb-relinking-list__list") ?>">
    <template data-wp-each="context.list"  data-wp-each-key="context.item.key">
      <? get_template_part("theme-parts/molecules/relinking-item/relinking-item", null, [
        'theme' => $itemTheme
      ]); ?>
    </template>
  </div>

  <? if ($isLimited) { ?>
    <div class="lb-relinking-list__actions" data-wp-bind--hidden="!context.isLimited">
      <? get_template_part('theme-parts/atoms/button', null, [
        'size' => 'xl',
        'className' => 'lb-relinking-list__show-more',
        'variant' => 'outlined',
        'content' => __('Show more', 'mercury-child'),
        'data' => [
          'wp-on-async--click' => 'callbacks.showMore'
        ]
      ]); ?>
    </div>
  <? } ?>
</section>
<?
$html = (string) ob_get_clean();
echo wp_interactivity_process_directives($html);

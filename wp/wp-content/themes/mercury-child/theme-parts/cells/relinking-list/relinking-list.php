<?
$theme = $args['theme'] ?? 'simple-text';
$title = $args['title'] ?? '';
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$limit = $args['limit'] ?? 0;
$list = relinkingListTransform($args['list'] ?? []);
$limitedList = $limit ? array_slice($list, 0, $limit) : $list;
$listTail = $limit ? array_slice($list, $limit, -1) : [];
$itemTheme = $args['theme'] ?? 'simple-text';

ob_start();
?>
<section 
  data-wp-interactive="relinkingList" 
  <?= wp_interactivity_data_wp_context([
    'limitedList' => $limitedList,
    'listTail' => $listTail,
    'limit' => $limit,
    'isLimited' => count($limitedList) < count($list) 
  ]); ?>
  class="<?= classNames("lb-relinking-list", "lb-relinking-list--theme_$theme", $className) ?>" 
  style="<?= stylesValue($style) ?>">
  <? if ($title) { ?>
    <header class="lb-relinking-list__header">
      <h2 class="lb-relinking-list__title"><?= $title ?></h2>
    </header>
  <? } ?>
  <div class="<?= classNames("lb-relinking-list__list") ?>">
    <template data-wp-each="context.limitedList">
      <? get_template_part("theme-parts/molecules/relinking-item/relinking-item", null, [
        'theme' => $itemTheme
      ]); ?>
    </template>
  </div>
</section>
<?
$html = (string) ob_get_clean();
echo wp_interactivity_process_directives($html);
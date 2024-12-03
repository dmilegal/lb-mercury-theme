<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';
$title = $args['title'] ?? '';
$featuresList = $args['feature_list'] ?? [];
$cardVariant = $args['variant'] ?? 'shaded';
$listVariant = 1;
if ($cardVariant == 'plain') {
  $listVariant = 2;
}
?>
<section class="<?= classNames("lb-feature-grid", "lb-feature-grid--variant_$listVariant", $className) ?>" style="<?= $style ?>">
  <div class="lb-feature-grid__container">
    <? if ($title) { ?>
      <header class="lb-feature-grid__header">
        <h2 class="lb-feature-grid__title"><?= $title ?></h2>
      </header>
    <? } ?>
    <div class="lb-feature-grid__list">
      <? foreach ($featuresList as $item) { ?>
        <? get_template_part('theme-parts/molecules/feature-grid-item', null, [
          'title' => $item['title'],
          'content' => $item['content'],
          'icon_id' => $item['icon'],
          'variant' => $cardVariant ?? null,
        ]); ?>
      <? } ?>
    </div>
  </div>
</section>
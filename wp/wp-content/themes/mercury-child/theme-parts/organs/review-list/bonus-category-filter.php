<?
$bonusCategories = $args['bonus_categories'] ?? [];
?>

<form class="lb-review-list__cat-filter not-prose">
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <label>
          <input type="radio" name="filter[bonus_categories][]" value="" class="lb-review-list__cat-filter-inp">
          <? get_template_part('theme-parts/cells/relinking-item/relinking-item', null, [
            'theme' => 'only-text',
            'className' => 'lb-review-list__cat-filter-item-link',
            'title' => __('All', 'mercury-child'),
            'data' => [
              'category' => ''
            ]
          ]); ?>
        </label>

      </div>
      <? foreach ($bonusCategories as $catId) {
        $cat = get_term($catId, 'bonus-category');
      ?>
        <div class="swiper-slide">
          <label>
            <input type="radio" name="filter[bonus_categories][]" value="<?= $catId ?>" class="lb-review-list__cat-filter-inp">
            <? get_template_part('theme-parts/cells/relinking-item/relinking-item', null, [
              'theme' => 'only-text',
              'className' => 'lb-review-list__cat-filter-item-link',
              'title' => $cat->name,
            ]); ?>
          </label>
        </div>
      <? } ?>
    </div>
  </div>
  <? get_template_part('theme-parts/cells/slider/nav-button-sm', null, [
    'icon' => 'arrow-left',
    'className' => 'lb-review-list__cat-filter-nav lb-review-list__cat-filter-nav-prev',
  ]);
  get_template_part('theme-parts/cells/slider/nav-button-sm', null, [
    'icon' => 'arrow-right',
    'className' => 'lb-review-list__cat-filter-nav lb-review-list__cat-filter-nav-next',
  ]); ?>
</form>
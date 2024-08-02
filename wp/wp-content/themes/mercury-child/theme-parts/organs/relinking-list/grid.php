<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);
?>
<section data-wp-interactive="relinkingList" <?= wp_interactivity_data_wp_context([
                                                'isLimited' => $params['is_limited'],
                                              ]); ?> class="<?= classNames("lb-relinking-list", 
                                              "not-prose", 
                                              "lb-relinking-list--theme_grid", 
                                              "lb-relinking-list--gap_{$params['gap']}",
                                              "lb-relinking-list--col-count_{$params['col_count']}",                                              $params['className']) ?>" style="<?= stylesValue($params['style']) ?>">
  <? if ($params['title']) { ?>
    <header class="lb-relinking-list__header">
      <h2 class="lb-relinking-list__title"><?= $params['title'] ?></h2>
    </header>
  <? } ?>
  <div class="<?= classNames("lb-relinking-list__list") ?>">
    <? foreach ($params['list'] as $ind => $item) {
      get_template_part("theme-parts/cells/relinking-item/relinking-item", null, [
        'theme' => $params['theme'],
        ...($params['is_limited'] && $ind >= $params['number_to_show'] ? ['style' => 'display: none;'] : []),
        ...$item
      ]);
    } ?>
  </div>
  <? if ($params['is_limited']) { ?>
    <div class="lb-relinking-list__actions" data-wp-bind--hidden="!context.isLimited">
      <? get_template_part('theme-parts/atoms/button', null, [
        'size' => 'xl',
        'className' => 'lb-relinking-list__show-more',
        'variant' => 'outlined',
        'content' => __('Show more', 'mercury-child'),
        'data' => [
          'wp-on-async--click' => 'actions.showMore'
        ]
      ]); ?>
    </div>
  <? } ?>
</section>
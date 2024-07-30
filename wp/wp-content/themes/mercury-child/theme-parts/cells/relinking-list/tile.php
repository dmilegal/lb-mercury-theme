<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);
?>
<section data-wp-interactive="relinkingList" <?= wp_interactivity_data_wp_context([
                                                'isLimited' => $params['is_limited'],
                                              ]); ?> class="<?= classNames("lb-relinking-list", "not-prose", "lb-relinking-list--theme_tile", $params['className']) ?>" style="<?= stylesValue($params['style']) ?>">
  <? if ($params['title']) { ?>
    <header class="lb-relinking-list__header">
      <h2 class="lb-relinking-list__title"><?= $params['title'] ?></h2>
    </header>
  <? } ?>
  <div class="<?= classNames("lb-relinking-list__list") ?>">
    <? foreach ($params['list'] as $ind => $item) {
      get_template_part("theme-parts/molecules/relinking-item/relinking-item", null, [
        'theme' => $params['theme'],
        'className' => '',
        'hidden' => $params['is_limited'] ? $ind >= $params['number_to_show'] : false,
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
<?
$params = isset($args['prepared']) ? $args : relinkingListParams($args);
?>
<section data-wp-interactive="relinkingList" <?= wp_interactivity_data_wp_context([
                                                'isLimited' => $params['is_limited'],
                                                'col_count' => $params['col_count'],
                                              ]); ?> class="<?= classNames(
                                                              "lb-relinking-list",
                                                              "lb-relinking-list--theme_slider",
                                                              $params['className']
                                                            ) ?>" style="<?= stylesValue($params['style']) ?>" data-wp-init="callbacks.initSlider">
  <? if ($params['title']) { ?>
    <header class="lb-relinking-list__header">
      <h2 class="<?= classNames(
                    "not-prose",
                    "lb-relinking-list__title",
                    "lb-relinking-list__title--size_{$params['title_size']}",
                    "lb-relinking-list__title--color_{$params['title_color']}",
                  ) ?>"><?= $params['title'] ?></h2>
    </header>
  <? } ?>
  <div class="lb-relinking-list__slider-wrapper">
    <div class="<?= classNames(
                  "swiper lb-relinking-list__slider",
                  "lb-relinking-list__slider--gap_{$params['gap']}",
                  "lb-relinking-list__slider--col-count_{$params['col_count']}",
                  [
                    'lb-relinking-list__slider--only-mobile' => $params['only_mobile_slider']
                  ],
                ) ?>">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <? foreach ($params['list'] as $ind => $item) { ?>
          <div class="swiper-slide">
            <? get_template_part("theme-parts/cells/relinking-item/relinking-item", null, [
              'theme' => $params['theme'],
              ...$item
            ]); ?>
          </div>
        <? } ?>
      </div>
    </div>
    <?
    get_template_part('theme-parts/cells/slider/nav-button-sm', null, [
      'icon' => 'arrow-left',
      'className' => 'lb-relinking-list__slider-nav lb-relinking-list__slider-prev',
    ]);
    get_template_part('theme-parts/cells/slider/nav-button-sm', null, [
      'icon' => 'arrow-right',
      'className' => 'lb-relinking-list__slider-nav lb-relinking-list__slider-next',
    ]);
    ?>
  </div>


</section>
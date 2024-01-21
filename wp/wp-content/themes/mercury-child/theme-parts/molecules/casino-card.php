<?
$className = $args['className'] ?? '';
$style = $args['style'] ?? '';

$casinoId = $args['casino_id'] ?? null;

if (!$casinoId) return;

$casino_allowed_html = array(
  'a' => array(
    'href' => true,
    'title' => true,
    'target' => true,
    'rel' => true
  ),
  'ul'=> array(),
  'li'=> array(),
  'br' => array(),
  'em' => array(),
  'span' => array(
    'class' => true
  ),
  'div' => array(
    'class' => true
  ),
  'p' => array()
);

$casino_detailed_tc = wp_kses(get_post_meta($casinoId, 'casino_detailed_tc', true), $casino_allowed_html);
$overall_rating = esc_html(get_post_meta($casinoId, 'casino_overall_rating', true));
$casino_permalink_button_title = esc_html(get_post_meta($casinoId, 'casino_permalink_button_title', true));
$casino_button_title = esc_html(get_post_meta($casinoId, 'casino_button_title', true));
$casino_external_link = esc_url(get_post_meta($casinoId, 'casino_external_link', true));
$casino_terms_desc = wp_kses(get_post_meta($casinoId, 'casino_terms_desc', true), $casino_allowed_html);
$bonusFields = get_field('bonus_fields', $casinoId);

if ($external_link) {
  if ($casino_external_link) {
    $external_link_url = $casino_external_link;
  } else {
    $external_link_url = get_the_permalink();
  }
} else {
  $external_link_url = get_the_permalink();
}


if ($casino_button_title) {
  $button_title = $casino_button_title;
} else {
  if (get_option('casinos_play_now_title')) {
    $button_title = esc_html(get_option('casinos_play_now_title'));
  } else {
    $button_title = esc_html__('Play Now', 'aces');
  }
}

if ($casino_permalink_button_title) {
  $permalink_button_title = $casino_permalink_button_title;
} else {
  if (get_option('casinos_read_review_title')) {
    $permalink_button_title = esc_html(get_option('casinos_read_review_title'));
  } else {
    $permalink_button_title = esc_html__('Read Review', 'aces');
  }
}

?>
<div class="<?= classNames($className, 'lb-casino-card not-prose') ?>" style="<?= stylesValue($style) ?>">
  <div class="lb-casino-card__inner">
    <div class="lb-casino-card__main">
      <div class="lb-casino-card__header">
        <?= get_the_post_thumbnail($casinoId, [70, 70], [
          "class" => "lb-casino-card__logo"
        ]) ?>
        <div>
          <div class="lb-casino-card__title"><?= get_the_title($casinoId) ?></div>
          <div class="lb-casino-card__info">
            <div class="lb-casino-card__rating">
              <i class="icon-star"></i>
              <?= $overall_rating ?>
            </div>
            <div>
              <a class="lb-casino-card__link" href="<?= get_the_permalink($casinoId) ?>" title="<?php echo esc_attr($permalink_button_title); ?>"><?php echo esc_html($permalink_button_title); ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php if ($casino_terms_desc) { ?>
        <div class="lb-casino-card__desc">
          <?= wp_kses($casino_terms_desc, $casino_allowed_html); ?>
        </div>
      <? } ?>
    </div>
    <div class="lb-casino-card-promo">
      <? if (isset($bonusFields['bonus_title'])) { ?>
        <div class="lb-casino-card-promo__title">
          <?= $bonusFields['bonus_title'] ?>
        </div>
      <? } ?>
      <div class="lb-casino-card-promo__actions">
        <?
        get_template_part('theme-parts/atoms/button', null, [
          'size' => 'xl',
          'variant' => 'outlined',
          'content' => __('Copy Promo', 'mercury-child'),
          'prefix' => '<i class="icon-copy"></i>',
          'className' => 'lb-casino-card__copy'
        ]);
        if ($external_link_url)
          get_template_part('theme-parts/atoms/button', null, [
            'size' => 'xl',
            'color' => 'primary',
            'className' => 'lb-casino-card__play',
            'content' => esc_html($button_title),
            'href' => esc_url($external_link_url),
            'target' => $external_link ? "_blank" : '',
            'rel' => $external_link ? "nofollow" : ''
          ]);
        ?>
      </div>
      <div class="lb-casino-card-promo__tc">
        Read about <a>T&C</a>
      </div>
    </div>
  </div>
  <?php if ($casino_detailed_tc) { ?>
    <div class="lb-casino-card__tc">
      <?= wp_kses($casino_detailed_tc, $casino_allowed_html); ?>
    </div>
  <? } ?>
</div>